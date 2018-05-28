<?php

namespace HelloWorld\Helper;

use Plenty\Modules\Plugin\DynamoDb\Contracts\DynamoDbRepositoryContract;

/**
 * Class SettingsHelper
 */
class SettingsHelper
{
    const PLUGIN_NAME = 'HelloWorld';

    const TABLE_NAME = 'settings';

    const SETTINGS_ORDER_REFERRER = 'order_referrer';

    /**
     * @var DynamoDbRepositoryContract
     */
    private $dynamoDbRepo;

    /**
     * @param DynamoDbRepositoryContract $dynamoDbRepository
     */
    public function __construct(DynamoDbRepositoryContract $dynamoDbRepository)
    {
        $this->dynamoDbRepo = $dynamoDbRepository;
    }

    /**
     * Save settings to database.
     *
     * @param string $name
     * @param string $value
     *
     * @return bool
     */
    public function save($name, $value)
    {
        return $this->dynamoDbRepo->putItem(self::PLUGIN_NAME, self::TABLE_NAME, [
            'name'  => [
                DynamoDbRepositoryContract::FIELD_TYPE_STRING => (string) $name,
            ],
            'value' => [
                DynamoDbRepositoryContract::FIELD_TYPE_STRING => (string) $value,
            ],
        ]);
    }

}
