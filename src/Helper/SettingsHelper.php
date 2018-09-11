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

    /**
     *
     * Get settings for a given id.
     *
     * @param string $name
     * @param mixed  $default
     *
     * @return string|null
     */
    public function get($name, $default = null)
    {
        $data = $this->dynamoDbRepo->getItem(self::PLUGIN_NAME, self::TABLE_NAME, true, [
            'name' => [DynamoDbRepositoryContract::FIELD_TYPE_STRING => $name]
        ]);
        if(isset($data['value'][ DynamoDbRepositoryContract::FIELD_TYPE_STRING ]))
        {
            return $data['value'][ DynamoDbRepositoryContract::FIELD_TYPE_STRING ];
        }
        return $default;
    }

}
