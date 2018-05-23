<?php
namespace HelloWorld;
use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;
/**
 * Class ElasticExportSchuheDEServiceProvider
 * @package ElasticExportSchuheDE
 */
class ElasticExportHelloWorldServiceProvider extends DataExchangeServiceProvider
{
    /**
     * Abstract function for registering the service provider.
     */
    public function register()
    {
    }
    /**
     * Adds the export format to the export container.
     *
     * @param ExportPresetContainer $container
     */
    public function exports(ExportPresetContainer $container)
    {
        $container->add(
            'HelloWorld-Plugin',
            'HelloWorld\ResultField\HelloWorld',
            'HelloWorld\Generator\HelloWorld',
            '',
            true,
            true
        );
    }
}