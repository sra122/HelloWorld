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
use Plenty\Plugin\Http\Request;
class ContentController extends Controller
{
    public function sayHello()
    {
        $itemRepository = pluginApp(VariationSearchRepositoryContract::class);
        $itemRepository->setSearchParams([
            'with' => [
                'item' => null,
                'lang' => 'de',
                'variationSalesPrices' => true,
                'variationCategories' => true,
                'variationImageList' => true,
                'variationStock' => true,
                'isMain' => false
                ]
        ]);

        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) === 'PandaBlack' && count($pandaBlackReferrerID) === 0) {
                array_push($pandaBlackReferrerID, $key);
            }
        }

        $itemRepository->setFilters([
            'referrerId' => 13.0
        ]);

        $resultItems = $itemRepository->search();

        $items = [];

        $settingsRepositoryContract = pluginApp(SettingsRepositoryContract::class);
        $categoryMapping = $settingsRepositoryContract->search(['marketplaceId' => 'HelloWorld', 'type' => 'category'], 1, 100)->toArray();

        $categoryId = [];

        foreach($categoryMapping['entries'] as $category) {
            $categoryId[$category->settings[0]['category'][0]['id']] = $category->settings[0]['vendorCategory'];
        }

        foreach($resultItems->getResult() as $key => $variation) {

            if(!$variation['isMain'] && isset($categoryId[$variation['variationCategories'][0]['categoryId']])) {

                $authHelper = pluginApp(AuthHelper::class);

                $imageRepo = pluginApp(ItemImageRepositoryContract::class);

                $itemInfo = $authHelper->processUnguarded(
                    function () use ($imageRepo, $variation) {
                        return $imageRepo->findByVariationId($variation['id']);
                    }
                );

                $items[$key] = [$itemInfo[0], $variation, $categoryId[$variation['variationCategories'][0]['categoryId']]];
            }
        }

        $templateData = array(
            'completeData' => $items,
            'variation' => $categoryId,
            'referrer' => $pandaBlackReferrerID
        );
        return $templateData;
    }


    public function sendProductDetails(SettingsRepositoryContract $settingRepo, LibraryCallContract $libCall)
    {
        $properties = $settingRepo->find('HelloWorld', 'property');

        foreach($properties as $key => $property) {
            if(isset($property->settings['Token'])) {
                $productDetails = $this->sayHello();
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