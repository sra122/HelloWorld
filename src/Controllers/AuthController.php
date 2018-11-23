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
use Plenty\Modules\Market\Credentials\Contracts\CredentialsRepositoryContract;

class AuthController extends Controller
{

    public $pluginCredentials;

    public function authenticate()
    {

    }

    /**
     *
     */
    public function getCredentials()
    {
        $credentialsRepo = pluginApp(CredentialsRepositoryContract::class);

        $pluginCredentials = $credentialsRepo->all([
                                       'market' => 'HelloWorld'
                                    ]);

        $this->pluginCredentials = $pluginCredentials;
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
            $this->authenticate();
            $this->getCredentials();
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
        $credentialsRepo = pluginApp(CredentialsRepositoryContract::class);

        $this->getCredentials();

        $tokenDetails = [];

        foreach($this->pluginCredentials as $key => $pluginCredential)
        {
            if(isset($pluginCredential->data['pbToken']) && count($tokenDetails) === 0) {
                $tokenDetails[$pluginCredential->id] = $pluginCredential->data['pbToken'];
            }
        }

        // Removing if any Extra Session Properties are created
        if(count($tokenDetails) > 1) {
            $tokenCount = 0;
            foreach($tokenDetails as $key => $tokenDetail)
            {
                $tokenCount++;
                if($tokenCount > 1) {
                    $credentialsRepo->delete($key);
                }
            }
        }

        $tokenInformation['Response']['expires_in'] = time() + $tokenInformation['Response']['expires_in'];
        $tokenInformation['Response']['refresh_token_expires_in'] = time() + $tokenInformation['Response']['refresh_token_expires_in'];

        $token = [
            'pbToken' => $tokenInformation['Response']
        ];

        $data = [
            'environment' => 'sandbox',
            'status' => 'active',
            'data' => $token,
            'market' => 'HelloWorld'
        ];


        if(count($tokenDetails) === 0) {
            $credentialsRepo->create($data);
        } else {
            foreach($tokenDetails as $key => $tokenDetail)
            {
                $credentialsRepo->update($key, $data);
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
        $credentialsRepo = pluginApp(CredentialsRepositoryContract::class);
        $sessionValues = [];
        $this->getCredentials();

        foreach($this->pluginCredentials as $key => $pluginCredential)
        {
           if(isset($pluginCredential->data['sessionTime'])) {
               $sessionValues[$pluginCredential->id] = $pluginCredential->data['sessionTime'];
           }
        }

        $time = [
            'sessionTime' => time()
        ];

        $data = [
            'environment' => 'sandbox',
            'status' => 'active',
            'data' => $time,
            'market' => 'HelloWorld'
        ];

        // Removing if any Extra Session Properties are created
        if(count($sessionValues) > 1) {
            $sessionCount = 0;
            foreach($sessionValues as $key => $sessionValue)
            {
                $sessionCount++;
                if($sessionCount > 1) {
                    $credentialsRepo->delete($key);
                }
            }
        }

        if(count($sessionValues) > 0) {
            foreach($sessionValues as $key => $sessionValue)
            {
                if((time() - $sessionValue) > 600) {

                    $sessionUpdate = $credentialsRepo->update($key, $data);
                    return $sessionUpdate;
                }
            }
        } else {
            $response = $credentialsRepo->create($data);
            return $response;
        }
    }

    /**
     * @return bool
     */
    public function sessionCheck()
    {
        $this->getCredentials();

        $sessionValues = [];

        foreach($this->pluginCredentials as $pluginCredential)
        {
            if(isset($pluginCredential->data['sessionTime']) && count($sessionValues) === 0) {
                $sessionValues[$pluginCredential->id] = $pluginCredential->data['sessionTime'];
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
        $this->getCredentials();

        $tokenDetails = [];

        foreach($this->pluginCredentials as $key => $pluginCredential)
        {
            if(isset($pluginCredential->data['pbToken']) && count($tokenDetails) === 0) {
                $tokenDetails[$pluginCredential->id] = $pluginCredential->data['pbToken']['expires_in'];
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
        $orderReferrerLists = $orderReferrerRepo->getList(['name', 'id']);

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