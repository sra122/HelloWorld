<?php

namespace HelloWorld\Controllers;

use HelloWorld\Contracts\CategoryRepositoryContract;
use Plenty\Modules\Category\Models\Category;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;
use Plenty\Plugin\Templates\Twig;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\Market\Settings\Factories\SettingsCorrelationFactory;

/**
 * Class CategoryController
 *
 * @package Etsy\Controllers
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

        /** @var CategoryRepositoryContract $categoryRepo */
        $categoryRepo = pluginApp(CategoryRepositoryContract::class);

        $categoryInfo = array(
            'categoryDetails' => $categoryRepo->all(['lang' => $request->get('lang', 'de')], $with)
        );

        return $categoryInfo;
    }


    public function get(Request $request, Response $response, int $id)
    {
        $with = $request->get('with', []);

        if (!is_array($with) && strlen($with)) {
            $with = explode(',', $with);
        }

        /** @var CategoryRepositoryContract $categoryRepo */
        $categoryRepo = pluginApp(CategoryRepositoryContract::class);

        $category = $categoryRepo->get($id, $request->get('lang', 'de'), $with);

        return $response->json($category);
    }

    public function saveCorrelation(Request $request, Response $response, Twig $twig)
    {
        $data = $request->get('correlations', []);
        //$data = $request->get('correlations', []);

        $settingsRepo = pluginApp(SettingsRepositoryContract::class);
        $settingsCorrelationFactory = pluginApp(SettingsCorrelationFactory::class);

        /*$settings = $settingsRepo->create('HelloWorld', 'category', [
            'id'       => 40,
            'parentId' => 39,
            'name'     => 'Aufnäher',
            'children' => [],
            'isLeaf'   => false,
            'level'    => 2,
            'path'     => 'accessories.patches_and_pins.patches'
        ]);

        $settingsCorrelationFactory->type('category')
                                    ->createRelation($settings->id, 20);*/

        //$data = $settingsCorrelationFactory->type('category')
                                            //->all('HelloWorld');
        $templateData = array(
            'completeData' => $data,
            'name' => 'Test'
        );

        return $twig->render('HelloWorld::content.CategoryList', $templateData);
    }
}
