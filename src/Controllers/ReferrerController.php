<?php

namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;

class ReferrerController extends Controller
{
    public function getListOfOrderReferrer()
    {
        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerList = $orderReferrerRepo->getList(['name']);

        return $orderReferrerList;
    }

    public function createOrderReferrer()
    {
        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);

        $response = $orderReferrerRepo->create(['isEditable'    => true,
                                                'backendName' => 'PandaBlack1',
                                                'name'        => 'PandaBlack1',
                                                'origin'      => 'plenty',
                                                'isFilterable' => true
                                            ]);

        return $response;
    }
}