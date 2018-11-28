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

    public function getStatus()
    {
        return $this->getItems();
    }

    public function status()
    {
        $items = $this->getItems();

        $requiredAttributes = ['brand', 'color'];

        $itemsStatus = [];

        foreach($items->getResult() as $item)
        {
            $currentAttributes = [];
            foreach($item['VariationAttributeValues'] as $itemVariation)
            {
                array_push($currentAttributes, $itemVariation['attribute']['backendName']);
            }
            $itemsStatus[$item['itemId']] = array_diff($requiredAttributes, $currentAttributes);
        }

        return $itemsStatus;
    }

}