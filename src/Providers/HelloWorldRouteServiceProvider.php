<?php

namespace HelloWorld\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\Routing\ApiRouter;

class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router, ApiRouter $api)
    {
        $router->get('hello', 'HelloWorld\Controllers\ContentController@sayHello');
        $router->get('update', 'HelloWorld\Controllers\UpdateItemController@updateItems');
        $router->get('category', 'HelloWorld\Controllers\CategoryController@saveCorrelation');
        $router->get('referrer', 'HelloWorld\Controllers\ReferrerController@getListOfOrderReferrer');
        $router->get('create-referrer', 'HelloWorld\Controllers\ReferrerController@createOrderReferrer');

        $api->version(['v1'], ['middleware' => ['oauth']], function ($router) {
            $router->get('markets/panda-black/parent-categories', 'HelloWorld\Controllers\CategoryController@all');
            $router->get('markets/panda-black/parent-categories/{id}', 'HelloWorld\Controllers\CategoryController@get');
            $router->get('markets/panda-black/vendor-categories', 'HelloWorld\Controllers\JdCategoriesController@listOfCategories');
            $router->get('markets/panda-black/correlations', 'HelloWorld\Controllers\CategoryController@getCorrelation');
            $router->post('markets/panda-black/correlations', 'HelloWorld\Controllers\CategoryController@saveCorrelation');
            $router->delete('markets/panda-black/correlations', 'HelloWorld\Controllers\CategoryController@deleteAllCorrelations');
            $router->delete('markets/panda-black/correlation/{id}', 'HelloWorld\Controllers\CategoryController@deleteCorrelation');
            $router->get('markets/panda-black/attributes', 'HelloWorld\Controllers\AttributesController@getAttributes');
            $router->post('markets/panda-black/attribute', 'HelloWorld\Controllers\AttributesController@createAttribute');
            $router->post('markets/panda-black/attribute-mapping', 'HelloWorld\Controllers\AttributesController@attributeMapping');
            $router->get('markets/panda-black/login-url', 'HelloWorld\Controllers\AuthController@getLoginUrl');
        });
    }
}