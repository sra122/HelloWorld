<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Category\Models\Category;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\Market\Settings\Factories\SettingsCorrelationFactory;
use Plenty\Modules\Market\Credentials\Contracts\CredentialsRepositoryContract;
use Plenty\Modules\Category\Contracts\CategoryRepositoryContract;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
/**
 * Class CategoryController
 * @package HelloWorld\Controllers
 */
class CategoryController extends Controller
{
    /**
     * Get categories.
     *
     * @param Request $request
     *
     * @return Category[]
     */
    public $categoriesResponse = [];

    public function all(Request $request)
    {
        $with = $request->get('with', []);

        if (!is_array($with) && strlen($with)) {
            $with = explode(',', $with);
        }

        $categoryRepo = pluginApp(CategoryRepositoryContract::class);

        $categoryInfo = $categoryRepo->search($categoryId = null, 1, 50, $with, ['lang' => $request->get('lang', 'de')])->getResult();

        foreach($categoryInfo as $category)
        {
            if($category->parentCategoryId === null) {
                $child = [];
                foreach($categoryInfo as $key => $childCategory) {
                    if($childCategory->parentCategoryId === $category->id) {
                        array_push($child, $childCategory);
                        //unset($categoryInfo[$key]);
                    }
                }
                $category->child = $child;
            }
        }
        return $categoryInfo;
    }


    public function get(Request $request, Response $response, $id)
    {
        $with = $request->get('with', []);

        if (!is_array($with) && strlen($with)) {
            $with = explode(',', $with);
        }

        $categoryRepo = pluginApp(CategoryRepositoryContract::class);

        $category = $categoryRepo->get($id, $request->get('lang', 'de'));

        $plentyCategory = $category;

        $childCategoryName = $category->details[0]->name;

        while($category->parentCategoryId !== null) {
            $category = $categoryRepo->get($category->parentCategoryId);
            $category->details[0]->name = $category->details[0]->name . ' << ' . $childCategoryName ;
            $childCategoryName = $category->details[0]->name;
        }

        $parentCategoryPath = $category->details[0]->name;

        $plentyCategory->details[0]->name = $parentCategoryPath;

        return $response->json($plentyCategory);
    }

    public function getCorrelations()
    {
        $filters = [
            'marketplaceId' => 'HelloWorld',
            'type' => 'category'
        ];

        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);

        $correlationsData = $settingsCorrelationFactory->search($filters, 1, 50);

