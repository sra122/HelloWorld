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

        $api->version(['v1'], ['middleware' => ['oauth']], function ($router) {
            $router->get('markets/panda-black/parent-categories', 'HelloWorld\Controllers\CategoryController@all');
            $router->get('markets/panda-black/parent-categories/{id}', 'HelloWorld\Controllers\CategoryController@get');
            $router->get('markets/panda-black/vendor-categories', 'HelloWorld\Controllers\JdCategoriesController@listOfCategories');
        });
    }
}