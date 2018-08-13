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

    public function getCorrelation(Twig $twig)
    {
        /*$settingsCorrelationFactory = pluginApp(SettingsCorrelationFactory::class);

        $testValues = $settingsCorrelationFactory->type('category')->all('HelloWorld');

        /*$templateData = array(
            'relation' => $testValues
        );*/

        $filters = [
            'marketplaceId' => 'HelloWorld',
        ];

        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);

        $testValues = $settingsCorrelationFactory->search($filters, 1, 50);

        return $testValues;
    }

    public function saveCorrelation(Request $request, Response $response, Twig $twig)
    {
        $data = $request->get('correlations', []);

        $settingsRepo = pluginApp(SettingsRepositoryContract::class);

        return $data;

        /*$test = $settingsRepo->create('HelloWorld', 'category', $data);

        return $test;*/
    }

    public function deleteAllCorrelation()
    {
        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);

        $settingsCorrelationFactory->deleteAll('HelloWorld', 'category');
    }
}
