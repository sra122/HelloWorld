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
}
