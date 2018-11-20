<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\Item\Attribute\Contracts\AttributeValueRepositoryContract;

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
        $dataValues = explode(',', $request->get('attribute_values', ''));

        $attributeRepo = pluginApp(AttributeRepositoryContract::class);

        $attributeValueMap = [
            'backendName' => $data
        ];

        $attributeInfo = $attributeRepo->create($attributeValueMap)->toArray();

        $attributeValueRepository = pluginApp(AttributeValueRepositoryContract::class);

        foreach($dataValues as $attributeValue) {
            $attributeValueRepository->create(['backendName' => trim($attributeValue)], $attributeInfo['id']);
        }

        return $attributeInfo;

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

        $attributeRepo = pluginApp(AttributeRepositoryContract::class);
        $plentyMarketAttributes = $attributeRepo->all([], 50, 1);

        foreach($plentyMarketAttributes->entries as $plentyMarketAttribute) {
            if($plentyMarketAttribute[0]['backendName'] === $plentyAttribute) {
                $data['plentyAttributeId'] = $plentyMarketAttribute[0]['id'];
            }
        }

        $response = $settingsRepo->create('HelloWorld', 'attribute', $data);

        return $response->id;
    }
}