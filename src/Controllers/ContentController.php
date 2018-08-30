<?php
namespace HelloWorld\Controllers;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Plugin\DataBase\Contracts;
use Plenty\Modules\Item\Variation\Contracts\VariationSearchRepositoryContract;
use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Modules\Item\Property\Contracts\PropertyRepositoryContract;
use Plenty\Modules\Item\Search\Mutators\KeyMutator;
use Plenty\Plugin\Application;
use Plenty\Modules\Item\Variation\Contracts\VariationRepositoryContract;
use Plenty\Modules\Category\Contracts\CategoryRepositoryContract;
use Plenty\Modules\System\Contracts\SystemInformationRepositoryContract;
use Plenty\Modules\System\Contracts\WebstoreRepositoryContract;
use Plenty\Modules\Market\Settings\Factories\SettingsCorrelationFactory;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\Authorization\Services\AuthHelper;
use Plenty\Modules\Item\Attribute\Contracts\AttributeValueRepositoryContract;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Modules\Item\ItemImage\Contracts\ItemImageRepositoryContract;
use Plenty\Plugin\Http\Request;
class ContentController extends Controller
{
    private $parentCategoryArray = [];
    public function sayHello(Twig $twig, VariationSearchRepositoryContract $itemRepository, ItemImageRepositoryContract $imageRepo, AuthHelper $authHelper, VariationRepositoryContract $variationRepositoryContract, SettingsRepositoryContract $settingsRepositoryContract):string
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
                'purchasePrice',
                'availableUntil',
                'availability',
                'content',
            ],
            'variationRetailPrice' => [
                'price',
                'currency',
                'retailPriceNet',
                'unitPrice',
                'vatId',
                'unitPriceNet',
                'vatValue'
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
            'referrerId' => 9.0,
        ];

        //$itemRepository->setSearchParams($itemParams);


        $itemRepository->setSearchParams([
            'with' => [
                'item' => null,
                'lang' => 'de'
            ]
        ]);

        $itemRepository->setFilters([
            'referrerId' => 9.0
        ]);
        $resultItems = $itemRepository->search();

        $completeData = $resultItems->getResult();

        $categoryMapping = $settingsRepositoryContract->search(['marketplaceId' => 'HelloWorld', 'type' => 'category'], 1, 100)->toArray();

        $level1 = [];

        foreach($resultItems->getResult() as $resultItem)
        {
            $level2 = [];

            //$variationInfo = $variationRepositoryContract->show($resultItem->id, ['variationSalesPrices' => true, 'variationCategories' => true], $lang = "de");

            /*foreach($categoryMapping->getResult() as $categoryMappingInfo)
            {
                foreach($categoryMappingInfo['settings'] as $categories)
                {
                    /*foreach($categories['category'] as $plentyCategory)
                    {
                        /*foreach($variationInfo['variationCategories'] as $variationCategory)
                        {
                            if($plentyCategory['id'] === $variationCategory['categoryId']) {
                                array_push($level2, $categories->vendorCategory);
                            }
                        }
                        array_push($level2, $plentyCategory);
                    }
                    array_push($level2, $categories);
                }
            }*/

            array_push($level2, $resultItem);

            array_push($level1, $level2);
        }

        //$variationInfo = $variationRepositoryContract->show(1000, ['variationSalesPrices' => true, 'variationCategories' => true], $lang = "de");
        //$imageInfo = $authHelper->processUnguarded($imageRepo->findByItemId(103));

        //$imageInfo = $imageRepo->findByVariationId(1000);

        $templateData = array(
            'completeData' => $categoryMapping,
            'imageInfo' => $level1
        );
        return $twig->render('HelloWorld::content.TopItems', $templateData);
    }
}