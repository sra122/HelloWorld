<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\System\Models\WebstoreConfiguration;
use Plenty\Modules\Helper\Services\WebstoreHelper;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;

class AuthController extends Controller
{

    /**
     * @param WebstoreHelper $webstoreHelper
     * @return array
     */
    public function getLoginUrl(WebstoreHelper $webstoreHelper)
    {
        $webstore = $webstoreHelper->getCurrentWebstoreConfiguration();

        return [
            'loginUrl' => $webstore->domainSsl . '/markets/panda-black/auth/authentication',
        ];
    }

    /**
     * Exchange request token for access token.
     *
     * @param Request $request
     *
     * @return mixed
     * @throws \Exception
     */
    public function getAuthentication(Request $request, WebstoreHelper $webstoreHelper, LibraryCallContract $libCall)
    {
        try {
            $sessionCheck = $this->sessionCheck();
            if($sessionCheck) {
                $this->sessionCreation();
                $tokenInformation = $libCall->call(
                    'HelloWorld::guzzle_connector', ['auth_code' => $request->get('autorize_code')]
                );
                $this->tokenStorage($tokenInformation);
                return 'Login was successful. This window will close automatically.<script>window.close();</script>';
            } else {
                return 'Login was successful. This window will close automatically.<script>window.close();</script>';
            }

        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Saving token information.
     *
     * @param $tokenInformation
     */
    public function tokenStorage($tokenInformation)
    {
        $settingsRepo = pluginApp(SettingsRepositoryContract::class);

        $properties = $settingsRepo->find('HelloWorld', 'property');

        $tokenDetails = [];

        foreach($properties as $key => $property)
        {
            if(isset($property->settings['Token']) && count($tokenDetails) === 0) {
                $tokenDetails[$property->id] = $property->settings['Token'];
            }
        }

        // Removing if any Extra Session Properties are created
        if(count($tokenDetails) > 1) {
            $tokenCount = 0;
            foreach($tokenDetails as $key => $tokenDetail)
            {
                $tokenCount++;
                if($tokenCount > 1) {
                    $settingsRepo->delete($key);
                }
            }
        }

        $tokenInformation['Response']['expires_in'] = time() + $tokenInformation['Response']['expires_in'];
        $tokenInformation['Response']['refresh_token_expires_in'] = time() + $tokenInformation['Response']['refresh_token_expires_in'];

        $data = [
            'Token' => $tokenInformation['Response']
        ];

        if(count($tokenDetails) === 0) {
            $settingsRepo->create('HelloWorld', 'property', $data);
        } else {
            foreach($tokenDetails as $key => $tokenDetail)
            {
                $settingsRepo->update($data, $key);
            }
        }
    }

    /**
     * @param SettingsRepositoryContract $settingsRepo
     * @return mixed
     *
     */
    public function sessionCreation()
    {
        $settingsRepo = pluginApp(SettingsRepositoryContract::class);
        $properties = $settingsRepo->find('HelloWorld', 'property');

        $sessionValues = [];

        foreach($properties as $key => $property)
        {
           if(isset($property->settings['sessionTime']) && count($sessionValues) === 0) {
               $sessionValues[$property->id] = $property->settings['sessionTime'];
           }
        }

        $time = [
            'sessionTime' => time()
        ];

        // Removing if any Extra Session Properties are created
        if(count($sessionValues) > 1) {
            $sessionCount = 0;
            foreach($sessionValues as $key => $sessionValue)
            {
                $sessionCount++;
                if($sessionCount > 1) {
                    $settingsRepo->delete($key);
                }
            }
        }

        if(count($sessionValues) === 0) {
            $response = $settingsRepo->create('HelloWorld', 'property', $time);
            return $response;
        } else {
            foreach($sessionValues as $key => $sessionValue)
            {
                if((time() - $sessionValue) > 600) {
                    $settingsRepo->update($time, $key);
                }
            }
        }
    }

    /**
     * @return bool
     */
    public function sessionCheck()
    {
        $settingsRepo = pluginApp(SettingsRepositoryContract::class);
        $properties = $settingsRepo->find('HelloWorld', 'property');

        $sessionValues = [];

        foreach($properties as $key => $property)
        {
            if(isset($property->settings['sessionTime']) && count($sessionValues) === 0) {
                $sessionValues[$property->id] = $property->settings['sessionTime'];
            }
        }

        if(count($sessionValues) === 1) {
            foreach($sessionValues as $key => $sessionValue)
            {
                if((time() - $sessionValue) < 600) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;

    }

    /**
     * @return mixed
     */
    public function tokenExpireTime()
    {
        $settingsRepo = pluginApp(SettingsRepositoryContract::class);

        $properties = $settingsRepo->find('HelloWorld', 'property');

        $tokenDetails = [];

        foreach($properties as $key => $property)
        {
            if(isset($property->settings['Token']) && count($tokenDetails) === 0) {
                $tokenDetails[$property->id] = $property->settings['Token']['expires_in'];
            }
        }

        foreach($tokenDetails as $key => $tokenDetail)
        {
            return date('Y', $tokenDetail);
        }
    }
}