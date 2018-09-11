<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\System\Models\WebstoreConfiguration;
use Plenty\Modules\Helper\Services\WebstoreHelper;

class AuthController extends Controller
{
    public function getLoginUrl(WebstoreHelper $webstoreHelper)
    {
        $webstore = $webstoreHelper->getCurrentWebstoreConfiguration();

        return [
            'loginUrl' => $webstore->domainSsl . '/plenty/terra/system/markets/iTools/authentication',
        ];
    }

    public function sessionCreation(SettingsRepositoryContract $settingsRepo)
    {
        $properties = $settingsRepo->find('HelloWorld', 'property');

        $sessionValue = [];

        foreach($properties as $key => $property)
        {
            if($key == 'sessionTime') {
                array_push($sessionValue, $property);
            }
        }

        $time = [
            'sessionTime' => time()
        ];

        $settingsRepo->create('HelloWorld', 'property', $time);

        return [
            'sessionTime' => $time['sessionTime']
        ];

    }
}