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

use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Plugin\Http\Request;

class ContentController extends Controller
{
    public function sayHello(Twig $twig, ItemDataLayerRepositoryContract $itemRepository, VariationRepositoryContract $variationRepo, CategoryRepositoryContract $variationCat, LibraryCallContract $libCall, Request $request):string
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
                'customNumber',
                'purchasePrice'
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

            /*'itemProperty' => [
                'itemPropertyId',
                'propertyId',
                'propertyValue',
            ],

            'variationAttributeValue' => [
                'attributeId',
                'attributeValueId'
            ],*/

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


        $completeData = array();
        foreach($resultItems as $item)
        {
            $items = array();
            $items['variation_data'] = $item;
            $items['sales_price'] = $variationRepo->show($item->variationBase->id, ['variationSalesPrices' => true], $lang = "de");

            // category
            $category = $variationCat->get($item->variationStandardCategory->categoryId, $lang = "de");


            $parentCategoryArray = array();
            for($i = 0; $i < 5; $i++)
            {
                if($category->parentCategoryId != NULL) {
                    $parentCategoryArray[] = $variationCat->get($category->parentCategoryId, $lang = "de");
                }
            }

            $parentCatSet = '';
            foreach($parentCategoryArray as $key => $parentCategory)
            {
                $parentCatSet .= $parentCategory->details[0]->name;
                if ($key != count($parentCategoryArray) - 1) {
                    $parentCatSet .= '<<';
                }
            }
            $items['categories'] = $parentCatSet.'<<'.$category->details[0]->name;

            array_push($completeData, $items);
        }


        $templateData = array(
            'completeData' => $completeData,
        );

        /*$packagistResult = array(
            'results' =>   $libCall->call('HelloWorld::guzzle_connector', ['title' => 'Berlin'])
        );*/

        return $twig->render('HelloWorld::content.TopItems', $templateData);
    }

}