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
        $itemColumns = [
            'itemBase' => [
                'id',
                'producer',
            ],

            'itemShippingProfilesList' => [
                'id',
                'name',
            ],

            'itemDescription' => [
                    'name1',
                    'description',
                    'shortDescription',
                    'technicalData',
                    'keywords',
                    'lang',
            ],

            'variationMarketStatus' => [
                    'id',
                    'sku',
                    'marketStatus',
                    'additionalInformation',
            ],

            'variationBase' => [
                'id',
                'limitOrderByStockSelect',
                'weightG',
                'lengthMm',
                'widthMm',
                'heightMm',
                'attributeValueSetId',
            ],

            'variationRetailPrice' => [
                'price',
                'currency',
            ],

            'variationStock' => [
                'params' => [
                    'type' => 'virtual'
                ],
                'fields' => [
                    'stockNet'
                ]
            ],

            'variationStandardCategory' => [
                'params' => [
                    'plentyId' => pluginApp(Application::class)->getPlentyId(),
                ],
                'fields' => [
                    'categoryId'
                ],
            ],

            'itemCharacterList' => [
                'itemCharacterId',
                'characterId',
                'characterValue',
                'characterValueType',
                'isOrderCharacter',
                'characterOrderMarkup'
            ],

            'variationAttributeValueList' => [
                'attributeId',
                'attributeValueId'
            ],

            'variationImageList' => [
                'params' => [
                    'all_images'                                       => [
                        'type'                 => 'all', // all images
                        'fileType'             => ['gif', 'jpeg', 'jpg', 'png'],
                        'imageType'            => ['internal'],
                    ],
                    'only_current_variation_images_and_generic_images' => [
                        'type'                 => 'item_variation', // current variation + item images
                        'fileType'             => ['gif', 'jpeg', 'jpg', 'png'],
                        'imageType'            => ['internal'],
                    ],
                    'only_current_variation_images'                    => [
                        'type'                 => 'variation', // current variation images
                        'fileType'             => ['gif', 'jpeg', 'jpg', 'png'],
                        'imageType'            => ['internal'],
                    ],
                    'only_generic_images'                              => [
                        'type'                 => 'item', // only item images
                        'fileType'             => ['gif', 'jpeg', 'jpg', 'png'],
                        'imageType'            => ['internal'],
                    ],
                ],
                'fields' => [
                    'imageId',
                    'type',
                    'fileType',
                    'path',
                    'position',
                    'attributeValueId',
                ],
            ]
        ];

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