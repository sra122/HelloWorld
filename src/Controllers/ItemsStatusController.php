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

        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name', 'id']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) === 'PandaBlack' && count($pandaBlackReferrerID) === 0) {
                array_push($pandaBlackReferrerID, $orderReferrerList);
            }
        }

        foreach($pandaBlackReferrerID as $pandaBlackId) {
            $itemRepository->setFilters([
                'referrerId' => (int)$pandaBlackId['id']
            ]);
        }


        $resultItems = $itemRepository->search();

        return $resultItems;
    }

    public function itemsStatus()
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
            $itemsStatus[$item['id']] = array_diff($requiredAttributes, $currentAttributes);
        }

        return $itemsStatus;
    }


    public function attributeMapping()
    {
        $vendorCategoryData =  [
            (int) 0 => [
                'id' => (int) 22,
                'name' => '睡衣/家居服',
                'children_ids' => [],
                'children' => [],
                'attributeValueSets' => [
                    (int) 0 => [
                        'attribute' => (int) 73,
                        'displayName' => '品牌'
                    ],
                    (int) 1 => [
                        'attribute' => (int) 74,
                        'displayName' => '适用人群'
                    ],
                    (int) 2 => [
                        'attribute' => (int) 75,
                        'displayName' => '款式'
                    ],
                    (int) 3 => [
                        'attribute' => (int) 76,
                        'displayName' => '材质'
                    ],
                    (int) 4 => [
                        'attribute' => (int) 77,
                        'displayName' => '适用季节'
                    ],
                    (int) 5 => [
                        'attribute' => (int) 78,
                        'displayName' => '袖长'
                    ],
                    (int) 6 => [
                        'attribute' => (int) 79,
                        'displayName' => '厚度'
                    ],
                    (int) 7 => [
                        'attribute' => (int) 80,
                        'displayName' => '尺码'
                    ],
                    (int) 8 => [
                        'attribute' => (int) 81,
                        'displayName' => '价格'
                    ],
                    (int) 9 => [
                        'attribute' => (int) 82,
                        'displayName' => '款型'
                    ],
                    (int) 10 => [
                        'attribute' => (int) 83,
                        'displayName' => '领型'
                    ],
                    (int) 11 => [
                        'attribute' => (int) 84,
                        'displayName' => '图案'
                    ],
                    (int) 12 => [
                        'attribute' => (int) 85,
                        'displayName' => '风格'
                    ],
                    (int) 13 => [
                        'attribute' => (int) 86,
                        'displayName' => '是否可外穿'
                    ],
                    (int) 14 => [
                        'attribute' => (int) 87,
                        'displayName' => '组合规格'
                    ],
                    (int) 15 => [
                        'attribute' => (int) 88,
                        'displayName' => '颜色'
                    ],
                    (int) 16 => [
                        'attribute' => (int) 89,
                        'displayName' => '裤长'
                    ],
                    (int) 17 => [
                        'attribute' => (int) 90,
                        'displayName' => '衣门襟'
                    ],
                    (int) 18 => [
                        'attribute' => (int) 91,
                        'displayName' => '裙长'
                    ],
                    (int) 19 => [
                        'attribute' => (int) 92,
                        'displayName' => '流行元素'
                    ],
                    (int) 20 => [
                        'attribute' => (int) 93,
                        'displayName' => '风格'
                    ],
                    (int) 21 => [
                        'attribute' => (int) 94,
                        'displayName' => '是否可外穿'
                    ],
                    (int) 22 => [
                        'attribute' => (int) 95,
                        'displayName' => '薄厚'
                    ],
                    (int) 23 => [
                        'attribute' => (int) 96,
                        'displayName' => '适用季节'
                    ],
                    (int) 24 => [
                        'attribute' => (int) 97,
                        'displayName' => '颜色'
                    ],
                    (int) 25 => [
                        'attribute' => (int) 98,
                        'displayName' => '花型'
                    ],
                    (int) 26 => [
                        'attribute' => (int) 99,
                        'displayName' => '尺码'
                    ],
                    (int) 27 => [
                        'attribute' => (int) 100,
                        'displayName' => '材质'
                    ],
                    (int) 28 => [
                        'attribute' => (int) 101,
                        'displayName' => '套装'
                    ],
                    (int) 29 => [
                        'attribute' => (int) 102,
                        'displayName' => '袖长'
                    ]
                ]
            ]
        ];

        return $vendorCategoryData;
    }

}