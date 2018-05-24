<?php

namespace HelloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\DataBase\Contracts;
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
use Plenty\Modules\Item\ItemImage\Contracts\ItemImageRepositoryContract;

class ContentController extends Controller
{
    public function sayHello(Twig $twig, ItemDataLayerRepositoryContract $itemRepository, ItemImageRepositoryContract $itemImageRepository):string
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

        $resultItems = $itemRepository->search($itemColumns, $itemFilter, $itemParams);

        $items = array();

        foreach($resultItems as $item)
        {
            $items[] = $item;
        }

        $images = array();

        foreach($items as $itemImage)
        {
            $images[] = $itemImageRepository->findByItemId($itemImage['variationBase']['id']);
        }

        $templateData = array(
            'resultCount' => $resultItems->count(),
            'currentItems' => $items,
            'imageDetails' => $images
        );
        print_r($images);

        return $twig->render('HelloWorld::content.TopItems', $templateData);
    }
}