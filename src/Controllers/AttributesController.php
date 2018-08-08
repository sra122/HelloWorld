<?php

namespace HelloWorld\Controllers;

use Plenty\Modules\Item\Attribute\Contracts\AttributeMapRepositoryContract;

class AttributesController extends Controller
{
    public function getAttributes()
    {
        $attributeRepo = pluginApp(AttributeMapRepositoryContract::class);
        $test = $attributeRepo->all();

        return $test;
    }

    public function createAttribute()
    {
        $attributeRepo = pluginApp(AttributeMapRepositoryContract::class);
        $ceate = $attributeRepo->create();

        return $ceate;
    }
}