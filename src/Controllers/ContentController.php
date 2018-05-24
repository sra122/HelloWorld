<?php

namespace HelloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\DataBase\Contracts;
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
use Plenty\Modules\Item\Attribute\Contracts\AttributeMapRepositoryContract;
use Plenty\Modules\Item\Property\Contracts\PropertyRepositoryContract;

class ContentController extends Controller
{
    public function sayHello(Twig $twig, PropertyRepositoryContract $itemRepository):string
    {
        $itemColumns = [
            'itemDescription' => [
                'name1',
                'description'
            ],
            'variationBase' => [
                'id'
            ],
            'variationRetailPrice' => [
                'price'
            ],
            'variationImageList' => [
                'path',
                'cleanImageName'
            ]
        ];

        $itemFilter = [
            'itemBase.isStoreSpecial' => [
                'shopAction' => [3]
            ]
        ];

        $itemParams = [
            'language' => 'en'
        ];

        $resultItems = $itemRepository->all($itemColumns, 50, 1);

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