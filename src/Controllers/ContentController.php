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
use Plenty\Modules\System\Contracts\SystemInformationRepositoryContract;
use Plenty\Modules\System\Contracts\WebstoreRepositoryContract;
use Plenty\Modules\Market\Settings\Factories\SettingsCorrelationFactory;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;

use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Plugin\Http\Request;

class ContentController extends Controller
{
    private $parentCategoryArray = [];
    public function sayHello(Twig $twig, ItemDataLayerRepositoryContract $itemRepository, VariationRepositoryContract $variationRepo, CategoryRepositoryContract $variationCat, LibraryCallContract $libCall, Request $request, SystemInformationRepositoryContract $sys, WebstoreRepositoryContract $web, SettingsCorrelationFactory $correlation, SettingsRepositoryContract $settingRepo):string
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
            $multiDim = array();
            $items = [];
            $items['variation_data'] = $item;
            $items['sales_price'] = $variationRepo->show($item->variationBase->id, ['variationSalesPrices' => true], $lang = "de");


            $childCategory = $variationCat->get($item->variationStandardCategory->categoryId, $lang = "de");

            $parentCategoryArray = array();
            $parentCategoryData = '';
            if($childCategory->parentCategoryId != null) {
                $parentCategoryData = $variationCat->get($childCategory->parentCategoryId, $lang = "de");
                if($parentCategoryData->parentCategoryId != null) {
                    $parentCategoryArray = $this->parentCategory($parentCategoryData, $variationCat);
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

            if(empty($parentCatSet)) {
                $items['categories'] = $parentCategoryData->details[0]->name .'<<' .$childCategory->details[0]->name;
            } else {
                $items['categories'] = $parentCatSet .' << ' . $parentCategoryData->details[0]->name .'<<' .$childCategory->details[0]->name;
            }

            array_push($multiDim, $items);
            array_push($completeData, $multiDim);
        }

        $systemDetails = $web->findByPlentyId($sys->loadValue('plentyId'));
        $categories = $variationCat->getLinklistTree('item', $lang = "de", $systemDetails->id);

        $plentyCategoryRepo = pluginApp(CategoryRepositoryContract::class);

        //$children = $plentyCategoryRepo->getChildren($plentyCategoryRepo->id, $lang);
        //$info = $request->get('correlations', []);

        $correlations = $correlation->type('category')
                            ->all('HelloWorld');

        /*$settingInfo = [];
        foreach ($correlations as $correlation)
        {
            $settingDetails = $settingRepo->get($correlation->settingsId);
            $settingInfo[] = $settingDetails;
        }*/

        $settingInfo = $settingRepo->get(78);


        $templateData = array(
            'completeData' => $completeData,
            'systemInfo' => $categories,
            'children' => $plentyCategoryRepo,
            'info' => $correlations,
            'settingInfo' => $settingInfo
        );


        /*$packagistResult = array(
            'results' =>   $libCall->call('HelloWorld::guzzle_connector', ['title' => 'Berlin'])
        );*/

        return $twig->render('HelloWorld::content.TopItems', $templateData);
    }

    public function parentCategory($parentCategoryArray, $variationCat)
    {
        $parentCategoryData = $variationCat->get($parentCategoryArray->parentCategoryId, $lang = "de");
        if($parentCategoryArray->parentCategoryId != null) {
            $parentCategoryInfo[] = $parentCategoryData;
            $this->parentCategory($parentCategoryArray, $variationCat);
        } else {
            $parentCategoryInfo[] = $parentCategoryData;
            return $parentCategoryInfo;
        }
    }

}