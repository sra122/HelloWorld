<?php
namespace HelloWorld\Migrations;

use HelloWorld\Helper\SettingsHelper;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;
use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;
use Plenty\Plugin\Templates\Twig;

/**
 * Class CreateOrderReferrer
 */
class GetOrderReferrer
{
    /**
     * @var SettingsHelper
     */
    private $settingsHelper;

    /**
     * GetOrderReferrer constructor.
     * @param SettingsHelper $settingsHelper
     */
    public function __construct(SettingsHelper $settingsHelper)
    {
        $this->settingsHelper = $settingsHelper;
    }

    /**
     * @param OrderReferrerRepositoryContract $orderReferrerRepo
     */
    public function run()
    {
        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList) === 'PandaBlack') {
                $pandaBlackReferrerID[$key] = $orderReferrerList;
            }
        }

        if(empty(array_filter($pandaBlackReferrerID))) {

            $orderReferrer = $orderReferrerRepo->create([
                'isEditable'    => true,
                'backendName' => 'PandaBlack',
                'name'        => 'PandaBlack',
                'origin'      => 'plenty',
                'isFilterable' => true
            ]);

            return $orderReferrer;
        }

    }
}