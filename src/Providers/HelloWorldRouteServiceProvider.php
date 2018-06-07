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

            /** Taxonomies */
            $router->get('markets/etsy/taxonomies', [
                'uses'       => 'Etsy\Controllers\TaxonomyController@all'
            ]);

            $router->post('markets/etsy/taxonomies/correlations', [
                'uses'       => 'Etsy\Controllers\TaxonomyController@saveCorrelations'
            ]);

            $router->get('markets/etsy/taxonomies/correlations', [
                'uses'       => 'Etsy\Controllers\TaxonomyController@getCorrelations'
            ]);

            $router->get('markets/etsy/taxonomies/{id}', [
                'uses'       => 'Etsy\Controllers\TaxonomyController@get'
            ]);

            /** Categories */
            $router->get('markets/etsy/categories', [
                'uses'       => 'Etsy\Controllers\CategoryController@all'
            ]);

            $router->get('markets/etsy/categories/{id}', [
                'uses'       => 'Etsy\Controllers\CategoryController@get'
            ]);
        });
    }
}