        return $correlationsData;
    }

    public function updateCorrelation(Request $request)
    {
        $correlationData = $request->get('correlations', []);
        $id = $request->get('id', []);

        $settingsRepo = pluginApp(SettingsRepositoryContract::class);

        $settingsRepo->update($correlationData, $id);

        return $id;
    }

    public function saveCorrelation(Request $request)
    {
        $data = $request->get('correlations', []);

        $settingsRepo = pluginApp(SettingsRepositoryContract::class);

        $response = $settingsRepo->create('HelloWorld', 'category', $data);

        return $response;
    }

    public function deleteAllCorrelations()
    {
        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);

        $settingsCorrelationFactory->deleteAll('HelloWorld', 'category');

        $settingsCorrelationFactory->deleteAll('HelloWorld', 'attribute');

        return true;
    }

    public function deleteCorrelation($id)
    {
        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);

        $correlationDetails = $settingsCorrelationFactory->get($id);

        $attributesCollection = $correlationDetails->settings[1];

        foreach($attributesCollection as $attributeMapping) {
            $settingsCorrelationFactory->delete($attributeMapping->id);
        }

        $settingsCorrelationFactory->delete($id);

        return $id;
    }

    public function getProperties()
    {
        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);

        $properties = $settingsCorrelationFactory->find('HelloWorld', 'property');

        return $properties;
    }

    /*public function getPBCategories()
    {
        $libCall = pluginApp(LibraryCallContract::class);
        $request = pluginApp(Request::class);

        $pbCategories = $libCall->call(
            'HelloWorld::pandaBlack_categories', ['auth_code' => $request->get('autorize_code')]
        );

        $pbCategoryTree = [];
        foreach($pbCategories as $pbCategory)
        {
            if($pbCategory->parent_id === 0) {
                $pbCategoryTree[] = [
                    'id' => $pbCategory->id,
                    'name' => $pbCategory->name,
                    'children' => ''
                ];
            }
        }
    }

    private function getPBChildCategories($pbCategories, $parentId)
    {
        $pbChildCategoryTree = [];
        foreach($pbCategories as $pbCategory)
        {
            if($pbCategory->id === $parentId) {
                $pbChildCategoryTree[] = [
                  'id' => $pbCategory->id,
                  'name' => $pbCategory->id,
                  'children' => ''
                ];
            }
        }
    }*/


    public function getPBCategories()
    {
        $libCall = pluginApp(LibraryCallContract::class);

        $propertiesRepo = pluginApp(SettingsRepositoryContract::class);
        $properties = $propertiesRepo->find('HelloWorld', 'property');

        $pbCategories = [];

        foreach($properties as $key => $property)
        {
            if(isset($property->settings['pbToken'])) {

                if($property->settings['pbToken']['expires_in'] > time()) {

                    $response = $libCall->call(
                        'HelloWorld::pandaBlack_categories',
                        [
                            'token' => $property->settings['pbToken']['token'],
                        ]
                    );
                    array_push($pbCategories, $response['Response']);
                } else if($property->settings['pbToken']['refresh_token_expires_in'] > time()) {

                    $response = $libCall->call(
                        'HelloWorld::pandaBlack_categories',
                        [
                            'token' => $property->settings['pbToken']['refresh_token'],
                        ]
                    );
                    array_push($pbCategories, $response['Response']);
                }

                break;
            }
        }

        /*$pbCategories = [
            '0' => [
                'id' => 1,
                'name' => 'First',
                'parent_id' => 0
            ],
            '1' => [
                'id' => 2,
                'name' => 'Child1',
                'parent_id' => 1
            ],
            '2' => [
                'id' => 3,
                'name' => 'Child2',
                'parent_id' => 2
            ],
            '3' => [
                'id' => 4,
                'name' => 'Child3',
                'parent_id' => 3
            ],
            '4' => [
                'id' => 5,
                'name' => 'Child4',
                'parent_id' => 0
            ]
        ];*/

        $pbCategoryTree = [];
        foreach ($pbCategories[0] as $key => $pbCategory) {
            if ($pbCategory['parent_id'] === 0) {
                $pbCategoryTree[] = [
                    'id' => (int)$key,
                    'name' => $pbCategory->name,
                    'parentId' => $pbCategory->parent_id,
                    'children' => $this->getPBChildCategories($pbCategories, (int)$key),
                ];
            }
        }

        return json_encode($pbCategoryTree);
    }

    private function getPBChildCategories($pbCategories, $parentId)
    {
        $pbChildCategoryTree = [];
        foreach ($pbCategories as $key => $pbCategory) {
            if ($pbCategory->parent_id === $parentId) {
                $pbChildCategoryTree[] = [
                    'id' => (int)$key,
                    'name' => $pbCategory->name,
                    'children' => $this->getPBChildCategories($pbCategories, (int)$key)
                ];
            }
        }

        return $pbChildCategoryTree;
    }

    public function getPBAttributes()
    {
        $attributeValueSet = [
            '0' => [
                'attributeId' => 12,
                'name' => 'weight',
                'required' => true,
                'values' => ['gm', 'kg']
            ],
            '1' => [
                'attributeId' => 13,
                'name' => 'Brand',
                'required' => false,
                'values' => ['Test']
            ]
        ];

        return json_encode($attributeValueSet);
    }

    public function saveCronTime()
    {
        $settingRepo = pluginApp(SettingsRepositoryContract::class);

        $crons = $settingRepo->search(['marketplaceId' => 'HelloWorld', 'type' => 'property'], 1, 100)->toArray();

        foreach($crons['entries'] as $key => $cron) {
            if(isset($cron['settings']['pbItemCron'])) {
                $cronData = [
                    'pbItemCron' => [
                        'pastCronTime' => $cron['settings']['pbItemCron']['presentCronTime'],
                        'presentCronTime' => time()
                    ]
                ];
                $response = $settingRepo->update($cronData, $key);
                return $response;
            }
        }
        $cronData = [
            'pbItemCron' => [
                'pastCronTime' => null,
                'presentCronTime' => time()
            ]
        ];
        $response = $settingRepo->create('HelloWorld', 'property', $cronData);
        return $response;
    }


    public function getCategories()
    {
        $libCall = pluginApp(LibraryCallContract::class);

        $propertiesRepo = pluginApp(SettingsRepositoryContract::class);
        $properties = $propertiesRepo->find('HelloWorld', 'property');

        foreach($properties as $key => $property)
        {
            if(isset($property->settings['pbToken'])) {
                if($property->settings['pbToken']['expires_in'] > time()) {

                    $response = $libCall->call(
                        'HelloWorld::pandaBlack_categories',
                        [
                            'token' => $property->settings['pbToken']['token'],
                        ]
                    );
                    //return $response->Response;
                    $pbCategories = $response['Response'];
                } else if($property->settings['pbToken']['refresh_token_expires_in'] > time()) {

                    $response = $libCall->call(
                        'HelloWorld::pandaBlack_categories',
                        [
                            'token' => $property->settings['pbToken']['refresh_token'],
                        ]
                    );
                    //return $response->Response;
                    $pbCategories = $response['Response'];
                }

                break;
            }
        }

        if(isset($pbCategories)) {

            return $pbCategories[1]['name'];
        }
    }
}
