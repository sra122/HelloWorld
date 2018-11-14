<?php

use Plenty\Modules\Payment\Contracts\PaymentRepositoryContract;
use Plenty\Modules\Order\Status\Contracts\OrderStatusRepositoryContract;
use Plenty\Plugin\Application;
/**
 * Class OrdersController
 */
class OrdersController extends Controller
{
    public function getAllPaymentMethods()
    {
        $paymentRepo = pluginApp(PaymentRepositoryContract::class);
        $paymentInfo = $paymentRepo->getAll(50, 1);

        return $paymentInfo;
    }


    public function getOrderStatus()
    {
        $statusRepo = pluginApp(OrderStatusRepositoryContract::class);
        $statusList = $statusRepo->all();

        return $statusList;
    }


    public function getPlentyPluginInfo()
    {
        $plentyId = pluginApp(Application::class);

        return $plentyId->getPlentyId();
    }

    public function getData()
    {
        $test = [
            'paymentMethods' => $this->getAllPaymentMethods(),
            'orderStatus' => $this->getOrderStatus(),
            'plentyPluginInfo' => $this->getPlentyPluginInfo()
        ];

        return $test;
    }



}