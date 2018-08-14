<?php

namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Modules\Order\Referrer\OrderReferrerRepositoryContract;

class ReferrerController extends Controller
{
    public function getListOfOrderReferrer()
    {
        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerList = $orderReferrerRepo->getList([]);

        return $orderReferrerList;
    }
}