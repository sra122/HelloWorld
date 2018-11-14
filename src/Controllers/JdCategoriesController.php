<?php

namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;

class JdCategoriesController extends Controller
{
    public function listOfCategories()
    {
        return [
            (int) 0 => [
                'id' => (int) 1,
                'name' => '服饰内衣',
                'children_ids' => [
                    (int) 0 => (int) 6
                ],
                'children' => [
                    (int) 0 => [
                        'id' => (int) 6,
                        'name' => '内衣',
                        'children_ids' => [
                            (int) 0 => (int) 19,
                            (int) 1 => (int) 20,
                            (int) 2 => (int) 21,
                            (int) 3 => (int) 22,
                            (int) 4 => (int) 23,
                            (int) 5 => (int) 24,
                            (int) 6 => (int) 25,
                            (int) 7 => (int) 26,
                            (int) 8 => (int) 27,
                            (int) 9 => (int) 28,
                            (int) 10 => (int) 29,
                            (int) 11 => (int) 30,
                            (int) 12 => (int) 31,
                            (int) 13 => (int) 32,
                            (int) 14 => (int) 33,
                            (int) 15 => (int) 34,
                            (int) 16 => (int) 35,
                            (int) 17 => (int) 36,
                            (int) 18 => (int) 37,
                            (int) 19 => (int) 38,
                            (int) 20 => (int) 39,
                            (int) 21 => (int) 40,
                            (int) 22 => (int) 41
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 19,
                                'name' => '文胸',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 2,
                                        'displayName' => '罩杯型'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 3,
                                        'displayName' => '面料'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 4,
                                        'displayName' => '功能'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 5,
                                        'displayName' => '胸围尺码'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 6,
                                        'displayName' => '价格'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 7,
                                        'displayName' => '模杯厚度'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 8,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 9,
                                        'displayName' => '罩杯里料'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 10,
                                        'displayName' => '有无钢圈'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 11,
                                        'displayName' => '肩带'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 12,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 13,
                                        'displayName' => '款式细节'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 14,
                                        'displayName' => '插片'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 15,
                                        'displayName' => '搭扣'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 16,
                                        'displayName' => '款式'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 17,
                                        'displayName' => '风格'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 18,
                                        'displayName' => '图案'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 19,
                                        'displayName' => '适合胸型'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 20,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 21,
                                        'displayName' => '插片'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 22,
                                        'displayName' => '胸围尺码'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 23,
                                        'displayName' => '肩带类型'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 24,
                                        'displayName' => '肩带尺寸'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 25,
                                        'displayName' => '模杯厚度'
                                    ],
                                    (int) 25 => [
                                        'attribute' => (int) 26,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 26 => [
                                        'attribute' => (int) 27,
                                        'displayName' => '罩杯型'
                                    ],
                                    (int) 27 => [
                                        'attribute' => (int) 28,
                                        'displayName' => '文胸款式'
                                    ],
                                    (int) 28 => [
                                        'attribute' => (int) 29,
                                        'displayName' => '里料材质'
                                    ],
                                    (int) 29 => [
                                        'attribute' => (int) 30,
                                        'displayName' => '搭扣'
                                    ],
                                    (int) 30 => [
                                        'attribute' => (int) 31,
                                        'displayName' => '面料材质'
                                    ],
                                    (int) 31 => [
                                        'attribute' => (int) 32,
                                        'displayName' => '有无钢圈'
                                    ],
                                    (int) 32 => [
                                        'attribute' => (int) 33,
                                        'displayName' => '适合胸型'
                                    ],
                                    (int) 33 => [
                                        'attribute' => (int) 34,
                                        'displayName' => '产品功能'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 20,
                                'name' => '女式内裤',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 35,
                                        'displayName' => '组合形式'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 36,
                                        'displayName' => '款式'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 37,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 38,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 39,
                                        'displayName' => '功能'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 40,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 41,
                                        'displayName' => '面料'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 42,
                                        'displayName' => '花型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 43,
                                        'displayName' => '腰型'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 44,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 45,
                                        'displayName' => '款式细节'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 46,
                                        'displayName' => '风格'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 47,
                                        'displayName' => '上市时间'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 48,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 49,
                                        'displayName' => '材质'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 50,
                                        'displayName' => '组合规格'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 51,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 52,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 53,
                                        'displayName' => '花型'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 54,
                                        'displayName' => '款型'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 55,
                                        'displayName' => '功能'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 21,
                                'name' => '男式内裤',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 56,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 57,
                                        'displayName' => '款式'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 58,
                                        'displayName' => '面料'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 59,
                                        'displayName' => '价格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 60,
                                        'displayName' => '组合形式'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 61,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 62,
                                        'displayName' => '功能'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 63,
                                        'displayName' => '腰型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 64,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 65,
                                        'displayName' => '花型'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 66,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 67,
                                        'displayName' => '款型'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 68,
                                        'displayName' => '功能'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 69,
                                        'displayName' => '材质'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 70,
                                        'displayName' => '组合规格'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 71,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 72,
                                        'displayName' => '尺码'
                                    ]
                                ]
                            ],
                            (int) 3 => [
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
                            ],
                            (int) 4 => [
                                'id' => (int) 23,
                                'name' => '塑身美体',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 103,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 104,
                                        'displayName' => '分类'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 105,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 106,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 107,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 108,
                                        'displayName' => '压力级别'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 109,
                                        'displayName' => '裤长'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 110,
                                        'displayName' => '价格'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 111,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 112,
                                        'displayName' => '腰型'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 113,
                                        'displayName' => '衣长'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 114,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 115,
                                        'displayName' => '上市时间'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 116,
                                        'displayName' => '款式'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 117,
                                        'displayName' => '图案'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 118,
                                        'displayName' => '款式细节'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 119,
                                        'displayName' => '风格'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 120,
                                        'displayName' => '面料'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 121,
                                        'displayName' => '材质'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 122,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 123,
                                        'displayName' => '衣长'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 124,
                                        'displayName' => '压力'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 125,
                                        'displayName' => '腰型'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 126,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 127,
                                        'displayName' => '裤长'
                                    ],
                                    (int) 25 => [
                                        'attribute' => (int) 128,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 26 => [
                                        'attribute' => (int) 129,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 27 => [
                                        'attribute' => (int) 130,
                                        'displayName' => '材质'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 24,
                                'name' => '泳衣',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 131,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 132,
                                        'displayName' => '风格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 133,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 134,
                                        'displayName' => '材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 135,
                                        'displayName' => '分类'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 136,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 137,
                                        'displayName' => '胸垫'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 138,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 139,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 140,
                                        'displayName' => '材质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 141,
                                        'displayName' => '款式'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 142,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 143,
                                        'displayName' => '是否带钢托带胸垫'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 144,
                                        'displayName' => '分类'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 145,
                                        'displayName' => '适用人群'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 25,
                                'name' => '吊带/背心',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 146,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 147,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 148,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 149,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 150,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 151,
                                        'displayName' => '面料'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 152,
                                        'displayName' => '版型'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 153,
                                        'displayName' => '款式'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 154,
                                        'displayName' => '花型'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 155,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 156,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 157,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 158,
                                        'displayName' => '风格'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 159,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 160,
                                        'displayName' => '适用场景'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 161,
                                        'displayName' => '领型'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 162,
                                        'displayName' => '上市时间'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 163,
                                        'displayName' => '弹性'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 164,
                                        'displayName' => '版型'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 165,
                                        'displayName' => '面料'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 166,
                                        'displayName' => '风格'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 167,
                                        'displayName' => '适用场景'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 168,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 169,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 170,
                                        'displayName' => '款式'
                                    ],
                                    (int) 25 => [
                                        'attribute' => (int) 171,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 26 => [
                                        'attribute' => (int) 172,
                                        'displayName' => '颜色'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 26,
                                'name' => '抹胸',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 173,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 174,
                                        'displayName' => '模杯厚度'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 175,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 176,
                                        'displayName' => '罩杯型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 177,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 178,
                                        'displayName' => '款式细节'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 179,
                                        'displayName' => '面料'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 180,
                                        'displayName' => '分类'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 181,
                                        'displayName' => '罩杯类型'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 182,
                                        'displayName' => '模杯厚度'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 183,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 184,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 185,
                                        'displayName' => '面料材质'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 27,
                                'name' => '连裤袜/丝袜',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 186,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 187,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 188,
                                        'displayName' => '花型'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 189,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 190,
                                        'displayName' => '筒高'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 191,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 192,
                                        'displayName' => '风格'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 193,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 194,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 195,
                                        'displayName' => '裆位款式'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 196,
                                        'displayName' => '袜子功能用途'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 197,
                                        'displayName' => '压力级别'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 198,
                                        'displayName' => '组合形式'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 199,
                                        'displayName' => '款式细节'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 200,
                                        'displayName' => '类型'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 201,
                                        'displayName' => '上市时间'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 202,
                                        'displayName' => '筒高'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 203,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 204,
                                        'displayName' => '组合规格'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 205,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 206,
                                        'displayName' => '花型'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 207,
                                        'displayName' => '功能'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 208,
                                        'displayName' => '材质'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 209,
                                        'displayName' => '风格'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 210,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 25 => [
                                        'attribute' => (int) 211,
                                        'displayName' => '裤袜是否加裆'
                                    ],
                                    (int) 26 => [
                                        'attribute' => (int) 212,
                                        'displayName' => '压力级别'
                                    ]
                                ]
                            ],
                            (int) 9 => [
                                'id' => (int) 28,
                                'name' => '美腿袜',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 213,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 214,
                                        'displayName' => '筒高'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 215,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 216,
                                        'displayName' => '花型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 217,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 218,
                                        'displayName' => '压力级别'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 219,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 220,
                                        'displayName' => '面料'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 221,
                                        'displayName' => '袜子功能用途'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 222,
                                        'displayName' => '裆位款式'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 223,
                                        'displayName' => '上市时间'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 224,
                                        'displayName' => '弹力'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 225,
                                        'displayName' => '花型'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 226,
                                        'displayName' => '压力级别'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 227,
                                        'displayName' => '功能'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 228,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 229,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 230,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 231,
                                        'displayName' => '筒高'
                                    ]
                                ]
                            ],
                            (int) 10 => [
                                'id' => (int) 29,
                                'name' => '商务男袜',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 232,
                                        'displayName' => '花型'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 233,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 234,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 235,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 236,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 237,
                                        'displayName' => '组合形式'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 238,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 239,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 240,
                                        'displayName' => '分类'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 241,
                                        'displayName' => '袜子功能用途'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 242,
                                        'displayName' => '材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 243,
                                        'displayName' => '功能'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 244,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 245,
                                        'displayName' => '筒高'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 246,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 247,
                                        'displayName' => '花型'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 248,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 249,
                                        'displayName' => '风格'
                                    ]
                                ]
                            ],
                            (int) 11 => [
                                'id' => (int) 30,
                                'name' => '保暖内衣',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 250,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 251,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 252,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 253,
                                        'displayName' => '材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 254,
                                        'displayName' => '价格'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 255,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 256,
                                        'displayName' => '图案'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 257,
                                        'displayName' => '领型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 258,
                                        'displayName' => '款式'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 259,
                                        'displayName' => '功能'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 260,
                                        'displayName' => '规格'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 261,
                                        'displayName' => '是否可外穿'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 262,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 263,
                                        'displayName' => '是否加绒'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 264,
                                        'displayName' => '是否贴片'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 265,
                                        'displayName' => '上市时间'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 266,
                                        'displayName' => '风格'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 267,
                                        'displayName' => '裤长'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 268,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 269,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 270,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 271,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 272,
                                        'displayName' => '功能'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 273,
                                        'displayName' => '材质'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 274,
                                        'displayName' => '款式'
                                    ],
                                    (int) 25 => [
                                        'attribute' => (int) 275,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 26 => [
                                        'attribute' => (int) 276,
                                        'displayName' => '适用人群'
                                    ]
                                ]
                            ],
                            (int) 12 => [
                                'id' => (int) 31,
                                'name' => '情侣睡衣',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 277,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 278,
                                        'displayName' => '花型'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 279,
                                        'displayName' => '领型'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 280,
                                        'displayName' => '款型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 281,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 282,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 283,
                                        'displayName' => '价格'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 284,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 285,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 286,
                                        'displayName' => '款式'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 287,
                                        'displayName' => '材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 288,
                                        'displayName' => '风格'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 289,
                                        'displayName' => '是否可外穿'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 290,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 291,
                                        'displayName' => '裙长'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 292,
                                        'displayName' => '裤长'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 293,
                                        'displayName' => '适用场景'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 294,
                                        'displayName' => '衣门襟'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 295,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 296,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 297,
                                        'displayName' => '款式'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 298,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 299,
                                        'displayName' => '风格'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 300,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 301,
                                        'displayName' => '材质'
                                    ]
                                ]
                            ],
                            (int) 13 => [
                                'id' => (int) 32,
                                'name' => '文胸套装',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 302,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 303,
                                        'displayName' => '面料'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 304,
                                        'displayName' => '功能'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 305,
                                        'displayName' => '罩杯型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 306,
                                        'displayName' => '模杯厚度'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 307,
                                        'displayName' => '价格'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 308,
                                        'displayName' => '胸围尺码'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 309,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 310,
                                        'displayName' => '罩杯里料'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 311,
                                        'displayName' => '款式'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 312,
                                        'displayName' => '风格'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 313,
                                        'displayName' => '内裤腰型'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 314,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 315,
                                        'displayName' => '插片'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 316,
                                        'displayName' => '搭扣'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 317,
                                        'displayName' => '肩带'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 318,
                                        'displayName' => '有无钢圈'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 319,
                                        'displayName' => '款式细节'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 320,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 321,
                                        'displayName' => '适合胸型'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 322,
                                        'displayName' => '图案'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 323,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 324,
                                        'displayName' => '内裤腰型'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 325,
                                        'displayName' => '罩杯里料'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 326,
                                        'displayName' => '功能'
                                    ],
                                    (int) 25 => [
                                        'attribute' => (int) 327,
                                        'displayName' => '有无钢圈'
                                    ],
                                    (int) 26 => [
                                        'attribute' => (int) 328,
                                        'displayName' => '适合胸型'
                                    ],
                                    (int) 27 => [
                                        'attribute' => (int) 329,
                                        'displayName' => '内裤尺码'
                                    ],
                                    (int) 28 => [
                                        'attribute' => (int) 330,
                                        'displayName' => '肩带尺寸'
                                    ],
                                    (int) 29 => [
                                        'attribute' => (int) 331,
                                        'displayName' => '模杯厚度'
                                    ],
                                    (int) 30 => [
                                        'attribute' => (int) 332,
                                        'displayName' => '罩杯类型'
                                    ],
                                    (int) 31 => [
                                        'attribute' => (int) 333,
                                        'displayName' => '肩带类型'
                                    ]
                                ]
                            ],
                            (int) 14 => [
                                'id' => (int) 33,
                                'name' => '少女文胸',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 334,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 335,
                                        'displayName' => '图案'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 336,
                                        'displayName' => '面料'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 337,
                                        'displayName' => '功能'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 338,
                                        'displayName' => '罩杯型'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 339,
                                        'displayName' => '胸围尺码'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 340,
                                        'displayName' => '价格'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 341,
                                        'displayName' => '模杯厚度'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 342,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 343,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 344,
                                        'displayName' => '罩杯里料'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 345,
                                        'displayName' => '肩带'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 346,
                                        'displayName' => '有无钢圈'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 347,
                                        'displayName' => '款式'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 348,
                                        'displayName' => '搭扣'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 349,
                                        'displayName' => '功能'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 350,
                                        'displayName' => '罩杯类型'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 351,
                                        'displayName' => '材质'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 352,
                                        'displayName' => '花型'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 353,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 354,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 355,
                                        'displayName' => '模杯厚度'
                                    ]
                                ]
                            ],
                            (int) 15 => [
                                'id' => (int) 34,
                                'name' => '休闲棉袜 ',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 356,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 357,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 358,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 359,
                                        'displayName' => '组合形式'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 360,
                                        'displayName' => '价格'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 361,
                                        'displayName' => '花型'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 362,
                                        'displayName' => '筒高'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 363,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 364,
                                        'displayName' => '材质'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 365,
                                        'displayName' => '袜子功能用途'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 366,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 367,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 368,
                                        'displayName' => '上市时间'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 369,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 370,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 371,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 372,
                                        'displayName' => '材质'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 373,
                                        'displayName' => '类型'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 374,
                                        'displayName' => '筒高'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 375,
                                        'displayName' => '厚度'
                                    ]
                                ]
                            ],
                            (int) 16 => [
                                'id' => (int) 35,
                                'name' => '大码内衣',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 376,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 377,
                                        'displayName' => '领型'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 378,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 379,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 380,
                                        'displayName' => '花色'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 381,
                                        'displayName' => '材质'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 382,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 383,
                                        'displayName' => '价格'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 384,
                                        'displayName' => '功能'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 385,
                                        'displayName' => '款式'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 386,
                                        'displayName' => '分类'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 387,
                                        'displayName' => '模杯厚度'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 388,
                                        'displayName' => '罩杯类型'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 389,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 390,
                                        'displayName' => '材质'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 391,
                                        'displayName' => '插片'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 392,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 393,
                                        'displayName' => '有无钢圈'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 394,
                                        'displayName' => '肩带类型'
                                    ]
                                ]
                            ],
                            (int) 17 => [
                                'id' => (int) 36,
                                'name' => '内衣配件',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 395,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 396,
                                        'displayName' => '分类'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 397,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 398,
                                        'displayName' => '价格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 399,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 400,
                                        'displayName' => '肩带材料'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 401,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 402,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 403,
                                        'displayName' => '分类'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 404,
                                        'displayName' => '适用人群'
                                    ]
                                ]
                            ],
                            (int) 18 => [
                                'id' => (int) 37,
                                'name' => '打底裤袜',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 405,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 406,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 407,
                                        'displayName' => '花型'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 408,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 409,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 410,
                                        'displayName' => '款式'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 411,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 412,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 413,
                                        'displayName' => '袜子功能用途'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 414,
                                        'displayName' => '压力级别'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 415,
                                        'displayName' => '款式细节'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 416,
                                        'displayName' => '裤袜是否加裆'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 417,
                                        'displayName' => '面料'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 418,
                                        'displayName' => '款式'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 419,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 420,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 421,
                                        'displayName' => '材质'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 422,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 423,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 424,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 425,
                                        'displayName' => '花色'
                                    ]
                                ]
                            ],
                            (int) 19 => [
                                'id' => (int) 38,
                                'name' => '打底衫',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 426,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 427,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 428,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 429,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 430,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 431,
                                        'displayName' => '价格'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 432,
                                        'displayName' => '领型'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 433,
                                        'displayName' => '款式'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 434,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 435,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 436,
                                        'displayName' => '版型'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 437,
                                        'displayName' => '图案'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 438,
                                        'displayName' => '弹性'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 439,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 440,
                                        'displayName' => '适用季节'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 441,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 442,
                                        'displayName' => '领型'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 443,
                                        'displayName' => '款式'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 444,
                                        'displayName' => '面料'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 445,
                                        'displayName' => '材质'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 446,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 447,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 448,
                                        'displayName' => '颜色'
                                    ]
                                ]
                            ],
                            (int) 20 => [
                                'id' => (int) 39,
                                'name' => '秋衣秋裤',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 449,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 450,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 451,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 452,
                                        'displayName' => '款式'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 453,
                                        'displayName' => '领型'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 454,
                                        'displayName' => '价格'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 455,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 456,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 457,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 458,
                                        'displayName' => '规格'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 459,
                                        'displayName' => '风格'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 460,
                                        'displayName' => '上市时间'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 461,
                                        'displayName' => '图案'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 462,
                                        'displayName' => '裤长'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 463,
                                        'displayName' => '袖长'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 464,
                                        'displayName' => '是否加绒'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 465,
                                        'displayName' => '是否贴片'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 466,
                                        'displayName' => '功能'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 467,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 468,
                                        'displayName' => '厚度'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 469,
                                        'displayName' => '版型'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 470,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 471,
                                        'displayName' => '款式'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 472,
                                        'displayName' => '材质'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 473,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 25 => [
                                        'attribute' => (int) 474,
                                        'displayName' => '领型'
                                    ]
                                ]
                            ],
                            (int) 21 => [
                                'id' => (int) 40,
                                'name' => '特殊商品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => []
                            ],
                            (int) 22 => [
                                'id' => (int) 41,
                                'name' => '情趣内衣',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 475,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 476,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 477,
                                        'displayName' => '分类'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 478,
                                        'displayName' => '尺码'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 479,
                                        'displayName' => '风格'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 480,
                                        'displayName' => '类型'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 481,
                                        'displayName' => '款式'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 482,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 483,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 484,
                                        'displayName' => '风格'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 485,
                                        'displayName' => '尺码'
                                    ]
                                ]
                            ]
                        ],
                        'attributeValueSets' => []
                    ]
                ]
            ],
            (int) 1 => [
                'id' => (int) 2,
                'name' => '美妆护肤',
                'children_ids' => [
                    (int) 0 => (int) 7
                ],
                'children' => [
                    (int) 0 => [
                        'id' => (int) 7,
                        'name' => '面部护肤',
                        'children_ids' => [
                            (int) 0 => (int) 42,
                            (int) 1 => (int) 43,
                            (int) 2 => (int) 44,
                            (int) 3 => (int) 45,
                            (int) 4 => (int) 46,
                            (int) 5 => (int) 47,
                            (int) 6 => (int) 48,
                            (int) 7 => (int) 49,
                            (int) 8 => (int) 50,
                            (int) 9 => (int) 51,
                            (int) 10 => (int) 52,
                            (int) 11 => (int) 53,
                            (int) 12 => (int) 54,
                            (int) 13 => (int) 55
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 42,
                                'name' => '洁面',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 486,
                                        'displayName' => '人群'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 487,
                                        'displayName' => '类别'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 488,
                                        'displayName' => '功效'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 489,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 490,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 491,
                                        'displayName' => '分类'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 492,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 493,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 494,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 495,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 496,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 497,
                                        'displayName' => '质地'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 498,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 499,
                                        'displayName' => '功效'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 500,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 43,
                                'name' => '乳液/面霜',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 501,
                                        'displayName' => '功效'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 502,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 503,
                                        'displayName' => '分类'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 504,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 505,
                                        'displayName' => '适用肌龄'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 506,
                                        'displayName' => '净含量'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 507,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 508,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 509,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 510,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 511,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 512,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 513,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 514,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 515,
                                        'displayName' => '功效'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 44,
                                'name' => '面膜',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 516,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 517,
                                        'displayName' => '功效'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 518,
                                        'displayName' => '包装规格（片）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 519,
                                        'displayName' => '分类'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 520,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 521,
                                        'displayName' => '规格'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 522,
                                        'displayName' => '功效'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 523,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 524,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 525,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 526,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 527,
                                        'displayName' => '单片净含量（mL）'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 528,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 529,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 530,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 531,
                                        'displayName' => '类型'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 45,
                                'name' => '套装/礼盒',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 532,
                                        'displayName' => '功效'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 533,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 534,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 535,
                                        'displayName' => '分类'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 536,
                                        'displayName' => '适用肌龄'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 537,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 538,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 539,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 540,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 541,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 542,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 543,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 544,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 545,
                                        'displayName' => '功效'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 46,
                                'name' => '面部精华',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 546,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 547,
                                        'displayName' => '功效'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 548,
                                        'displayName' => '适用肌龄'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 549,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 550,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 551,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 552,
                                        'displayName' => '净含量'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 553,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 554,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 555,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 556,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 557,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 558,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 559,
                                        'displayName' => '功效'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 47,
                                'name' => '眼霜/眼部精华',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 560,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 561,
                                        'displayName' => '分类'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 562,
                                        'displayName' => '功效'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 563,
                                        'displayName' => '适用肌龄'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 564,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 565,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 566,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 567,
                                        'displayName' => '净含量'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 568,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 569,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 570,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 571,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 572,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 573,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 574,
                                        'displayName' => '功效'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 48,
                                'name' => '卸妆',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 575,
                                        'displayName' => '适用部位'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 576,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 577,
                                        'displayName' => '分类'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 578,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 579,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 580,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 581,
                                        'displayName' => '净含量'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 582,
                                        'displayName' => '功效'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 583,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 584,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 585,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 586,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 587,
                                        'displayName' => '适合肤质'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 49,
                                'name' => '防晒',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 588,
                                        'displayName' => '分类'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 589,
                                        'displayName' => 'PA值'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 590,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 591,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 592,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 593,
                                        'displayName' => '防晒指数'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 594,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 595,
                                        'displayName' => '功效'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 596,
                                        'displayName' => '净含量'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 597,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 598,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 599,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 600,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 601,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 602,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 603,
                                        'displayName' => '防晒指数'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 604,
                                        'displayName' => 'PA值'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 605,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 606,
                                        'displayName' => '功效'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 607,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 50,
                                'name' => '眼膜',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 608,
                                        'displayName' => '规格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 609,
                                        'displayName' => '分类'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 610,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 611,
                                        'displayName' => '功效'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 612,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 613,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 614,
                                        'displayName' => '单片净含量（mL）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 615,
                                        'displayName' => '功效'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 616,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 617,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 618,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 619,
                                        'displayName' => '类型'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 620,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 621,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 622,
                                        'displayName' => '产品产地'
                                    ]
                                ]
                            ],
                            (int) 9 => [
                                'id' => (int) 51,
                                'name' => '唇膜/唇部精华',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 623,
                                        'displayName' => '分类'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 624,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 625,
                                        'displayName' => '功效'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 626,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 627,
                                        'displayName' => '规格'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 628,
                                        'displayName' => '类型'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 629,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 630,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 631,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 632,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 633,
                                        'displayName' => '功效'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 634,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ]
                                ]
                            ],
                            (int) 10 => [
                                'id' => (int) 52,
                                'name' => 'T区护理',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 635,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 636,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 637,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 638,
                                        'displayName' => '分类'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 639,
                                        'displayName' => '功效'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 640,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 641,
                                        'displayName' => '功效'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 642,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 643,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 644,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 645,
                                        'displayName' => '分类'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 646,
                                        'displayName' => '净含量（mL/g）'
                                    ]
                                ]
                            ],
                            (int) 11 => [
                                'id' => (int) 53,
                                'name' => '润唇膏',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 647,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 648,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 649,
                                        'displayName' => '香味'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 650,
                                        'displayName' => '净含量'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 651,
                                        'displayName' => '是否防晒'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 652,
                                        'displayName' => '功效'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 653,
                                        'displayName' => '分类'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 654,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 655,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 656,
                                        'displayName' => '是否为特殊用途化妆品'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 657,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 658,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 659,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 660,
                                        'displayName' => '分类'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 661,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 662,
                                        'displayName' => '产品产地'
                                    ]
                                ]
                            ],
                            (int) 12 => [
                                'id' => (int) 54,
                                'name' => '其它面部护肤',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 663,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 664,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 665,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 666,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 667,
                                        'displayName' => '功效'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 668,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 669,
                                        'displayName' => '产品包装'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 670,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 671,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 672,
                                        'displayName' => '功效'
                                    ]
                                ]
                            ],
                            (int) 13 => [
                                'id' => (int) 55,
                                'name' => '爽肤水/化妆水',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 673,
                                        'displayName' => '功效'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 674,
                                        'displayName' => '适合肤质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 675,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 676,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 677,
                                        'displayName' => '分类'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 678,
                                        'displayName' => '保质期（年）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 679,
                                        'displayName' => '净含量（mL/g）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 680,
                                        'displayName' => '产品产地'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 681,
                                        'displayName' => '功效'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 682,
                                        'displayName' => '分类'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 683,
                                        'displayName' => '适合肤质'
                                    ]
                                ]
                            ]
                        ],
                        'attributeValueSets' => []
                    ]
                ]
            ],
            (int) 2 => [
                'id' => (int) 3,
                'name' => '厨具',
                'children_ids' => [
                    (int) 0 => (int) 8,
                    (int) 1 => (int) 9,
                    (int) 2 => (int) 10,
                    (int) 3 => (int) 11,
                    (int) 4 => (int) 12,
                    (int) 5 => (int) 13
                ],
                'children' => [
                    (int) 0 => [
                        'id' => (int) 8,
                        'name' => '茶具',
                        'children_ids' => [
                            (int) 0 => (int) 56,
                            (int) 1 => (int) 57,
                            (int) 2 => (int) 58,
                            (int) 3 => (int) 59,
                            (int) 4 => (int) 60,
                            (int) 5 => (int) 61,
                            (int) 6 => (int) 62,
                            (int) 7 => (int) 63,
                            (int) 8 => (int) 64,
                            (int) 9 => (int) 65
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 56,
                                'name' => '整套茶具',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 684,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 685,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 686,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 687,
                                        'displayName' => '型号'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 688,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 689,
                                        'displayName' => '头数'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 690,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 691,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 692,
                                        'displayName' => '尺寸（直径、深度）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 693,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 694,
                                        'displayName' => '适用范围'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 695,
                                        'displayName' => '用料'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 696,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 697,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 698,
                                        'displayName' => '适用人数'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 699,
                                        'displayName' => '产地'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 700,
                                        'displayName' => '茶具材质'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 701,
                                        'displayName' => '风格'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 702,
                                        'displayName' => '价格区间'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 703,
                                        'displayName' => '功能'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 704,
                                        'displayName' => '茶盘材质'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 57,
                                'name' => '茶杯',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 705,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 706,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 707,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 708,
                                        'displayName' => '容量'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 709,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 710,
                                        'displayName' => '材质'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 711,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 712,
                                        'displayName' => '适用范围'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 713,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 714,
                                        'displayName' => '用料'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 715,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 716,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 717,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 718,
                                        'displayName' => '尺寸（直径、深度）'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 719,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 720,
                                        'displayName' => '头数'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 721,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 722,
                                        'displayName' => '产地'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 723,
                                        'displayName' => '数量'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 58,
                                'name' => '茶壶',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 724,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 725,
                                        'displayName' => '容量'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 726,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 727,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 728,
                                        'displayName' => '类别'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 729,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 730,
                                        'displayName' => '型号'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 731,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 732,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 733,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 734,
                                        'displayName' => '容量'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 735,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 736,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 737,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 738,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 739,
                                        'displayName' => '产地'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 59,
                                'name' => '茶盘茶托',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 740,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 741,
                                        'displayName' => '类别'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 742,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 743,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 744,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 745,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 746,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 747,
                                        'displayName' => '容量'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 748,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 749,
                                        'displayName' => '类别'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 750,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 751,
                                        'displayName' => '型号'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 752,
                                        'displayName' => '材质'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 753,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 754,
                                        'displayName' => '竹木种类'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 755,
                                        'displayName' => '产地'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 756,
                                        'displayName' => '分类'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 757,
                                        'displayName' => '种类'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 60,
                                'name' => '茶叶罐',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 758,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 759,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 760,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 761,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 762,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 763,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 764,
                                        'displayName' => '材质'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 765,
                                        'displayName' => '型号'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 766,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 767,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 768,
                                        'displayName' => '容量'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 769,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 770,
                                        'displayName' => '类别'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 771,
                                        'displayName' => '产地'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 61,
                                'name' => '茶具配件',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 772,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 773,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 774,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 775,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 776,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 777,
                                        'displayName' => '类别'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 778,
                                        'displayName' => '材质'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 779,
                                        'displayName' => '型号'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 780,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 781,
                                        'displayName' => '容量'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 782,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 783,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 784,
                                        'displayName' => '颜色'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 62,
                                'name' => '茶宠摆件',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 785,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 786,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 787,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 788,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 789,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 790,
                                        'displayName' => '类别'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 791,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 792,
                                        'displayName' => '容量'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 793,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 794,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 795,
                                        'displayName' => '型号'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 796,
                                        'displayName' => '材质'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 63,
                                'name' => '咖啡具',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 797,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 798,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 799,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 800,
                                        'displayName' => '分类'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 801,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 802,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 803,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 804,
                                        'displayName' => '容量'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 805,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 806,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 807,
                                        'displayName' => '材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 808,
                                        'displayName' => '型号'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 809,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 810,
                                        'displayName' => '类别'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 811,
                                        'displayName' => '适用人数'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 812,
                                        'displayName' => '包装'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 813,
                                        'displayName' => '国产/进口'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 64,
                                'name' => '其他',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 814,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 815,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 816,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 817,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 818,
                                        'displayName' => '类别'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 819,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 820,
                                        'displayName' => '容量'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 821,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 822,
                                        'displayName' => '型号'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 823,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 824,
                                        'displayName' => '包装礼盒'
                                    ]
                                ]
                            ],
                            (int) 9 => [
                                'id' => (int) 65,
                                'name' => '特殊商品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => []
                            ]
                        ],
                        'attributeValueSets' => []
                    ],
                    (int) 1 => [
                        'id' => (int) 9,
                        'name' => '刀剪菜板',
                        'children_ids' => [
                            (int) 0 => (int) 66,
                            (int) 1 => (int) 67,
                            (int) 2 => (int) 68,
                            (int) 3 => (int) 69,
                            (int) 4 => (int) 70,
                            (int) 5 => (int) 71,
                            (int) 6 => (int) 72
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 66,
                                'name' => '菜刀',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 825,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 826,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 827,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 828,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 829,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 830,
                                        'displayName' => '材质（刀柄、刀身）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 831,
                                        'displayName' => '规格（刀柄、刀身长宽高）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 832,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 833,
                                        'displayName' => '类别'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 834,
                                        'displayName' => '用途及特点'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 835,
                                        'displayName' => '分类'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 836,
                                        'displayName' => '产地'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 837,
                                        'displayName' => '刀尖角度'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 838,
                                        'displayName' => '多少刃'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 839,
                                        'displayName' => '是否开刃'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 840,
                                        'displayName' => '刀刃长度（mm）'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 67,
                                'name' => '剪刀',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 841,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 842,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 843,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 844,
                                        'displayName' => '类别'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 845,
                                        'displayName' => '用途及特点'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 846,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 847,
                                        'displayName' => '型号'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 848,
                                        'displayName' => '材质（剪柄、剪体）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 849,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 850,
                                        'displayName' => '包装'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 851,
                                        'displayName' => '分类'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 852,
                                        'displayName' => '颜色'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 68,
                                'name' => '刀具套装',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 853,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 854,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 855,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 856,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 857,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 858,
                                        'displayName' => '型号'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 859,
                                        'displayName' => '类别'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 860,
                                        'displayName' => '规格'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 861,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 862,
                                        'displayName' => '产地'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 863,
                                        'displayName' => '件数'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 864,
                                        'displayName' => '多少刃'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 865,
                                        'displayName' => '刀尖角度'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 866,
                                        'displayName' => '是否开刃'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 867,
                                        'displayName' => '刀刃长度（mm）'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 69,
                                'name' => '砧板',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 868,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 869,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 870,
                                        'displayName' => '规格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 871,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 872,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 873,
                                        'displayName' => '材质'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 874,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 875,
                                        'displayName' => '类别'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 876,
                                        'displayName' => '包装'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 877,
                                        'displayName' => '用途'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 878,
                                        'displayName' => '形状'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 70,
                                'name' => '瓜果刀/刨',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 879,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 880,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 881,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 882,
                                        'displayName' => '材质（剪柄、剪体）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 883,
                                        'displayName' => '类别'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 884,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 885,
                                        'displayName' => '用途及特点'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 886,
                                        'displayName' => '型号'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 887,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 888,
                                        'displayName' => '材质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 889,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 71,
                                'name' => '多功能刀',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 890,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 891,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 892,
                                        'displayName' => '类别'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 893,
                                        'displayName' => '用途及特点'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 894,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 895,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 896,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 897,
                                        'displayName' => '材质（剪柄、剪体）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 898,
                                        'displayName' => '型号'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 899,
                                        'displayName' => '材质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 900,
                                        'displayName' => '用途'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 901,
                                        'displayName' => '是否开刃'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 902,
                                        'displayName' => '刀尖角度'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 903,
                                        'displayName' => '多少刃'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 904,
                                        'displayName' => '刀刃长度（mm）'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 72,
                                'name' => '特殊商品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => []
                            ]
                        ],
                        'attributeValueSets' => []
                    ],
                    (int) 2 => [
                        'id' => (int) 10,
                        'name' => '烹饪锅具',
                        'children_ids' => [
                            (int) 0 => (int) 73,
                            (int) 1 => (int) 74,
                            (int) 2 => (int) 75,
                            (int) 3 => (int) 76,
                            (int) 4 => (int) 77,
                            (int) 5 => (int) 78,
                            (int) 6 => (int) 79,
                            (int) 7 => (int) 80,
                            (int) 8 => (int) 81,
                            (int) 9 => (int) 82,
                            (int) 10 => (int) 83
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 73,
                                'name' => '炒锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 905,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 906,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 907,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 908,
                                        'displayName' => '是否带盖'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 909,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 910,
                                        'displayName' => '是否带盖'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 911,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 912,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 913,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 914,
                                        'displayName' => '材质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 915,
                                        'displayName' => '类型'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 916,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 917,
                                        'displayName' => '型号'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 918,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 919,
                                        'displayName' => '功能'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 920,
                                        'displayName' => '产地'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 921,
                                        'displayName' => '直径'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 74,
                                'name' => '平底锅/煎锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 922,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 923,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 924,
                                        'displayName' => '规格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 925,
                                        'displayName' => '价格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 926,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 927,
                                        'displayName' => '是否带盖'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 928,
                                        'displayName' => '类型'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 929,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 930,
                                        'displayName' => '是否带盖'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 931,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 932,
                                        'displayName' => '材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 933,
                                        'displayName' => '型号'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 934,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 935,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 936,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 937,
                                        'displayName' => '功能'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 938,
                                        'displayName' => '产地'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 75,
                                'name' => '高压锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 939,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 940,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 941,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 942,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 943,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 944,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 945,
                                        'displayName' => '类型'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 946,
                                        'displayName' => '是否带蒸格'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 947,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 948,
                                        'displayName' => '型号'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 949,
                                        'displayName' => '材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 950,
                                        'displayName' => '规格（直径、内径。手柄长和高）'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 951,
                                        'displayName' => '容量'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 952,
                                        'displayName' => '直径'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 953,
                                        'displayName' => '产地'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 954,
                                        'displayName' => '有无蒸格'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 76,
                                'name' => '蒸锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 955,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 956,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 957,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 958,
                                        'displayName' => '层数'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 959,
                                        'displayName' => '类型'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 960,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 961,
                                        'displayName' => '规格（直径、内径、每个隔层之间的距离）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 962,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 963,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 964,
                                        'displayName' => '型号'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 965,
                                        'displayName' => '材质（锅体、锅盖、锅底）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 966,
                                        'displayName' => '材质'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 967,
                                        'displayName' => '层数'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 968,
                                        'displayName' => '类型'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 969,
                                        'displayName' => '直径'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 77,
                                'name' => '汤锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 970,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 971,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 972,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 973,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 974,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 975,
                                        'displayName' => '是否带盖'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 976,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 977,
                                        'displayName' => '类型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 978,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 979,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 980,
                                        'displayName' => '材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 981,
                                        'displayName' => '型号'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 982,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 983,
                                        'displayName' => '锅底类型'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 984,
                                        'displayName' => '直径'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 78,
                                'name' => '奶锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 985,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 986,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 987,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 988,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 989,
                                        'displayName' => '类型'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 990,
                                        'displayName' => '是否带盖'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 991,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 992,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 993,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 994,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 995,
                                        'displayName' => '材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 996,
                                        'displayName' => '型号'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 997,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 998,
                                        'displayName' => '锅底类型'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 999,
                                        'displayName' => '直径'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 79,
                                'name' => '锅具套装',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1000,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1001,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1002,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1003,
                                        'displayName' => '类型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1004,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1005,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1006,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1007,
                                        'displayName' => '件数'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1008,
                                        'displayName' => '是否带盖'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1009,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1010,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1011,
                                        'displayName' => '型号'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1012,
                                        'displayName' => '材质'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1013,
                                        'displayName' => '件数'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1014,
                                        'displayName' => '产地'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 80,
                                'name' => '砂锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1015,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1016,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1017,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1018,
                                        'displayName' => '用途'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1019,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1020,
                                        'displayName' => '型号'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1021,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1022,
                                        'displayName' => '规格（高度、口径、底径、容量）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1023,
                                        'displayName' => '材质'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1024,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1025,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1026,
                                        'displayName' => '是否带盖'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1027,
                                        'displayName' => '材质'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1028,
                                        'displayName' => '容量'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1029,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 81,
                                'name' => '水壶',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1030,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1031,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1032,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1033,
                                        'displayName' => '材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1034,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1035,
                                        'displayName' => '适用炉灶'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1036,
                                        'displayName' => '型号'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1037,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1038,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1039,
                                        'displayName' => '材质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1040,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1041,
                                        'displayName' => '容量'
                                    ]
                                ]
                            ],
                            (int) 9 => [
                                'id' => (int) 82,
                                'name' => '火锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1042,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1043,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1044,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1045,
                                        'displayName' => '直径'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1046,
                                        'displayName' => '适用范围'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1047,
                                        'displayName' => '分类'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1048,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1049,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1050,
                                        'displayName' => '型号'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1051,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1052,
                                        'displayName' => '适用炉灶'
                                    ]
                                ]
                            ],
                            (int) 10 => [
                                'id' => (int) 83,
                                'name' => '特殊商品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => []
                            ]
                        ],
                        'attributeValueSets' => []
                    ],
                    (int) 3 => [
                        'id' => (int) 11,
                        'name' => '餐具',
                        'children_ids' => [
                            (int) 0 => (int) 84,
                            (int) 1 => (int) 85,
                            (int) 2 => (int) 86,
                            (int) 3 => (int) 87,
                            (int) 4 => (int) 88,
                            (int) 5 => (int) 89,
                            (int) 6 => (int) 90,
                            (int) 7 => (int) 91,
                            (int) 8 => (int) 92
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 84,
                                'name' => '餐具套装',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1053,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1054,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1055,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1056,
                                        'displayName' => '型号'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1057,
                                        'displayName' => '尺寸（直径、深度）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1058,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1059,
                                        'displayName' => '头数'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1060,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1061,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1062,
                                        'displayName' => '用料'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1063,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1064,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1065,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1066,
                                        'displayName' => '适用范围'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1067,
                                        'displayName' => '图案'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1068,
                                        'displayName' => '风格'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1069,
                                        'displayName' => '适用人数'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1070,
                                        'displayName' => '数量'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1071,
                                        'displayName' => '产地'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1072,
                                        'displayName' => '材质'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 85,
                                'name' => '茶具/咖啡具',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1073,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1074,
                                        'displayName' => '类别'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1075,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1076,
                                        'displayName' => '价格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1077,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1078,
                                        'displayName' => '容量'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1079,
                                        'displayName' => '材质'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1080,
                                        'displayName' => '类别'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1081,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1082,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1083,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1084,
                                        'displayName' => '型号'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 86,
                                'name' => '碗',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1085,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1086,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1087,
                                        'displayName' => '型号'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1088,
                                        'displayName' => '材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1089,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1090,
                                        'displayName' => '规格（底径、 口径、高）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1091,
                                        'displayName' => '头数'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1092,
                                        'displayName' => '类别'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1093,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1094,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1095,
                                        'displayName' => '使用范围'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1096,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1097,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1098,
                                        'displayName' => '形状'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1099,
                                        'displayName' => '材质'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1100,
                                        'displayName' => '产地'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1101,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1102,
                                        'displayName' => '直径'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1103,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1104,
                                        'displayName' => '碗口直径'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 1105,
                                        'displayName' => '分类'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 1106,
                                        'displayName' => '个数'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 1107,
                                        'displayName' => '风格'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 87,
                                'name' => '筷子',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1108,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1109,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1110,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1111,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1112,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1113,
                                        'displayName' => '使用范围'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1114,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1115,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1116,
                                        'displayName' => '类别'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1117,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1118,
                                        'displayName' => '型号'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1119,
                                        'displayName' => '包装'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1120,
                                        'displayName' => '风格'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1121,
                                        'displayName' => '规格'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1122,
                                        'displayName' => '分类'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1123,
                                        'displayName' => '双数'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1124,
                                        'displayName' => '适用场景'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 88,
                                'name' => '一次性用品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1125,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1126,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1127,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1128,
                                        'displayName' => '型号'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1129,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1130,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1131,
                                        'displayName' => '尺寸（长宽高）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1132,
                                        'displayName' => '类别'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1133,
                                        'displayName' => '材质'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1134,
                                        'displayName' => '分类'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1135,
                                        'displayName' => '包装'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1136,
                                        'displayName' => '包装'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1137,
                                        'displayName' => '应用场景'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1138,
                                        'displayName' => '只数'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 89,
                                'name' => '果盘/果篮',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1139,
                                        'displayName' => '适用范围'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1140,
                                        'displayName' => '用料'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1141,
                                        'displayName' => '骨粉含量'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1142,
                                        'displayName' => '包装礼盒'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1143,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1144,
                                        'displayName' => '尺寸（直径、深度）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1145,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1146,
                                        'displayName' => '头数'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1147,
                                        'displayName' => '工艺'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1148,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1149,
                                        'displayName' => '材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1150,
                                        'displayName' => '型号'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1151,
                                        'displayName' => '价格'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1152,
                                        'displayName' => '材质'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1153,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1154,
                                        'displayName' => '风格'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1155,
                                        'displayName' => '分类'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1156,
                                        'displayName' => '形状'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1157,
                                        'displayName' => '是否手工'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1158,
                                        'displayName' => '流行元素'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 90,
                                'name' => '盘/碟',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1159,
                                        'displayName' => '分类'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1160,
                                        'displayName' => '盘类型'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1161,
                                        'displayName' => '个数'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1162,
                                        'displayName' => '风格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1163,
                                        'displayName' => '形状'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1164,
                                        'displayName' => '直径'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1165,
                                        'displayName' => '材质'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 91,
                                'name' => '刀/叉/勺',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1166,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1167,
                                        'displayName' => '分类'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1168,
                                        'displayName' => '风格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1169,
                                        'displayName' => '适用场景'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 92,
                                'name' => '特殊商品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => []
                            ]
                        ],
                        'attributeValueSets' => []
                    ],
                    (int) 4 => [
                        'id' => (int) 12,
                        'name' => '厨房配件',
                        'children_ids' => [
                            (int) 0 => (int) 93,
                            (int) 1 => (int) 94,
                            (int) 2 => (int) 95,
                            (int) 3 => (int) 96,
                            (int) 4 => (int) 97,
                            (int) 5 => (int) 98,
                            (int) 6 => (int) 99,
                            (int) 7 => (int) 100,
                            (int) 8 => (int) 101
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 93,
                                'name' => '保鲜盒',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1170,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1171,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1172,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1173,
                                        'displayName' => '规格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1174,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1175,
                                        'displayName' => '材质（盒盖、盒体）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1176,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1177,
                                        'displayName' => '规格（长宽高、容量）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1178,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1179,
                                        'displayName' => '使用温度'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1180,
                                        'displayName' => '形状'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1181,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1182,
                                        'displayName' => '容量'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1183,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1184,
                                        'displayName' => '分类'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1185,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1186,
                                        'displayName' => '产地'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1187,
                                        'displayName' => '形状'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1188,
                                        'displayName' => '套装规格'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1189,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 1190,
                                        'displayName' => '容量'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 1191,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 94,
                                'name' => '烘焙/烧烤',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1192,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1193,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1194,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1195,
                                        'displayName' => '型号'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1196,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1197,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1198,
                                        'displayName' => '烘焙用具'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1199,
                                        'displayName' => '烧烤用品'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1200,
                                        'displayName' => '分类'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1201,
                                        'displayName' => '包装'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1202,
                                        'displayName' => '烘焙用具'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1203,
                                        'displayName' => '包装'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1204,
                                        'displayName' => '配件'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 95,
                                'name' => '厨房秤',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1205,
                                        'displayName' => '类型'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1206,
                                        'displayName' => '精度'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1207,
                                        'displayName' => '最大称重'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1208,
                                        'displayName' => '控制方式'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1209,
                                        'displayName' => '充电类型'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 96,
                                'name' => '饭盒/提锅',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1210,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1211,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1212,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1213,
                                        'displayName' => '规格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1214,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1215,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1216,
                                        'displayName' => '类别'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1217,
                                        'displayName' => '规格（长宽高、容量）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1218,
                                        'displayName' => '材质'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1219,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1220,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1221,
                                        'displayName' => '耐热温度范围'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1222,
                                        'displayName' => '层数'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1223,
                                        'displayName' => '分类'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1224,
                                        'displayName' => '功能'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1225,
                                        'displayName' => '层数'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 97,
                                'name' => '厨房置物架',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1226,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1227,
                                        'displayName' => '型号'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1228,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1229,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1230,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1231,
                                        'displayName' => '价格'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1232,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1233,
                                        'displayName' => '分类'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1234,
                                        'displayName' => '材质'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1235,
                                        'displayName' => '层数'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1236,
                                        'displayName' => '层数'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1237,
                                        'displayName' => '分类'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1238,
                                        'displayName' => '安装方式'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 98,
                                'name' => '厨房DIY/小工具',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1239,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1240,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1241,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1242,
                                        'displayName' => '型号'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1243,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1244,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1245,
                                        'displayName' => '价格'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1246,
                                        'displayName' => '包装'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1247,
                                        'displayName' => '分类'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1248,
                                        'displayName' => '材质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1249,
                                        'displayName' => '包装规格'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 99,
                                'name' => '厨房储物器皿',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1250,
                                        'displayName' => '分类'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1251,
                                        'displayName' => '材质'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 100,
                                'name' => '调料器皿',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1252,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1253,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1254,
                                        'displayName' => '类别'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1255,
                                        'displayName' => '价格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1256,
                                        'displayName' => '规格（长宽高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1257,
                                        'displayName' => '材质'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1258,
                                        'displayName' => '型号'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1259,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1260,
                                        'displayName' => '类别'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1261,
                                        'displayName' => '适用场景'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1262,
                                        'displayName' => '规格'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 101,
                                'name' => '特殊商品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => []
                            ]
                        ],
                        'attributeValueSets' => []
                    ],
                    (int) 5 => [
                        'id' => (int) 13,
                        'name' => '水具酒具',
                        'children_ids' => [
                            (int) 0 => (int) 102,
                            (int) 1 => (int) 103,
                            (int) 2 => (int) 104,
                            (int) 3 => (int) 105,
                            (int) 4 => (int) 106,
                            (int) 5 => (int) 107,
                            (int) 6 => (int) 108,
                            (int) 7 => (int) 109,
                            (int) 8 => (int) 110,
                            (int) 9 => (int) 111,
                            (int) 10 => (int) 112
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 102,
                                'name' => '塑料杯',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1263,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1264,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1265,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1266,
                                        'displayName' => '容量'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1267,
                                        'displayName' => '是否有茶格'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1268,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1269,
                                        'displayName' => '型号'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1270,
                                        'displayName' => '尺寸（长宽高、杯底直径、杯口直径）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1271,
                                        'displayName' => '材质（杯体、盖子、密封圈、杯口环、茶网）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1272,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1273,
                                        'displayName' => '承受温度范围'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1274,
                                        'displayName' => '风格'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1275,
                                        'displayName' => '容量'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1276,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1277,
                                        'displayName' => '分类'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1278,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1279,
                                        'displayName' => '功能'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1280,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1281,
                                        'displayName' => '材质'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 103,
                                'name' => '运动水壶',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1282,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1283,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1284,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1285,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1286,
                                        'displayName' => '容量'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1287,
                                        'displayName' => '是否有茶格'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1288,
                                        'displayName' => '是否保温'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1289,
                                        'displayName' => '承受温度范围'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1290,
                                        'displayName' => '材质（杯体、盖子、密封圈、杯口环）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1291,
                                        'displayName' => '尺寸（长宽高、杯底直径、杯口直径）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1292,
                                        'displayName' => '型号'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1293,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1294,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1295,
                                        'displayName' => '容量'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1296,
                                        'displayName' => '风格'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1297,
                                        'displayName' => '适用场景'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1298,
                                        'displayName' => '功能'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1299,
                                        'displayName' => '出水方式'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1300,
                                        'displayName' => '款式'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1301,
                                        'displayName' => '国产/进口'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 104,
                                'name' => '玻璃杯',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1302,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1303,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1304,
                                        'displayName' => '承受温度范围'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1305,
                                        'displayName' => '是否有茶格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1306,
                                        'displayName' => '容量'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1307,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1308,
                                        'displayName' => '材质（杯体、盖子、密封圈、杯口环、茶网）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1309,
                                        'displayName' => '尺寸（长宽高、杯底直径、杯口直径）'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1310,
                                        'displayName' => '型号'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1311,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1312,
                                        'displayName' => '容量'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1313,
                                        'displayName' => '花色'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1314,
                                        'displayName' => '形状'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1315,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1316,
                                        'displayName' => '分类'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1317,
                                        'displayName' => '数量'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1318,
                                        'displayName' => '功能'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1319,
                                        'displayName' => '材质'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 105,
                                'name' => '陶瓷/马克杯',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1320,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1321,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1322,
                                        'displayName' => '材质（杯体、盖子、密封圈、杯口环、茶网）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1323,
                                        'displayName' => '容量'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1324,
                                        'displayName' => '尺寸（长宽高、杯底直径、杯口直径）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1325,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1326,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1327,
                                        'displayName' => '承受温度范围'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1328,
                                        'displayName' => '保温时间'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1329,
                                        'displayName' => '型号'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1330,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1331,
                                        'displayName' => '是否有盖'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1332,
                                        'displayName' => '材质'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1333,
                                        'displayName' => '容量'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1334,
                                        'displayName' => '风格'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1335,
                                        'displayName' => '数量'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1336,
                                        'displayName' => '功能'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1337,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1338,
                                        'displayName' => '工艺'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 106,
                                'name' => '保温杯',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1339,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1340,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1341,
                                        'displayName' => '保温时间'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1342,
                                        'displayName' => '承受温度范围'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1343,
                                        'displayName' => '是否有茶格'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1344,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1345,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1346,
                                        'displayName' => '容量'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1347,
                                        'displayName' => '尺寸（长宽高、杯底直径、杯口直径）'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1348,
                                        'displayName' => '材质（杯体、盖子、密封圈、杯口环、茶网）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1349,
                                        'displayName' => '型号'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1350,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1351,
                                        'displayName' => '样式'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1352,
                                        'displayName' => '材质'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1353,
                                        'displayName' => '容量'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1354,
                                        'displayName' => '适用场景'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1355,
                                        'displayName' => '功能'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1356,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1357,
                                        'displayName' => '分类'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1358,
                                        'displayName' => '杯套'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 107,
                                'name' => '保温壶',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1359,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1360,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1361,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1362,
                                        'displayName' => '容量'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1363,
                                        'displayName' => '尺寸（长宽高、杯底直径、杯口直径）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1364,
                                        'displayName' => '材质（杯体、盖子、密封圈、杯口环、茶网）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1365,
                                        'displayName' => '保温时间'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1366,
                                        'displayName' => '承受温度范围'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1367,
                                        'displayName' => '是否有茶格'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1368,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1369,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1370,
                                        'displayName' => '型号'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1371,
                                        'displayName' => '材质'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1372,
                                        'displayName' => '容量'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1373,
                                        'displayName' => '分类'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1374,
                                        'displayName' => '保温时长'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1375,
                                        'displayName' => '适用场景'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1376,
                                        'displayName' => '功能'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1377,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1378,
                                        'displayName' => '风格'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 108,
                                'name' => '酒杯/酒具',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1379,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1380,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1381,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1382,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1383,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1384,
                                        'displayName' => '材质'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1385,
                                        'displayName' => '尺寸（长宽高、杯口、杯底直径、容量）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1386,
                                        'displayName' => '类别'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1387,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1388,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1389,
                                        'displayName' => '容量'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1390,
                                        'displayName' => '分类'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1391,
                                        'displayName' => '数量'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1392,
                                        'displayName' => '国产/进口'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 109,
                                'name' => '杯具套装',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1393,
                                        'displayName' => '净重量（kg）'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1394,
                                        'displayName' => '类别'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1395,
                                        'displayName' => '尺寸（长宽高、杯口、杯底直径、容量）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1396,
                                        'displayName' => '材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1397,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1398,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1399,
                                        'displayName' => '价格'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1400,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1401,
                                        'displayName' => '材质'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1402,
                                        'displayName' => '风格'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1403,
                                        'displayName' => '数量'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1404,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 110,
                                'name' => '焖烧杯',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1405,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1406,
                                        'displayName' => '流行元素'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1407,
                                        'displayName' => '产地'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1408,
                                        'displayName' => '样式'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1409,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1410,
                                        'displayName' => '容量'
                                    ]
                                ]
                            ],
                            (int) 9 => [
                                'id' => (int) 111,
                                'name' => '水具/酒具配件',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1411,
                                        'displayName' => '适用场景'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1412,
                                        'displayName' => '产品数量'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1413,
                                        'displayName' => '包装规格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1414,
                                        'displayName' => '材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1415,
                                        'displayName' => '适用人群'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1416,
                                        'displayName' => '国产/进口'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1417,
                                        'displayName' => '风格'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1418,
                                        'displayName' => '容量'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1419,
                                        'displayName' => '功能热点'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1420,
                                        'displayName' => '流行元素'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1421,
                                        'displayName' => '是否可定制'
                                    ]
                                ]
                            ],
                            (int) 10 => [
                                'id' => (int) 112,
                                'name' => '特殊商品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => []
                            ]
                        ],
                        'attributeValueSets' => []
                    ]
                ]
            ],
            (int) 3 => [
                'id' => (int) 4,
                'name' => '电脑、办公',
                'children_ids' => [
                    (int) 0 => (int) 14,
                    (int) 1 => (int) 15
                ],
                'children' => [
                    (int) 0 => [
                        'id' => (int) 14,
                        'name' => '外设产品',
                        'children_ids' => [
                            (int) 0 => (int) 113,
                            (int) 1 => (int) 114,
                            (int) 2 => (int) 115,
                            (int) 3 => (int) 116,
                            (int) 4 => (int) 117,
                            (int) 5 => (int) 118,
                            (int) 6 => (int) 119,
                            (int) 7 => (int) 120,
                            (int) 8 => (int) 121,
                            (int) 9 => (int) 122,
                            (int) 10 => (int) 123,
                            (int) 11 => (int) 124,
                            (int) 12 => (int) 125,
                            (int) 13 => (int) 126,
                            (int) 14 => (int) 127,
                            (int) 15 => (int) 128
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 113,
                                'name' => '移动硬盘',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1422,
                                        'displayName' => '容量'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1423,
                                        'displayName' => '尺寸'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1424,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1425,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1426,
                                        'displayName' => '接口'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1427,
                                        'displayName' => '加密功能'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1428,
                                        'displayName' => '电源'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1429,
                                        'displayName' => '外部输出接口'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1430,
                                        'displayName' => '容量'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1431,
                                        'displayName' => '外壳颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1432,
                                        'displayName' => '型号'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1433,
                                        'displayName' => '硬盘尺寸'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1434,
                                        'displayName' => '系列'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1435,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1436,
                                        'displayName' => '外壳材质'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1437,
                                        'displayName' => '指示灯'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1438,
                                        'displayName' => '类型'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1439,
                                        'displayName' => '尺寸（mm）'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1440,
                                        'displayName' => '重量（g）'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1441,
                                        'displayName' => '系统要求'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 1442,
                                        'displayName' => '独特设计'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 1443,
                                        'displayName' => '类型'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 1444,
                                        'displayName' => '优选服务'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 114,
                                'name' => 'U盘',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1445,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1446,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1447,
                                        'displayName' => '容量'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1448,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1449,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1450,
                                        'displayName' => '系列'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1451,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1452,
                                        'displayName' => '容量'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1453,
                                        'displayName' => '独特设计'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1454,
                                        'displayName' => '接口'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1455,
                                        'displayName' => '指示灯'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1456,
                                        'displayName' => '外壳材质'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1457,
                                        'displayName' => '特性'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1458,
                                        'displayName' => '最大写入速度(MB/s)'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1459,
                                        'displayName' => '最大读取速度(MB/s)'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1460,
                                        'displayName' => '重量（g）'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1461,
                                        'displayName' => '尺寸（mm）'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1462,
                                        'displayName' => '接口类型'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1463,
                                        'displayName' => '钥匙孔'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1464,
                                        'displayName' => '优选服务'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 115,
                                'name' => '鼠标',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1465,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1466,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1467,
                                        'displayName' => '接口'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1468,
                                        'displayName' => '其他特性'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1469,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1470,
                                        'displayName' => '类型'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1471,
                                        'displayName' => '型号'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1472,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1473,
                                        'displayName' => '传输方式'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1474,
                                        'displayName' => '人体工学'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1475,
                                        'displayName' => '按键数'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1476,
                                        'displayName' => '连接方式'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1477,
                                        'displayName' => '产品类型'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1478,
                                        'displayName' => '特点'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1479,
                                        'displayName' => '尺寸'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1480,
                                        'displayName' => '游戏性能'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1481,
                                        'displayName' => '分辨率'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1482,
                                        'displayName' => '尺寸（mm）'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1483,
                                        'displayName' => '工作方式'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1484,
                                        'displayName' => '重量（g）'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 1485,
                                        'displayName' => '线长（m）'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 1486,
                                        'displayName' => '颜色'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 116,
                                'name' => '键盘',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1487,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1488,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1489,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1490,
                                        'displayName' => '类型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1491,
                                        'displayName' => '型号'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1492,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1493,
                                        'displayName' => '其他特性'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1494,
                                        'displayName' => '轴体品牌'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1495,
                                        'displayName' => '轴体类型'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1496,
                                        'displayName' => '类型'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1497,
                                        'displayName' => '连接方式'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1498,
                                        'displayName' => '背光效果'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1499,
                                        'displayName' => '数字键盘'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1500,
                                        'displayName' => '游戏性能'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1501,
                                        'displayName' => '人体工学'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1502,
                                        'displayName' => '尺寸（mm）'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1503,
                                        'displayName' => '重量（g）'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1504,
                                        'displayName' => '轴体品牌'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1505,
                                        'displayName' => '轴体类型'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1506,
                                        'displayName' => '背光效果'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 1507,
                                        'displayName' => '人体工学'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 1508,
                                        'displayName' => '传输方式'
                                    ],
                                    (int) 22 => [
                                        'attribute' => (int) 1509,
                                        'displayName' => '接口'
                                    ],
                                    (int) 23 => [
                                        'attribute' => (int) 1510,
                                        'displayName' => '键盘标准'
                                    ],
                                    (int) 24 => [
                                        'attribute' => (int) 1511,
                                        'displayName' => '分辨率'
                                    ],
                                    (int) 25 => [
                                        'attribute' => (int) 1512,
                                        'displayName' => '接口'
                                    ],
                                    (int) 26 => [
                                        'attribute' => (int) 1513,
                                        'displayName' => '线长(m)'
                                    ],
                                    (int) 27 => [
                                        'attribute' => (int) 1514,
                                        'displayName' => '按键数'
                                    ],
                                    (int) 28 => [
                                        'attribute' => (int) 1515,
                                        'displayName' => '重量（g）'
                                    ],
                                    (int) 29 => [
                                        'attribute' => (int) 1516,
                                        'displayName' => '尺寸（mm）'
                                    ],
                                    (int) 30 => [
                                        'attribute' => (int) 1517,
                                        'displayName' => '工作方式'
                                    ],
                                    (int) 31 => [
                                        'attribute' => (int) 1518,
                                        'displayName' => '传输方式'
                                    ],
                                    (int) 32 => [
                                        'attribute' => (int) 1519,
                                        'displayName' => '颜色'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 117,
                                'name' => '鼠标垫',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1520,
                                        'displayName' => '材质'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1521,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1522,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1523,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1524,
                                        'displayName' => '名称'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1525,
                                        'displayName' => '种类'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1526,
                                        'displayName' => '腕托'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1527,
                                        'displayName' => '尺寸'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1528,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1529,
                                        'displayName' => '功能'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1530,
                                        'displayName' => '类型'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1531,
                                        'displayName' => '游戏性能'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1532,
                                        'displayName' => '流行元素'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 118,
                                'name' => '摄像头',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1533,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1534,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1535,
                                        'displayName' => '内置麦克风'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1536,
                                        'displayName' => '清晰度'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1537,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1538,
                                        'displayName' => '像素'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1539,
                                        'displayName' => '传感器'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1540,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1541,
                                        'displayName' => '型号'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1542,
                                        'displayName' => '麦克风'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1543,
                                        'displayName' => '视像解像度（分辨率）'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1544,
                                        'displayName' => '最大帧数'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1545,
                                        'displayName' => '接口'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1546,
                                        'displayName' => '特性'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1547,
                                        'displayName' => '驱动'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1548,
                                        'displayName' => '捕获幅面'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1549,
                                        'displayName' => '使用范围'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1550,
                                        'displayName' => '像素'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 119,
                                'name' => '手写板',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1551,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1552,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1553,
                                        'displayName' => '分辨率'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1554,
                                        'displayName' => '接口类型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1555,
                                        'displayName' => '外型尺寸'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1556,
                                        'displayName' => '感应区尺寸'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1557,
                                        'displayName' => '感应方式'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1558,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1559,
                                        'displayName' => '型号'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1560,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1561,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1562,
                                        'displayName' => '种类'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1563,
                                        'displayName' => '感应方式'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1564,
                                        'displayName' => '压感等级'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 120,
                                'name' => '硬盘盒',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1565,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1566,
                                        'displayName' => '规格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1567,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1568,
                                        'displayName' => '接口'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1569,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1570,
                                        'displayName' => '型号'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1571,
                                        'displayName' => '类型'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1572,
                                        'displayName' => '适用尺寸'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1573,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1574,
                                        'displayName' => '内部接口'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1575,
                                        'displayName' => '外部接口'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1576,
                                        'displayName' => '电源'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1577,
                                        'displayName' => '材质'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1578,
                                        'displayName' => '其他特性'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1579,
                                        'displayName' => '尺寸'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1580,
                                        'displayName' => '重量'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1581,
                                        'displayName' => '类别'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 121,
                                'name' => '插座',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1582,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1583,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1584,
                                        'displayName' => '额定电流'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1585,
                                        'displayName' => '额定电压'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1586,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1587,
                                        'displayName' => '额定功率'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1588,
                                        'displayName' => '型号'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1589,
                                        'displayName' => '输出线长度'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1590,
                                        'displayName' => '插孔数量'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1591,
                                        'displayName' => '开关'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1592,
                                        'displayName' => '功能'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1593,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1594,
                                        'displayName' => '孔位'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1595,
                                        'displayName' => '全长'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1596,
                                        'displayName' => '适用标准'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1597,
                                        'displayName' => '款式'
                                    ]
                                ]
                            ],
                            (int) 9 => [
                                'id' => (int) 122,
                                'name' => '线缆',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1598,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1599,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1600,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1601,
                                        'displayName' => '接口'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1602,
                                        'displayName' => '线长'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1603,
                                        'displayName' => '种类'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1604,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1605,
                                        'displayName' => '名称'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1606,
                                        'displayName' => '连接线'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1607,
                                        'displayName' => '线长'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1608,
                                        'displayName' => '转换器'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1609,
                                        'displayName' => '布线工程'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1610,
                                        'displayName' => '类型'
                                    ]
                                ]
                            ],
                            (int) 10 => [
                                'id' => (int) 123,
                                'name' => 'UPS电源',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1611,
                                        'displayName' => '输入电压'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1612,
                                        'displayName' => '输出'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1613,
                                        'displayName' => '额定容量'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1614,
                                        'displayName' => '类型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1615,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1616,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1617,
                                        'displayName' => '外观尺寸'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1618,
                                        'displayName' => '名称'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1619,
                                        'displayName' => 'UPS内置电池容量'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1620,
                                        'displayName' => '价格'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1621,
                                        'displayName' => '类别'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1622,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1623,
                                        'displayName' => '功能'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1624,
                                        'displayName' => 'UPS额定负载容量'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1625,
                                        'displayName' => 'UPS外置电池容量'
                                    ]
                                ]
                            ],
                            (int) 11 => [
                                'id' => (int) 124,
                                'name' => '电脑工具',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1626,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1627,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1628,
                                        'displayName' => '类型'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1629,
                                        'displayName' => '型号'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1630,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1631,
                                        'displayName' => '特性'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1632,
                                        'displayName' => '描述'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1633,
                                        'displayName' => '类型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1634,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1635,
                                        'displayName' => '描述'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1636,
                                        'displayName' => '描述'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1637,
                                        'displayName' => '尺寸'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1638,
                                        'displayName' => '电动工具'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1639,
                                        'displayName' => '手动工具'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1640,
                                        'displayName' => '附件类'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1641,
                                        'displayName' => '套装工具'
                                    ]
                                ]
                            ],
                            (int) 12 => [
                                'id' => (int) 125,
                                'name' => '游戏设备',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1642,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1643,
                                        'displayName' => '功能'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1644,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1645,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1646,
                                        'displayName' => '接口'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1647,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1648,
                                        'displayName' => '按键'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1649,
                                        'displayName' => '适用范围'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1650,
                                        'displayName' => '连接方式'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1651,
                                        'displayName' => '类型'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1652,
                                        'displayName' => '名称'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1653,
                                        'displayName' => '应用场景'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1654,
                                        'displayName' => '类别'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1655,
                                        'displayName' => '玩家等级'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1656,
                                        'displayName' => '游戏专区'
                                    ]
                                ]
                            ],
                            (int) 13 => [
                                'id' => (int) 126,
                                'name' => '电脑清洁',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1657,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1658,
                                        'displayName' => '种类'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1659,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1660,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1661,
                                        'displayName' => '其它'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1662,
                                        'displayName' => '种类'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1663,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1664,
                                        'displayName' => '产品描述'
                                    ]
                                ]
                            ],
                            (int) 14 => [
                                'id' => (int) 127,
                                'name' => '网络仪表仪器',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1665,
                                        'displayName' => '焊接工具'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1666,
                                        'displayName' => '材质'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1667,
                                        'displayName' => '网络工具'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1668,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1669,
                                        'displayName' => '气体检测'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1670,
                                        'displayName' => '电气安全测试'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1671,
                                        'displayName' => '工业测量'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1672,
                                        'displayName' => '网络测试'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1673,
                                        'displayName' => '设备巡检测试'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1674,
                                        'displayName' => '仪表配件'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1675,
                                        'displayName' => '环境测试'
                                    ]
                                ]
                            ],
                            (int) 15 => [
                                'id' => (int) 128,
                                'name' => '特殊商品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => []
                            ]
                        ],
                        'attributeValueSets' => []
                    ],
                    (int) 1 => [
                        'id' => (int) 15,
                        'name' => '文具/耗材',
                        'children_ids' => [
                            (int) 0 => (int) 129,
                            (int) 1 => (int) 130,
                            (int) 2 => (int) 131,
                            (int) 3 => (int) 132,
                            (int) 4 => (int) 133,
                            (int) 5 => (int) 134,
                            (int) 6 => (int) 135,
                            (int) 7 => (int) 136,
                            (int) 8 => (int) 137,
                            (int) 9 => (int) 138,
                            (int) 10 => (int) 139,
                            (int) 11 => (int) 140,
                            (int) 12 => (int) 141,
                            (int) 13 => (int) 142
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 129,
                                'name' => '硒鼓/墨粉',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1676,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1677,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1678,
                                        'displayName' => '型号'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1679,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1680,
                                        'displayName' => '适用机型'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1681,
                                        'displayName' => '打印量'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1682,
                                        'displayName' => '特征'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1683,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1684,
                                        'displayName' => '系列'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1685,
                                        'displayName' => '价格'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1686,
                                        'displayName' => '规格'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1687,
                                        'displayName' => '属性'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1688,
                                        'displayName' => '支数'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 130,
                                'name' => '墨盒',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1689,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1690,
                                        'displayName' => '容量'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1691,
                                        'displayName' => '打印量'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1692,
                                        'displayName' => '其他特征'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1693,
                                        'displayName' => '适用机型'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1694,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1695,
                                        'displayName' => '系列'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1696,
                                        'displayName' => '型号'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1697,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1698,
                                        'displayName' => '价格'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1699,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1700,
                                        'displayName' => '规格'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1701,
                                        'displayName' => '属性'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 131,
                                'name' => '色带',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1702,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1703,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1704,
                                        'displayName' => '带架规格(mmxm)'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1705,
                                        'displayName' => '适用机型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1706,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1707,
                                        'displayName' => '型号'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1708,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1709,
                                        'displayName' => '接口方式'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1710,
                                        'displayName' => '带芯规格(mmxm)'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1711,
                                        'displayName' => '价格'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1712,
                                        'displayName' => '适用范围'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1713,
                                        'displayName' => '类型'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1714,
                                        'displayName' => '支数'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 132,
                                'name' => '纸类',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1715,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1716,
                                        'displayName' => '类型'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1717,
                                        'displayName' => '复印纸规格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1718,
                                        'displayName' => '其它特征'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1719,
                                        'displayName' => '包装'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1720,
                                        'displayName' => '规格'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1721,
                                        'displayName' => '型号'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1722,
                                        'displayName' => '类型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1723,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1724,
                                        'displayName' => '打印纸规格'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1725,
                                        'displayName' => '克重'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1726,
                                        'displayName' => '优选服务'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 133,
                                'name' => '办公文具',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1727,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1728,
                                        'displayName' => '类型'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1729,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1730,
                                        'displayName' => '优选服务'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 134,
                                'name' => '学生文具',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1731,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1732,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1733,
                                        'displayName' => '优选服务'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1734,
                                        'displayName' => '类型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1735,
                                        'displayName' => '品牌'
                                    ]
                                ]
                            ],
                            (int) 6 => [
                                'id' => (int) 135,
                                'name' => '文件管理',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1736,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1737,
                                        'displayName' => '类型'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1738,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1739,
                                        'displayName' => '数量'
                                    ]
                                ]
                            ],
                            (int) 7 => [
                                'id' => (int) 136,
                                'name' => '财会用品',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1740,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1741,
                                        'displayName' => '类别'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1742,
                                        'displayName' => '价格'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1743,
                                        'displayName' => '优选服务'
                                    ]
                                ]
                            ],
                            (int) 8 => [
                                'id' => (int) 137,
                                'name' => '本册/便签',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1744,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1745,
                                        'displayName' => '封面硬度'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1746,
                                        'displayName' => '数量'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1747,
                                        'displayName' => '幅面规格'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1748,
                                        'displayName' => '装订方式'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1749,
                                        'displayName' => '封面材质'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1750,
                                        'displayName' => '流行元素'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1751,
                                        'displayName' => '优选服务'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1752,
                                        'displayName' => '类型'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1753,
                                        'displayName' => '页数'
                                    ]
                                ]
                            ],
                            (int) 9 => [
                                'id' => (int) 138,
                                'name' => '计算器',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1754,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1755,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1756,
                                        'displayName' => '电源类型'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1757,
                                        'displayName' => '显示位数'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1758,
                                        'displayName' => '优选服务'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1759,
                                        'displayName' => '类型'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1760,
                                        'displayName' => '适配电池类型'
                                    ]
                                ]
                            ],
                            (int) 10 => [
                                'id' => (int) 139,
                                'name' => '激光笔',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1761,
                                        'displayName' => '功能'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1762,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1763,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1764,
                                        'displayName' => '价格范围'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1765,
                                        'displayName' => '类别'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1766,
                                        'displayName' => '有效距离'
                                    ]
                                ]
                            ],
                            (int) 11 => [
                                'id' => (int) 140,
                                'name' => '笔类',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1767,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1768,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1769,
                                        'displayName' => '数量'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1770,
                                        'displayName' => '笔杆材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1771,
                                        'displayName' => '书写粗细'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1772,
                                        'displayName' => '支数'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1773,
                                        'displayName' => '优选服务'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1774,
                                        'displayName' => '类型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1775,
                                        'displayName' => '笔芯颜色'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1776,
                                        'displayName' => '闭合方式'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1777,
                                        'displayName' => '产品直径（mm)'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1778,
                                        'displayName' => '笔杆材质'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1779,
                                        'displayName' => '笔身尺寸（mm)'
                                    ],
                                    (int) 13 => [
                                        'attribute' => (int) 1780,
                                        'displayName' => '吸墨器类型'
                                    ],
                                    (int) 14 => [
                                        'attribute' => (int) 1781,
                                        'displayName' => '笔尖材质'
                                    ],
                                    (int) 15 => [
                                        'attribute' => (int) 1782,
                                        'displayName' => '产品类别'
                                    ],
                                    (int) 16 => [
                                        'attribute' => (int) 1783,
                                        'displayName' => '笔尖规格（mm)'
                                    ],
                                    (int) 17 => [
                                        'attribute' => (int) 1784,
                                        'displayName' => '净重（kg）'
                                    ],
                                    (int) 18 => [
                                        'attribute' => (int) 1785,
                                        'displayName' => '颜色'
                                    ],
                                    (int) 19 => [
                                        'attribute' => (int) 1786,
                                        'displayName' => '材质'
                                    ],
                                    (int) 20 => [
                                        'attribute' => (int) 1787,
                                        'displayName' => '商品尺寸'
                                    ],
                                    (int) 21 => [
                                        'attribute' => (int) 1788,
                                        'displayName' => '型号'
                                    ]
                                ]
                            ],
                            (int) 12 => [
                                'id' => (int) 141,
                                'name' => '画具画材',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1789,
                                        'displayName' => '数量'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1790,
                                        'displayName' => '优选服务'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1791,
                                        'displayName' => '类型'
                                    ]
                                ]
                            ],
                            (int) 13 => [
                                'id' => (int) 142,
                                'name' => '刻录碟片/附件',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1792,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1793,
                                        'displayName' => '名称'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1794,
                                        'displayName' => '类型'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1795,
                                        'displayName' => '容量'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1796,
                                        'displayName' => '速度'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1797,
                                        'displayName' => '记录时间'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1798,
                                        'displayName' => '包装规格'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1799,
                                        'displayName' => '其它特性'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1800,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1801,
                                        'displayName' => '类型'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1802,
                                        'displayName' => '数量'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1803,
                                        'displayName' => '价格'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1804,
                                        'displayName' => '特殊属性'
                                    ]
                                ]
                            ]
                        ],
                        'attributeValueSets' => []
                    ]
                ]
            ],
            (int) 4 => [
                'id' => (int) 5,
                'name' => '玩具乐器',
                'children_ids' => [
                    (int) 0 => (int) 16,
                    (int) 1 => (int) 17,
                    (int) 2 => (int) 18
                ],
                'children' => [
                    (int) 0 => [
                        'id' => (int) 16,
                        'name' => '动漫玩具',
                        'children_ids' => [
                            (int) 0 => (int) 143,
                            (int) 1 => (int) 144,
                            (int) 2 => (int) 145
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 143,
                                'name' => '电影周边',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1805,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1806,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1807,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1808,
                                        'displayName' => '产品净尺寸（长*宽*高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1809,
                                        'displayName' => '带包装尺寸（长*宽*高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1810,
                                        'displayName' => '角色'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1811,
                                        'displayName' => '材质'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1812,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1813,
                                        'displayName' => '系列'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1814,
                                        'displayName' => '分类'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1815,
                                        'displayName' => '适用年龄'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1816,
                                        'displayName' => '适用性别'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 144,
                                'name' => '卡通周边',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1817,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1818,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1819,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1820,
                                        'displayName' => '产品净尺寸（长*宽*高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1821,
                                        'displayName' => '带包装尺寸（长*宽*高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1822,
                                        'displayName' => '材质'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1823,
                                        'displayName' => '角色'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1824,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1825,
                                        'displayName' => '适用年龄'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1826,
                                        'displayName' => '分类'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1827,
                                        'displayName' => '适用性别'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1828,
                                        'displayName' => '系列'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 145,
                                'name' => '网游周边',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1829,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1830,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1831,
                                        'displayName' => '带包装尺寸（长*宽*高）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1832,
                                        'displayName' => '产品净尺寸（长*宽*高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1833,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1834,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1835,
                                        'displayName' => '材质'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1836,
                                        'displayName' => '分类'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1837,
                                        'displayName' => '适用年龄'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1838,
                                        'displayName' => '系列'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1839,
                                        'displayName' => '系列'
                                    ]
                                ]
                            ]
                        ],
                        'attributeValueSets' => []
                    ],
                    (int) 1 => [
                        'id' => (int) 17,
                        'name' => '毛绒布艺',
                        'children_ids' => [
                            (int) 0 => (int) 146,
                            (int) 1 => (int) 147
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 146,
                                'name' => '毛绒/布艺',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1840,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1841,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1842,
                                        'displayName' => '尺寸'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1843,
                                        'displayName' => '类型'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1844,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1845,
                                        'displayName' => '产品净尺寸（长*宽*高）'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1846,
                                        'displayName' => '带包装尺寸（长*宽*高）'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1847,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1848,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1849,
                                        'displayName' => '适用年龄'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1850,
                                        'displayName' => '填充材质'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1851,
                                        'displayName' => '系列'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 147,
                                'name' => '靠垫/抱枕',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1852,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1853,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1854,
                                        'displayName' => '尺寸'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1855,
                                        'displayName' => '产品净尺寸（长*宽*高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1856,
                                        'displayName' => '带包装尺寸（长*宽*高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1857,
                                        'displayName' => '材质'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1858,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1859,
                                        'displayName' => '造型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1860,
                                        'displayName' => '分类'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1861,
                                        'displayName' => '填充物'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1862,
                                        'displayName' => '面料'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1863,
                                        'displayName' => '适用年龄'
                                    ]
                                ]
                            ]
                        ],
                        'attributeValueSets' => []
                    ],
                    (int) 2 => [
                        'id' => (int) 18,
                        'name' => '适用年龄',
                        'children_ids' => [
                            (int) 0 => (int) 148,
                            (int) 1 => (int) 149,
                            (int) 2 => (int) 150,
                            (int) 3 => (int) 151,
                            (int) 4 => (int) 152,
                            (int) 5 => (int) 153
                        ],
                        'children' => [
                            (int) 0 => [
                                'id' => (int) 148,
                                'name' => '0-6个月',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1864,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1865,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1866,
                                        'displayName' => '材质'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1867,
                                        'displayName' => '包装尺寸（长*宽*高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1868,
                                        'displayName' => '包装'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1869,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1870,
                                        'displayName' => '材质'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1871,
                                        'displayName' => '类型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1872,
                                        'displayName' => '功能'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1873,
                                        'displayName' => '功能特点'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1874,
                                        'displayName' => '包装类型'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1875,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 1 => [
                                'id' => (int) 149,
                                'name' => '6-12个月',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1876,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1877,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1878,
                                        'displayName' => '包装'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1879,
                                        'displayName' => '材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1880,
                                        'displayName' => '包装尺寸（长*宽*高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1881,
                                        'displayName' => '包装'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1882,
                                        'displayName' => '类型'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1883,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1884,
                                        'displayName' => '功能'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1885,
                                        'displayName' => '材质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1886,
                                        'displayName' => '功能特点'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1887,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 2 => [
                                'id' => (int) 150,
                                'name' => '1-3岁',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1888,
                                        'displayName' => '价格'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1889,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1890,
                                        'displayName' => '包装'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1891,
                                        'displayName' => '材质'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1892,
                                        'displayName' => '包装尺寸（长*宽*高）'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1893,
                                        'displayName' => '类型'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1894,
                                        'displayName' => '功能'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1895,
                                        'displayName' => '包装'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1896,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1897,
                                        'displayName' => '材质'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1898,
                                        'displayName' => '功能特点'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1899,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 3 => [
                                'id' => (int) 151,
                                'name' => '3-6岁',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1900,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1901,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1902,
                                        'displayName' => '包装尺寸（长*宽*高）'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1903,
                                        'displayName' => '性别'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1904,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1905,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1906,
                                        'displayName' => '功能'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1907,
                                        'displayName' => '类型'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1908,
                                        'displayName' => '包装类型'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1909,
                                        'displayName' => '功能特点'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1910,
                                        'displayName' => '分类'
                                    ]
                                ]
                            ],
                            (int) 4 => [
                                'id' => (int) 152,
                                'name' => '6-14岁',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1911,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1912,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1913,
                                        'displayName' => '性别'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1914,
                                        'displayName' => '包装尺寸（长*宽*高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1915,
                                        'displayName' => '功能'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1916,
                                        'displayName' => '类型'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1917,
                                        'displayName' => '性别'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1918,
                                        'displayName' => '材质'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1919,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1920,
                                        'displayName' => '分类'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1921,
                                        'displayName' => '功能特点'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1922,
                                        'displayName' => '包装类型'
                                    ]
                                ]
                            ],
                            (int) 5 => [
                                'id' => (int) 153,
                                'name' => '14岁以上',
                                'children_ids' => [],
                                'children' => [],
                                'attributeValueSets' => [
                                    (int) 0 => [
                                        'attribute' => (int) 1923,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 1 => [
                                        'attribute' => (int) 1924,
                                        'displayName' => '价格'
                                    ],
                                    (int) 2 => [
                                        'attribute' => (int) 1925,
                                        'displayName' => '性别'
                                    ],
                                    (int) 3 => [
                                        'attribute' => (int) 1926,
                                        'displayName' => '包装尺寸（长*宽*高）'
                                    ],
                                    (int) 4 => [
                                        'attribute' => (int) 1927,
                                        'displayName' => '材质'
                                    ],
                                    (int) 5 => [
                                        'attribute' => (int) 1928,
                                        'displayName' => '类型'
                                    ],
                                    (int) 6 => [
                                        'attribute' => (int) 1929,
                                        'displayName' => '功能'
                                    ],
                                    (int) 7 => [
                                        'attribute' => (int) 1930,
                                        'displayName' => '性别'
                                    ],
                                    (int) 8 => [
                                        'attribute' => (int) 1931,
                                        'displayName' => '品牌'
                                    ],
                                    (int) 9 => [
                                        'attribute' => (int) 1932,
                                        'displayName' => '分类'
                                    ],
                                    (int) 10 => [
                                        'attribute' => (int) 1933,
                                        'displayName' => '功能特点'
                                    ],
                                    (int) 11 => [
                                        'attribute' => (int) 1934,
                                        'displayName' => '包装类型'
                                    ],
                                    (int) 12 => [
                                        'attribute' => (int) 1935,
                                        'displayName' => '包装类型sss'
                                    ]
                                ]
                            ]
                        ],
                        'attributeValueSets' => []
                    ]
                ]
            ]
        ];
    }
}