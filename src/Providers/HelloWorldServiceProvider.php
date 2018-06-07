<?php

namespace HelloWorld\Providers;


use Plenty\Plugin\ServiceProvider;
use HelloWorld\Contracts\CategoryRepositoryContract;
use HelloWorld\Repositories\CategoryRepository;

class HelloWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
        $this->getApplication()->bind(CategoryRepositoryContract::class, CategoryRepository::class);
    }
}