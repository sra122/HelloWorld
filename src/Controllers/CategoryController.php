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
use Plenty\Modules\Market\Credentials\Contracts\CredentialsRepositoryContract;

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

    protected  $testArray = [];
    public function all(Request $request, Twig $twig)
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


        //return $twig->render('HelloWorld::content.CategoryList', $categoryInfo);

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

        array_push($testArray, $data);

        $templateData = array(
            'completeData' => $testArray,
            'name' => 'Test',
            'request' => $request
        );

        return $twig->render('HelloWorld::content.CategoryList', $templateData);;
    }
}
