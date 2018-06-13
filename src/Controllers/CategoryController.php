<?php

namespace HelloWorld\Controllers;

use HelloWorld\Contracts\CategoryRepositoryContract;
use Plenty\Modules\Category\Models\Category;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;
use Plenty\Plugin\Templates\Twig;

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
        $templateData = array(
            'completeData' => $data,
            'name' => 'Test',
            'post_data' => $_POST
        );

        return $twig->render('HelloWorld::content.CategoryList', $templateData);
    }
}
