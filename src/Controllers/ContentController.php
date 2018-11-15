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
use Plenty\Plugin\Http\Request;
class ContentController extends Controller
{
    /**
     * @return array
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
                'VariationAttributeValues' => true,
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

            // Update only if products are updated in last 1 hour.
            if((time() - strtotime($variation['updatedAt'])) < 3600 || !isset($crons['entries']['pbItemCron'])) {

                if(!$variation['isMain'] && isset($categoryId[$variation['variationCategories'][0]['categoryId']])) {

                    $variationStock = pluginApp(VariationStockRepositoryContract::class);
                    $stockData = $variationStock->listStockByWarehouse($variation['id']);

                    $manufacturerRepository = pluginApp(ManufacturerRepositoryContract::class);
                    $manufacturer = $manufacturerRepository->findById($variation['item']['manufacturerId'], ['*'])->toArray();

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
                        'quantity' => $stockData['netStock'],
                        'store_name' => '',
                        'status' => $variation['isActive'],
                        'brand' => $manufacturer['name'],
                        'variant_attribute_1' => isset($variation['VariationAttributeValues'][0]) ? $variation['VariationAttributeValues'][0]['attribute']['backendName'] : '',
                        'variant_attribute_value_1' => isset($variation['VariationAttributeValues'][0]) ? $variation['VariationAttributeValues'][0]['attributeValue']['backendName'] : '',
                        'variant_attribute_2' => isset($variation['VariationAttributeValues'][1]) ? $variation['VariationAttributeValues'][1]['attribute']['backendName'] : '',
                        'variant_attribute_value_2' => isset($variation['VariationAttributeValues'][1]) ? $variation['VariationAttributeValues'][1]['attributeValue']['backendName'] : '',
                        'variant_attribute_3' => isset($variation['VariationAttributeValues'][2]) ? $variation['VariationAttributeValues'][2]['attribute']['backendName'] : '',
                        'variant_attribute_value_3' => isset($variation['VariationAttributeValues'][2]) ? $variation['VariationAttributeValues'][2]['attributeValue']['backendName'] : '',
                        'variant_attribute_4' => isset($variation['VariationAttributeValues'][3]) ? $variation['VariationAttributeValues'][3]['attribute']['backendName'] : '',
                        'variant_attribute_value_4' => isset($variation['VariationAttributeValues'][3]) ? $variation['VariationAttributeValues'][3]['attributeValue']['backendName'] : '',
                        'variant_attribute_5' => isset($variation['VariationAttributeValues'][4]) ? $variation['VariationAttributeValues'][4]['attribute']['backendName'] : '',
                        'variant_attribute_value_5' => isset($variation['VariationAttributeValues'][4]) ? $variation['VariationAttributeValues'][4]['attributeValue']['backendName'] : '',
                        'variant_attribute_6' => isset($variation['VariationAttributeValues'][5]) ? $variation['VariationAttributeValues'][5]['attribute']['backendName'] : '',
                        'variant_attribute_value_6' => isset($variation['VariationAttributeValues'][5]) ? $variation['VariationAttributeValues'][5]['attributeValue']['backendName'] : '',
                        'variant_attribute_7' => isset($variation['VariationAttributeValues'][6]) ? $variation['VariationAttributeValues'][6]['attribute']['backendName'] : '',
                        'variant_attribute_value_7' => isset($variation['VariationAttributeValues'][6]) ? $variation['VariationAttributeValues'][6]['attributeValue']['backendName'] : '',
                        'variant_attribute_8' => isset($variation['VariationAttributeValues'][7]) ? $variation['VariationAttributeValues'][7]['attribute']['backendName'] : '',
                        'variant_attribute_value_8' => isset($variation['VariationAttributeValues'][7]) ? $variation['VariationAttributeValues'][7]['attributeValue']['backendName'] : '',
                        'variant_attribute_9' => isset($variation['VariationAttributeValues'][8]) ? $variation['VariationAttributeValues'][8]['attribute']['backendName'] : '',
                        'variant_attribute_value_9' => isset($variation['VariationAttributeValues'][8]) ? $variation['VariationAttributeValues'][8]['attributeValue']['backendName'] : '',
                        'variant_attribute_10' => isset($variation['VariationAttributeValues'][9]) ? $variation['VariationAttributeValues'][9]['attribute']['backendName'] : '',
                        'variant_attribute_value_10' => isset($variation['VariationAttributeValues'][9]) ? $variation['VariationAttributeValues'][9]['attributeValue']['backendName'] : '',
                        'variant_attribute_11' => isset($variation['VariationAttributeValues'][10]) ? $variation['VariationAttributeValues'][10]['attribute']['backendName'] : '',
                        'variant_attribute_value_11' => isset($variation['VariationAttributeValues'][10]) ? $variation['VariationAttributeValues'][10]['attributeValue']['backendName'] : '',
                        'variant_attribute_12' => isset($variation['VariationAttributeValues'][11]) ? $variation['VariationAttributeValues'][11]['attribute']['backendName'] : '',
                        'variant_attribute_value_12' => isset($variation['VariationAttributeValues'][11]) ? $variation['VariationAttributeValues'][11]['attributeValue']['backendName'] : '',
                        'variant_attribute_13' => isset($variation['VariationAttributeValues'][12]) ? $variation['VariationAttributeValues'][12]['attribute']['backendName'] : '',
                        'variant_attribute_value_13' => isset($variation['VariationAttributeValues'][12]) ? $variation['VariationAttributeValues'][12]['attributeValue']['backendName'] : '',
                        'variant_attribute_14' => isset($variation['VariationAttributeValues'][13]) ? $variation['VariationAttributeValues'][13]['attribute']['backendName'] : '',
                        'variant_attribute_value_14' => isset($variation['VariationAttributeValues'][13]) ? $variation['VariationAttributeValues'][13]['attributeValue']['backendName'] : '',
                        'variant_attribute_15' => isset($variation['VariationAttributeValues'][14]) ? $variation['VariationAttributeValues'][14]['attribute']['backendName'] : '',
                        'variant_attribute_value_15' => isset($variation['VariationAttributeValues'][14]) ? $variation['VariationAttributeValues'][14]['attributeValue']['backendName'] : '',
                        'variant_attribute_16' => isset($variation['VariationAttributeValues'][15]) ? $variation['VariationAttributeValues'][15]['attribute']['backendName'] : '',
                        'variant_attribute_value_16' => isset($variation['VariationAttributeValues'][15]) ? $variation['VariationAttributeValues'][15]['attributeValue']['backendName'] : '',
                        'variant_attribute_17' => isset($variation['VariationAttributeValues'][16]) ? $variation['VariationAttributeValues'][16]['attribute']['backendName'] : '',
                        'variant_attribute_value_17' => isset($variation['VariationAttributeValues'][16]) ? $variation['VariationAttributeValues'][16]['attributeValue']['backendName'] : '',
                        'variant_attribute_18' => isset($variation['VariationAttributeValues'][17]) ? $variation['VariationAttributeValues'][17]['attribute']['backendName'] : '',
                        'variant_attribute_value_18' => isset($variation['VariationAttributeValues'][17]) ? $variation['VariationAttributeValues'][17]['attributeValue']['backendName'] : '',
                        'variant_attribute_19' => isset($variation['VariationAttributeValues'][18]) ? $variation['VariationAttributeValues'][18]['attribute']['backendName'] : '',
                        'variant_attribute_value_19' => isset($variation['VariationAttributeValues'][18]) ? $variation['VariationAttributeValues'][18]['attributeValue']['backendName'] : '',
                        'variant_attribute_20' => isset($variation['VariationAttributeValues'][19]) ? $variation['VariationAttributeValues'][19]['attribute']['backendName'] : '',
                        'variant_attribute_value_20' => isset($variation['VariationAttributeValues'][19]) ? $variation['VariationAttributeValues'][19]['attributeValue']['backendName'] : '',
                        'last_update_at' => $variation['updatedAt'],
                    );
                }
            }
        }

        $templateData = array(
            'exportData' => $completeData,
            'completeData' => $items
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
        $settingRepo = pluginApp(SettingsRepositoryContract::class);
        $libCall = pluginApp(LibraryCallContract::class);


        $properties = $settingRepo->find('HelloWorld', 'property');

        foreach($properties as $key => $property) {

            $productDetails = $this->productDetails();

            if(!empty($productDetails['exportData'])) {

                if(isset($property->settings['Token']) && ($property->settings['Token']['expires_in'] > time())) {

                    $this->saveCronTime();

                    $response = $libCall->call(
                        'HelloWorld::products_to_pandablack',
                        [
                            'token' => $property->settings['Token']['token'],
                            'product_details' => $productDetails
                        ]
                    );
                    return $response;
                } else if(isset($property->settings['Token']) && ($property->settings['Token']['refresh_token_expires_in'] > time())) {

                    $this->saveCronTime();

                    $response = $libCall->call(
                        'HelloWorld::products_to_pandablack',
                        [
                            'token' => $property->settings['Token']['refresh_token'],
                            'product_details' => $productDetails
                        ]
                    );
                    return $response;
                }
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

        foreach($crons as $key => $cron) {
            if(isset($crons['entries']['pbItemCron'])) {
                    $cronData = [
                        'pbItemCron' => [
                            'pastCronTime' => $crons['entries']['pbItemCron']['presentCronTime'],
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
}