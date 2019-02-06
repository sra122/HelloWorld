<?php
namespace HelloWorld\Controllers;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\DataBase\Contracts;
use Plenty\Modules\Item\Variation\Contracts\VariationSearchRepositoryContract;
use Plenty\Modules\Item\VariationCategory\Contracts\VariationCategoryRepositoryContract;
use Plenty\Modules\Item\VariationStock\Contracts\VariationStockRepositoryContract;
use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Modules\Item\Property\Contracts\PropertyRepositoryContract;
use Plenty\Modules\Item\Search\Mutators\KeyMutator;
use Plenty\Plugin\Application;
use Plenty\Modules\Item\Variation\Contracts\VariationRepositoryContract;
use Plenty\Modules\Category\Contracts\CategoryRepositoryContract;
use Plenty\Modules\System\Contracts\SystemInformationRepositoryContract;
use Plenty\Modules\System\Contracts\WebstoreRepositoryContract;
use Plenty\Modules\Market\Settings\Factories\SettingsCorrelationFactory;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\Authorization\Services\AuthHelper;
use Plenty\Modules\Item\Attribute\Contracts\AttributeValueRepositoryContract;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Modules\Item\ItemImage\Contracts\ItemImageRepositoryContract;
use Plenty\Modules\Item\VariationImage\Contracts\VariationImageRepositoryContract;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;
use Plenty\Modules\Item\VariationWarehouse\Contracts\VariationWarehouseRepositoryContract;
use Plenty\Modules\Market\Helper\Contracts\MarketAttributeHelperRepositoryContract;
use Plenty\Modules\Item\Manufacturer\Contracts\ManufacturerRepositoryContract;
use Plenty\Modules\Market\Credentials\Contracts\CredentialsRepositoryContract;
use Plenty\Modules\Item\VariationMarketIdentNumber\Contracts\VariationMarketIdentNumberRepositoryContract;
use Plenty\Plugin\Http\Request;
class ContentController extends Controller
{
    /**
     * @return array|bool
     */
    public function productDetails()
    {
        $itemRepository = pluginApp(VariationSearchRepositoryContract::class);

        $itemRepository->setSearchParams([
            'with' => [
                'item' => null,
                'lang' => 'de',
                'variationSalesPrices' => true,
                'variationCategories' => true,
                'variationClients' => true,
                'variationAttributeValues' => true,
                'variationSkus' => true,
                'variationMarkets' => true,
                'variationSuppliers' => true,
                'variationWarehouses' => true,
                'variationDefaultCategory' => true,
                'unit' => true,
                'variationStock' => [
                    'params' => [
                        'type' => 'virtual'
                    ],
                    'fields' => [
                        'stockNet'
                    ]
                ],
                'stock' => true,
                'images' => true,
                ]
        ]);

        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name', 'id']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) === 'PandaBlack' && count($pandaBlackReferrerID) === 0) {
                array_push($pandaBlackReferrerID, $orderReferrerList);
            }
        }

        foreach($pandaBlackReferrerID as $pandaBlackId) {
            $itemRepository->setFilters([
                'referrerId' => (int)$pandaBlackId['id']
            ]);
        }


        $resultItems = $itemRepository->search();

        $items = [];
        $completeData = [];

        $settingsRepositoryContract = pluginApp(SettingsRepositoryContract::class);
        $categoryMapping = $settingsRepositoryContract->search(['marketplaceId' => 'HelloWorld', 'type' => 'category'], 1, 100)->toArray();

        $categoryId = [];

        foreach($categoryMapping['entries'] as $category) {
            $categoryId[$category->settings[0]['category'][0]['id']] = $category->settings;
        }

        $crons = $settingsRepositoryContract->search(['marketplaceId' => 'HelloWorld', 'type' => 'property'], 1, 100)->toArray();

        /*$firstCron = true;
        foreach($crons['entries'] as $cron)
        {
            if(isset($cron['settings']['pbItemCron'])) {
                $firstCron = false;
            }
        }*/

        //Testing
        $firstCron = true;


        foreach($resultItems->getResult() as $key => $variation) {
            if((time() - strtotime($variation['updatedAt'])) < 604800 && isset($categoryId[$variation['variationCategories'][0]['categoryId']])) {

                $variationStock = pluginApp(VariationStockRepositoryContract::class);
                $stockData = $variationStock->listStockByWarehouse($variation['id']);

                $manufacturerRepository = pluginApp(ManufacturerRepositoryContract::class);
                $manufacturer = $manufacturerRepository->findById($variation['item']['manufacturerId'], ['*'])->toArray();

                $variationMarketIdentNumber = pluginApp(VariationMarketIdentNumberRepositoryContract::class);
                $asin = $variationMarketIdentNumber->findByVariationId($variation['id']);

                $textArray = $variation['item']->texts;
                $variation['texts'] = $textArray->toArray();

                $categoryMappingInfo = $categoryId[$variation['variationCategories'][0]['categoryId']];
                $items[$key] = [$variation, $categoryId[$variation['variationCategories'][0]['categoryId']], $manufacturer];

                $completeData[$key] = array(
                    'parent_product_id' => $variation['mainVariationId'],
                    'product_id' => $variation['id'],
                    'item_id' => $variation['itemId'],
                    'name' => $variation['item']['texts'][0]['name1'],
                    'price' => $variation['variationSalesPrices'][0]['price'],
                    'currency' => $variation['variationSalesPrices'][0]['price'],
                    'category' => $categoryMappingInfo[0]['vendorCategory'][0]['id'],
                    'short_description' => $variation['item']['texts'][0]['description'],
                    'image_url' => $variation['images'][0]['url'],
                    'color' => '',
                    'size' => '',
                    'content_supplier' => 'PlentyMarkets',
                    'product_type' => '',
                    'quantity' => $stockData[0]['netStock'],
                    'store_name' => '',
                    'status' => $variation['isActive'],
                    'brand' => $manufacturer['name'],
                    'last_update_at' => $variation['updatedAt'],
                    'asin' => $asin
                );

                $attributeSets = [];
                foreach($variation['variationAttributeValues'] as $attribute) {

                    $attributeId = array_reverse(explode('-', $attribute['attribute']['backendName']))[0];
                    $attributeValue = array_reverse(explode('-', $attribute['attributeValue']['backendName']))[0];
                    $attributeSets[(int)$attributeId] = (int)$attributeValue;
                }

                $completeData[$key]['attributes'] = $attributeSets;
            }
        }

        $templateData = array(
            'exportData' => $completeData,
            'completeData' => $items,
            'crons' => $crons
        );

        return $templateData;

    }


    /**
     * @param SettingsRepositoryContract $settingRepo
     * @param LibraryCallContract $libCall
     * @return mixed
     */
    public function sendProductDetails()
    {
        $libCall = pluginApp(LibraryCallContract::class);

        $propertiesRepo = pluginApp(SettingsRepositoryContract::class);
        $properties = $propertiesRepo->find('HelloWorld', 'property');

        foreach($properties as $key => $property)
        {
            if(isset($property->settings['pbToken'])) {

                $productDetails = $this->productDetails();

                if(!empty($productDetails['exportData'])) {

                    if($property->settings['pbToken']['expires_in'] > time()) {

                        $this->saveCronTime();

                        $response = $libCall->call(
                            'HelloWorld::products_to_pandablack',
                            [
                                'token' => $property->settings['pbToken']['token'],
                                'product_details' => $productDetails
                            ]
                        );
                        return $response;
                    } else if($property->settings['pbToken']['refresh_token_expires_in'] > time()) {

                        $this->saveCronTime();

                        $response = $libCall->call(
                            'HelloWorld::products_to_pandablack',
                            [
                                'token' => $property->settings['pbToken']['refresh_token'],
                                'product_details' => $productDetails
                            ]
                        );
                        return $response;
                    }
                }
                break;
            }
        }
    }

    /**
     * @return mixed
     */
    public function saveCronTime()
    {
        $settingRepo = pluginApp(SettingsRepositoryContract::class);

        $crons = $settingRepo->search(['marketplaceId' => 'HelloWorld', 'type' => 'property'], 1, 100)->toArray();

        foreach($crons['entries'] as $key => $cron) {
            if(isset($cron['settings']['pbItemCron'])) {
                $cronData = [
                    'pbItemCron' => [
                        'pastCronTime' => $cron['settings']['pbItemCron']['presentCronTime'],
                        'presentCronTime' => time()
                    ]
                ];
                $response = $settingRepo->update($cronData, $key);
                return $response;
            }
        }
        $cronData = [
            'pbItemCron' => [
                'pastCronTime' => null,
                'presentCronTime' => time()
            ]
        ];
        $response = $settingRepo->create('HelloWorld', 'property', $cronData);
        return $response;
    }


    public function getAsin()
    {
        $variationMarketIdentNumber = pluginApp(VariationMarketIdentNumberRepositoryContract::class);
        $asin = $variationMarketIdentNumber->findByVariationId(1027);

        return $asin;
    }

    public function extractItemInfo()
    {
        $itemRepository = pluginApp(VariationSearchRepositoryContract::class);

        $itemRepository->setSearchParams([
            'with' => [
                'item' => null,
                'lang' => 'de',
                'variationSalesPrices' => true,
                'variationCategories' => true,
                'variationClients' => true,
                'variationAttributeValues' => true,
                'variationSkus' => true,
                'variationMarkets' => true,
                'variationSuppliers' => true,
                'variationWarehouses' => true,
                'variationDefaultCategory' => true,
                'unit' => true,
                'variationStock' => [
                    'params' => [
                        'type' => 'virtual'
                    ],
                    'fields' => [
                        'stockNet'
                    ]
                ],
                'stock' => true,
                'images' => true,
            ]
        ]);

        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name', 'id']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) === 'PandaBlack' && count($pandaBlackReferrerID) === 0) {
                array_push($pandaBlackReferrerID, $orderReferrerList);
            }
        }

        foreach($pandaBlackReferrerID as $pandaBlackId) {
            $itemRepository->setFilters([
                'referrerId' => (int)$pandaBlackId['id']
            ]);
        }

        $resultItems = $itemRepository->search();

        $items = [];
        $completeData = [];

        $settingsRepositoryContract = pluginApp(SettingsRepositoryContract::class);
        $categoryMapping = $settingsRepositoryContract->search(['marketplaceId' => 'HelloWorld', 'type' => 'category'], 1, 100)->toArray();

        $categoryId = [];

        foreach($categoryMapping['entries'] as $category) {
            $categoryId[$category->settings[0]['category'][0]['id']] = $category->settings;
        }

        $crons = $settingsRepositoryContract->search(['marketplaceId' => 'HelloWorld', 'type' => 'property'], 1, 100)->toArray();

        foreach($resultItems->getResult() as $key => $variation) {
            if((time() - strtotime($variation['updatedAt'])) < 86400 && isset($categoryId[$variation['variationCategories'][0]['categoryId']])) {

                $variationStock = pluginApp(VariationStockRepositoryContract::class);
                $stockData = $variationStock->listStockByWarehouse($variation['id']);

                $manufacturerRepository = pluginApp(ManufacturerRepositoryContract::class);
                $manufacturer = $manufacturerRepository->findById($variation['item']['manufacturerId'], ['*'])->toArray();

                /*$variationMarketIdentNumber = pluginApp(VariationMarketIdentNumberRepositoryContract::class);
                $asin = $variationMarketIdentNumber->findByVariationId($variation['id']);*/

                $textArray = $variation['item']->texts;
                $variation['texts'] = $textArray->toArray();

                $categoryMappingInfo = $categoryId[$variation['variationCategories'][0]['categoryId']];
                $items[$key] = [$variation, $categoryId[$variation['variationCategories'][0]['categoryId']], $manufacturer];

                $completeData[$key] = array(
                    'parent_product_id' => $variation['mainVariationId'],
                    'product_id' => $variation['id'],
                    'item_id' => $variation['itemId'],
                    'name' => $variation['item']['texts'][0]['name1'],
                    'price' => $variation['variationSalesPrices'][0]['price'],
                    'currency' => $variation['variationSalesPrices'][0]['price'],
                    'category' => $categoryMappingInfo[0]['vendorCategory'][0]['name'],
                    'short_description' => $variation['item']['texts'][0]['description'],
                    'image_url' => $variation['images'][0]['url'],
                    'color' => '',
                    'size' => '',
                    'content_supplier' => 'PlentyMarkets',
                    'product_type' => '',
                    'quantity' => $stockData[0]['netStock'],
                    'store_name' => '',
                    'status' => $variation['isActive'],
                    'brand' => $manufacturer['name'],
                    'last_update_at' => $variation['updatedAt']
                );

                $attributeSets = [];
                foreach($variation['variationAttributeValues'] as $attribute) {

                    $attributeId = array_reverse(explode('-', $attribute['attribute']['backendName']))[0];
                    $attributeValue = array_reverse(explode('-', $attribute['attributeValue']['backendName']))[0];
                    $attributeSets[(int)$attributeId] = (int)$attributeValue;
                }

                $completeData[$key]['attributes'] = $attributeSets;
            }
        }

        $test = array(
            'complete' => $resultItems,
            'pb' => $completeData
        );

        return $test;
    }

}