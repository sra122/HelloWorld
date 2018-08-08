<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeRepositoryContract;
use Plenty\Plugin\Controller;

class AttributesController extends Controller
{
    public function getAttributes()
    {
        $attributeRepo = pluginApp(AttributeRepositoryContract::class);
        $test = $attributeRepo->all([], 50, 1);

        return $test;
    }
}