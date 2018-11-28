<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Modules\Item\Variation\Contracts\VariationSearchRepositoryContract;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;
class ItemsStatusController extends Controller
{
    private function getItems()
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


        $resultItems = $itemRepository->search();

        return $resultItems;
    }

    public function itemsStatus()
    {
        return $this->getItems();
    }

}