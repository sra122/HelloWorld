<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeMapRepositoryContract;
use Plenty\Plugin\Controller;

class AttributesController extends Controller
{
    public function getAttributes()
    {
        $attributeRepo = pluginApp(AttributeMapRepositoryContract::class);
        $test = $attributeRepo->all();

        return $test;
    }
}