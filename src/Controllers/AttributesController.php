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

    public function createPBAttributes($categoryId)
    {
        /*$attributeValueSets = [
            0 => [
                'attributeId' => 12,
                'name' => 'Weight',
                'required' => true,
                'category' => 'Computer',
                'values' => [300 => 'gm', 301 => 'kg']
            ],
            1 => [
                'attributeId' => 13,
                'name' => 'Brand',
                'required' => false,
                'category' => 'Computer',
                'values' => [303 => 'Apple', 304 => 'Samsung', 305 => 'LG']
            ]
        ];

        foreach($attributeValueSets as $attributeValueSet)
        {
            $attributeRepo = pluginApp(AttributeRepositoryContract::class);
            $attributeValueRepository = pluginApp(AttributeValueRepositoryContract::class);

            $attributeCheck = $attributeRepo->findByBackendName($attributeValueSet['name'] . '-PB-' . $attributeValueSet['category']);

            if(empty($attributeCheck)) {

                $attributeValueMap = [
                    'backendName' => $attributeValueSet['name'] . '-PB-' . $attributeValueSet['category'],
                    'values' => [$attributeValueSet['attributeId']]
                ];

                $attributeInfo = $attributeRepo->create($attributeValueMap)->toArray();

                foreach($attributeValueSet['values'] as $key => $attributeValue) {
                    $attributeValueRepository->create(['backendName' => trim($attributeValue), 'valueNames' => [$key]], $attributeInfo['id']);
                }
            }
        }*/


        $attributeValueSets = $this->authenticate('pandaBlack_attributes', $categoryId);

        foreach($attributeValueSets as $key => $attributeValueSet)
        {
            $attributeRepo = pluginApp(AttributeRepositoryContract::class);
            $attributeValueRepository = pluginApp(AttributeValueRepositoryContract::class);

            $attributeCheck = $attributeRepo->findByBackendName($attributeValueSet['name'] . '-PB-' . $key);

            if(empty($attributeCheck) && !empty($attributeValueSet['values']) && $attributeValueSet['required']) {

                $attributeValueMap = [
                    'backendName' => $attributeValueSet['name'] . '-PB-' . $key,
                ];

                $attributeInfo = $attributeRepo->create($attributeValueMap)->toArray();

                foreach($attributeValueSet['values'] as $attributeKey => $attributeValue) {
                    $attributeValueRepository->create(['backendName' => trim($attributeValue . '-PB-' . $attributeKey)], $attributeInfo['id']);
                }
            }
        }

    }

    public function updatePBAttributes()
    {
        $attributeValueSets = [
            0 => [
                'attributeId' => 12,
                'name' => 'Weight',
                'required' => true,
                'category' => 'Computer',
                'values' => [300 => 'gm', 301 => 'kg']
            ],
            1 => [
                'attributeId' => 13,
                'name' => 'Marke',
                'required' => false,
                'category' => 'Computer',
                'values' => [303 => 'Apple', 304 => 'Samsung', 305 => 'LG']
            ]
        ];

        $attributeRepo = pluginApp(AttributeRepositoryContract::class);
        $plentyMarketsAttributes = $attributeRepo->all([], 100, 1);

        return $plentyMarketsAttributes;

        /*foreach($attributeValueSets as $attributeValueSet) {
            foreach($plentyMarketsAttributes->entries as $plentyMarketAttribute) {
                if(($plentyMarketAttribute[0]['values'][0] === $attributeValueSet['attributeId']) && ($plentyMarketAttribute[0]['backendName'] !== $attributeValueSet['name'] . '-PB-' . $attributeValueSet['category'])) {
                    $attributeRepo->update(['backendName' => $attributeValueSet['name'] . '-PB-' . $attributeValueSet['category']], $plentyMarketAttribute[0]['id']);
                }
            }
        }*/
    }


    public function authenticate($apiCall, $params = null)
    {
        $libCall = pluginApp(LibraryCallContract::class);

        $propertiesRepo = pluginApp(SettingsRepositoryContract::class);
        $properties = $propertiesRepo->find('HelloWorld', 'property');

        foreach($properties as $key => $property)
        {
            if(isset($property->settings['pbToken'])) {

                if($property->settings['pbToken']['expires_in'] > time()) {

                    $response = $libCall->call(
                        'HelloWorld::'. $apiCall,
                        [
                            'token' => $property->settings['pbToken']['token'],
                            'category_id' => $params
                        ]
                    );
                    $apiResponse = $response['Response'];
                } else if($property->settings['pbToken']['refresh_token_expires_in'] > time()) {

                    $response = $libCall->call(
                        'HelloWorld::pandaBlack_categories',
                        [
                            'token' => $property->settings['pbToken']['refresh_token'],
                            'category_id' => $params
                        ]
                    );
                    $apiResponse = $response['Response'];
                }

                break;
            }
        }

        if(isset($apiResponse)) {
            return $apiResponse;
        }
    }
}