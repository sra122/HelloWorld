<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\System\Models\WebstoreConfiguration;
use Plenty\Modules\Helper\Services\WebstoreHelper;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;

class AuthController extends Controller
{

    public $properties;

    public function getProperties()
    {
        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);
        $properties = $settingsCorrelationFactory->find('HelloWorld', 'property');

        $this->properties = $properties;
    }

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
     * @param LibraryCallContract $libCall
     *
     * @return mixed
     * @throws \Exception
     */
    public function getAuthentication(Request $request, LibraryCallContract $libCall)
    {
        try {
            $this->getProperties(); // To get the properties.
            $this->createReferrerId();
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

        $properties = $this->properties;

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

        $sessionValues = [];

        foreach($this->properties as $key => $property)
        {
           if(isset($property->settings['sessionTime'])) {
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

            return $sessionValues;
        }

        /*if(count($sessionValues) > 0) {
            foreach($sessionValues as $key => $sessionValue)
            {
                if((time() - $sessionValue) > 600) {
                    $sessionUpdate = $settingsRepo->update($time, $key);
                    return $sessionUpdate;
                }
            }
        } else {
            $response = $settingsRepo->create('HelloWorld', 'property', $time);
            return $response;
        }*/
    }

    /**
     * @return bool
     */
    public function sessionCheck()
    {
        $properties = $this->properties;

        $sessionValues = [];

        foreach($properties as $property)
        {
            if(isset($property->settings['sessionTime']) && count($sessionValues) === 0) {
                $sessionValues[$property->id] = $property->settings['sessionTime'];
                break;
            }
        }

        if(count($sessionValues) >= 1) {
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
        $properties = $this->properties;

        $tokenDetails = [];

        foreach($properties as $key => $property)
        {
            if(isset($property->settings['Token']) && count($tokenDetails) === 0) {
                $tokenDetails[$property->id] = $property->settings['Token']['expires_in'];
            }
        }

        foreach($tokenDetails as $key => $tokenDetail)
        {
            return $tokenDetail;
        }
    }


    public function createReferrerId()
    {
        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) === 'PandaBlack') {
                array_push($pandaBlackReferrerID, $orderReferrerList);
            }
        }

        if(empty(array_filter($pandaBlackReferrerID))) {

            $orderReferrer = $orderReferrerRepo->create([
                'isEditable'    => true,
                'backendName' => 'PandaBlack',
                'name'        => 'PandaBlack',
                'origin'      => 'plenty',
                'isFilterable' => true
            ])->toArray();
            $settingsRepository = pluginApp(SettingsRepositoryContract::class);
            $settingsRepository->create('PandaBlack', 'property', $orderReferrer);

            return $orderReferrer;
        }

        return $pandaBlackReferrerID;

    }
}