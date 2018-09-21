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
        $plentyMarketAttributes = $attributeRepo->all([], 50, 1);

        return $plentyMarketAttributes;
    }

    public function getMappedAttributeDetails(int $id)
    {
        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);

        $attributesData = $settingsCorrelationFactory->get($id)->toArray();

        return $attributesData;
    }


    public function createAttribute(Request $request)
    {
        $data = $request->get('new_attribute', '');

        $attributeRepo = pluginApp(AttributeRepositoryContract::class);

        $attributeValueMap = [
          'backendName' => $data
        ];

        $attributeInfo = $attributeRepo->create($attributeValueMap);

        return $attributeInfo;

    }

    public function attributeMapping(Request $request)
    {
        $vendorAttribute = $request->get('vendor_attribute', '');
        $plentyAttribute = $request->get('plenty_attribute', '');
        $plentyAttribute_id = $request->get('plenty_attribute_id', '');

        $settingsRepo = pluginApp(SettingsRepositoryContract::class);

        $data = [
            'vendorAttribute' => $vendorAttribute,
            'plentyAttributeName' => $plentyAttribute,
            '$plentyAttribute_id' => $plentyAttribute_id
        ];

        $response = $settingsRepo->create('HelloWorld', 'attribute', $data);

        return $response->id;
    }
}