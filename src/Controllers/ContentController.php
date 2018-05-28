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

class ContentController extends Controller
{
    public function sayHello(Twig $twig, ItemDataLayerRepositoryContract $itemRepository):string
    {
        $itemColumns = ['*'];

        $itemFilter = [
            'variationBase.isActive?'                     => [],
            'variationVisibility.isVisibleForMarketplace' => [
                'mandatoryOneMarketplace' => [],
                'mandatoryAllMarketplace' => []
            ],
            'variationStock.netPositive'                  => [
                'warehouse' => 'virtual',
            ],
        ];

        $itemParams = [
            'referrerId' => 66.0,
        ];

        $resultItems = $itemRepository->search($itemColumns, $itemFilter, $itemParams);

        $items = array();

        foreach($resultItems as $item)
        {
            $items[] = $item;
        }

        $templateData = array(
            'currentItems' => $items
        );

        return $twig->render('HelloWorld::content.TopItems', $templateData);
    }

}