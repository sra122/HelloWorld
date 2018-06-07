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
     * Get a category.
     *
     * @param Request  $request
     * @param Response $response
     * @param int      $id
     *
     * @return Response
     */
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


    /**
     * Get categories.
     *
     * @param Request $request
     *
     * @return Category[]
     */
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

        return $twig->render('HelloWorld::content.TopItems', $categoryInfo);
    }
}
