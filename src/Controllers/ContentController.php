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
use Plenty\Plugin\Http\Request;
class ContentController extends Controller
{
    public function productDetails()
    {
        $itemRepository = pluginApp(VariationSearchRepositoryContract::class);

        $itemRepository->setSearchParams([
            'with' => [
                'item' => null,
                'lang' => 'de',
                'variationSalesPrices' => true,
                'variationCategories' => true,
                'variationImageList' => true,
                'variationClients' => true,
                'variationStock' => [
                    'params' => [
                        'type' => 'virtual'
                    ],
                    'fields' => [
                        'stockNet'
                    ]
                ],
                'variationAttributeValueList' => true,
                'isMain' => false
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

        foreach($resultItems->getResult() as $key => $variation) {

            if(!$variation['isMain'] && isset($categoryId[$variation['variationCategories'][0]['categoryId']])) {

                /*$variationStock = pluginApp(VariationStockRepositoryContract::class);
                $stockData = $variationStock->listStockByWarehouse($variation['id'], ['*']);*/

                $textArray = $variation['item']->texts;
                $variation['texts'] = $textArray->toArray();

                $authHelper = pluginApp(AuthHelper::class);

                $imageRepo = pluginApp(ItemImageRepositoryContract::class);
                $warehouseInfo = pluginApp(VariationWarehouseRepositoryContract::class);

                $itemImageInfo = $authHelper->processUnguarded(
                    function () use ($imageRepo, $variation) {
                        return $imageRepo->findByVariationId($variation['id']);
                    }
                );

                /*$warehouse = $authHelper->processUnguarded(
                    function () use ($warehouseInfo, $variation) {
                        return $warehouseInfo->findByVariationId($variation['id']);
                    }
                );*/

                $categoryMappingInfo = $categoryId[$variation['variationCategories'][0]['categoryId']];
                $items[$key] = [$itemImageInfo[0], $variation, $categoryId[$variation['variationCategories'][0]['categoryId']]];

                $completeData[$key] = array(
                    'parent_product_id' => $variation['mainVariationId'],
                    'product_id' => $variation['id'],
                    'item_id' => $variation['itemId'],
                    'name' => $variation['item']['texts'][0]['name1'],
                    'price' => $variation['variationSalesPrices'][0]['price'],
                    'category' => $categoryMappingInfo[0]['vendorCategory'][0]['name'],
                    'short_description' => $variation['item']['texts'][0]['description'],
                    'image_url' => $itemImageInfo[0]['url'],
                    'color' => '',
                    'size' => '',
                    'content_supplier' => '',
                    'product_type' => '',
                    'quantity' => '',
                    'store_name' => '',
                    'status' => '',
                    'brand' => '',
                    'variant_attribute_1' => '',
                );
            }
        }

        $templateData = array(
            'completeData' => $completeData
        );
        return $templateData;
    }


    public function sendProductDetails(SettingsRepositoryContract $settingRepo, LibraryCallContract $libCall)
    {
        $properties = $settingRepo->find('HelloWorld', 'property');

        foreach($properties as $key => $property) {
            if(isset($property->settings['Token'])) {
                $productDetails = $this->productDetails();
                $response = $libCall->call(
                    'HelloWorld::products_to_pandablack',
                    [
                        'token' => $property->settings['Token']['token'],
                        'product_details' => $productDetails
                    ]
                );
                return $response;
            }
        }
    }
}