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
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Plugin\Http\Request;

class UpdateItemController extends Controller
{
    public function updateItems(Twig $twig, ItemDataLayerRepositoryContract $itemRepository, VariationRepositoryContract $variationRepository, SettingsRepositoryContract $settingsRepositoryContract):string
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
                    'marketId' => 9.0
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
                ]
            ]
        ];


        $variRepo = $variationRepository->show(1002, ['variationSalesPrices' => true, 'variationCategories' => true], $lang = "de");



        $filter = [
            'variationBase.isActive?'                     => [],
            'variationVisibility.isVisibleForMarketplace' => [
                'mandatoryOneMarketplace' => [],
                'mandatoryAllMarketplace' => []
            ],
            'variationStock.netPositive'                  => [
                'warehouse' => 'virtual',
            ],
        ];

        $params = [
            'referrerId' => 9
        ];

        $resultItems = $itemRepository->search($resultFields, $filter, $params);

        $categoryMapping = $settingsRepositoryContract->search(['marketplaceId' => 'HelloWorld', 'type' => 'category'], 1, 100);


        $level1 = [];

        foreach($resultItems as $resultItem)
        {
            $level2 = [];

            $variationInfo = $variationRepository->show($resultItem->variationBase->id, ['variationSalesPrices' => true, 'variationCategories' => true], $lang = "de");

            foreach($categoryMapping->getResult() as $categoryMappingInfo)
            {
                foreach($categoryMappingInfo['settings'] as $categories)
                {
                    foreach($categories['category'] as $plentyCategory)
                    {
                        /*foreach($variationInfo['variationCategories'] as $variationCategory)
                        {
                            if($plentyCategory['id'] === $variationCategory['categoryId']) {
                                array_push($level2, $categories->vendorCategory);
                            }
                        }*/
                        array_push($level2, $plentyCategory);
                    }
                }
            }

            array_push($level2, $resultItem);

            array_push($level1, $level2);
        }

        $templateData = array(
            'completeData' => $variationInfo,
            'variRepo' => $categoryMapping,
            'test' => $level1
        );

        return $twig->render('HelloWorld::content.UpdateItems', $templateData);
    }

}