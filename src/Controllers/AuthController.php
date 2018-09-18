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
            $response = $libCall->call(
                'HelloWorld::guzzle_connector', ['auth_code' => $request->get('autorize_code')]
            );

            return $response;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }


    /**
     * @param SettingsRepositoryContract $settingsRepo
     * @return mixed
     *
     */
    public function sessionCreation(SettingsRepositoryContract $settingsRepo)
    {
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
}