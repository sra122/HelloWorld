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
     * @param Twig $twig
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

        return $categoryInfo;
    }
}
