<?php

namespace HelloWorld\Providers;


use HelloWorld\Crons\ItemExportCron;
use Plenty\Plugin\ServiceProvider;
use HelloWorld\Contracts\CategoryRepositoryContract;
use HelloWorld\Repositories\CategoryRepository;
use Plenty\Modules\Cron\Services\CronContainer;

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

    public function boot(CronContainer $container)
    {
        $container->add(CronContainer::HOURLY, ItemExportCron::class);
    }
}