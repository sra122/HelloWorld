<?php
namespace HelloWorld\Migrations;

use HelloWorld\Helper\SettingsHelper;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;
use HelloWorld\Models\OrderReferrer;
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
    public function run(OrderReferrerRepositoryContract $orderReferrerRepo, Migrate $migrate, Twig $twig)
    {

        /*$orderReferrer = $orderReferrerRepo->create([
                                                    'isEditable'    => true,
                                                    'backendName' => 'PandaBlack',
                                                    'name'        => 'PandaBlack',
                                                    'origin'      => 'plenty',
                                                    'isFilterable' => true
                                                  ]);

        $orderReferr = array(
            'orderRef' => $orderReferrer,
        );


        $retries = 0;

        do
        {
            // due to the fact that CreateSettingsTable migration just run, it could be that DynamoDB needs some time to create the table, so we try again
            //$status = $this->settingsHelper->save(SettingsHelper::SETTINGS_ORDER_REFERRER, $orderReferrer->id);

            $status = $migrate->createTable(OrderReferrer::class);

            $database = pluginApp(DataBase::class);

            $orderRef = pluginApp(OrderReferrer::class);

            $orderRef->id = $orderReferrer->id;

            $database->save($orderRef);

            if($status === false)
            {
                sleep(5);
            }
        }
        while($status === false && ++$retries < 3);

        return $twig->render('HelloWorld::content.ReferrerInfo', $orderReferr);*/
    }
}