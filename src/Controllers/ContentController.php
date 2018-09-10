<?php
namespace HelloWorld\Controllers;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\DataBase\Contracts;
use Plenty\Modules\Item\Variation\Contracts\VariationSearchRepositoryContract;
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
    public function sayHello(Twig $twig, VariationSearchRepositoryContract $itemRepository, ItemImageRepositoryContract $imageRepo, AuthHelper $authHelper, VariationRepositoryContract $variationRepositoryContract, SettingsRepositoryContract $settingsRepositoryContract):string
    {

        $itemRepository->setSearchParams([
            'with' => [
                'item' => null,
                'lang' => 'de',
                'variationSalesPrices' => true,
                'variationCategories' => true,
                'variationImageList' => true
                ]
        ]);

        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) == 'PandaBlack') {
                array_push($pandaBlackReferrerID, $orderReferrerList);
            }
        }


        $itemRepository->setFilters([
            'referrerId' => 13.0
        ]);


        $resultItems = $itemRepository->search();

        $items = $resultItems->getResult();

        $imageData = [];

        foreach($resultItems->getResult() as $variation) {

            $authHelper = pluginApp(AuthHelper::class);

            $imageRepo = pluginApp(ItemImageRepositoryContract::class);

            $itemInfo = $authHelper->processUnguarded(
                function () use ($imageRepo, $variation) {
                    return $imageRepo->findByVariationId($variation->id);
                }
            );

            $variation->imageDetails = $itemInfo;
            array_push($imageData, $itemInfo);
        }

        $categoryMapping = $settingsRepositoryContract->search(['marketplaceId' => 'HelloWorld', 'type' => 'category'], 1, 100)->toArray();


        $templateData = array(
            'completeData' => $items,
            'categoryMapping' => $categoryMapping,
            'imageInfo' => $imageData
        );
        return $twig->render('HelloWorld::content.TopItems', $templateData);
    }
}