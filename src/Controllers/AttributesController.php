<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;

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
}