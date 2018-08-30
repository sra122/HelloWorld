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
        $orderReferrerLists = $orderReferrerRepo->getList(['name']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            array_push($pandaBlackReferrerID, $orderReferrerList);
        }


        /*if(empty($pandaBlackReferrerID)) {

            $orderReferrer = $orderReferrerRepo->create([
                'isEditable'    => true,
                'backendName' => 'PandaBlack',
                'name'        => 'PandaBlack',
                'origin'      => 'plenty',
                'isFilterable' => true
            ]);

            return $orderReferrer;
        }*/

        return $pandaBlackReferrerID;
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