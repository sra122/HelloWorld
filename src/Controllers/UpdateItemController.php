<?php

namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\DataBase\Contracts;
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
use Plenty\Modules\Item\Attribute\Contracts\AttributeMapRepositoryContract;
use Plenty\Modules\Item\Property\Contracts\PropertyRepositoryContract;
use Plenty\Modules\Item\Search\Mutators\KeyMutator;
use Plenty\Plugin\Application;
use Plenty\Modules\Item\Variation\Contracts\VariationRepositoryContract;
use Plenty\Modules\Category\Contracts\CategoryRepositoryContract;
use Plenty\Modules\Item\VariationSku\Contracts\VariationSkuRepositoryContract;

use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Plugin\Http\Request;

class UpdateItemController extends Controller
{
    public function updateItems(Twig $twig, VariationSkuRepositoryContract $skuRepo, ItemDataLayerRepositoryContract $itemRepository, VariationRepositoryContract $variationRepository):string
    {
        $resultFields = [
            'itemBase' => [
                'id',
                'producer',
            ],

            'variationRetailPrice' => [
                'price',
            ],

            'variationMarketStatus' => [
                'params' => [
                    'marketId' => 66.0
                ],
                'fields' => [
                    'id',
                    'sku',
                    'marketStatus',
                    'additionalInformation',
                ]
            ],

            'variationBase' => [
                'id',
                'limitOrderByStockSelect',
                'active'
            ],

            'variationStock' => [
                'params' => [
                    'type' => 'virtual'
                ],
                'fields' => [
                    'stockNet'
                ]
            ],

            'variationLinkMarketplace' => [
                'marketplaceId'
            ]
        ];


        $variRepo = $variationRepository->show(1002, ['variationSalesPrices' => true], $lang = "de");

        $filter = [
        ];

        $params = [
            'referrerId' => 66.0
        ];

        $resultItems = $itemRepository->search($resultFields, $filter, $params);

        $templateData = array(
            'completeData' => $resultItems,
            'variRepo' => $variRepo
        );

        return $twig->render('HelloWorld::content.UpdateItems', $templateData);
    }

}