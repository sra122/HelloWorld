<?php
namespace HelloWorld\Migrations;

use HelloWorld\Helper\SettingsHelper;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

/**
 * Class GetOrderReferrer
 * @package HelloWorld\Migrations
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
    public function run(OrderReferrerRepositoryContract $orderReferrerRepo)
    {
        $orderReferrer = $orderReferrerRepo->create([
                                                    'isEditable'    => false,
                                                    'backendName' => 'PandaBlack',
                                                    'name'        => 'PandaBlack',
                                                    'origin'      => 'plenty',
                                                    'isFilterable' => true
                                                ], 66.00);
        $retries = 0;

        do
        {
            // due to the fact that CreateSettingsTable migration just run, it could be that DynamoDB needs some time to create the table, so we try again
            $status = $this->settingsHelper->save(SettingsHelper::SETTINGS_ORDER_REFERRER, $orderReferrer->id);

            if($status === false)
            {
                sleep(5);
            }
        }
        while($status === false && ++$retries < 3);
    }
}