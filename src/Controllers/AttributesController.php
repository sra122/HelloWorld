<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;

class AttributesController extends Controller
{
    public function getAttributes()
    {
        $attributeRepo = pluginApp(AttributeRepositoryContract::class);
        $test = $attributeRepo->all([], 50, 1);

        return $test;
    }

    public function createAttribute(Request $request)
    {
        $data = $request->get('new_attribute', '');

        $attributeRepo = pluginApp(AttributeRepositoryContract::class);

        $attributeValueMap = [
          'backendName' => $data
        ];

        $test = $attributeRepo->create($attributeValueMap);

        return $test;

    }

    public function attributeMapping(Request $request)
    {
        $vendorAttribute = $request->get('vendor_attribute', '');
        $plentyAttribute = $request->get('plenty_attribute', '');

        $settingsRepo = pluginApp(SettingsRepositoryContract::class);

        $data = [
            'vendorAttribute' => $vendorAttribute,
            'plentyAttribute' => $plentyAttribute
        ];

        return $data;
        /*$test = $settingsRepo->create('HelloWorld', 'attribute', $data);

        return $test;*/
    }
}