<?php
namespace HelloWorld\Controllers;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use Plenty\Modules\Order\Status\Contracts\OrderStatusRepositoryContract;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Plugin\Application;
/**
 * Class OrdersController
 */
class OrdersController extends Controller
{
    public function getAllPaymentMethods()
    {
        $paymentRepo = pluginApp(PaymentMethodRepositoryContract::class);
        $paymentInfo = $paymentRepo->all();

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

    public function getOrders()
    {
        $ordersRepo = pluginApp(OrderRepositoryContract::class);
        $orderDetails = $ordersRepo->searchOrders(1, 50, [])->toArray();

        return $orderDetails;
    }

    public function createOrder()
    {
        $ordersRepo = pluginApp(OrderRepositoryContract::class);
        $data = [
            'typeId' => 1,
            'methodOfPaymentId' => 1,
            'shippingProfileId' => 1,
            'paymentStatus' => 1,
            'statusId' => 1,
            'statusName' => '',
            'ownerId' => '',
            'plentyId' => $this->getPlentyPluginInfo(),
            'orderItems' => [
                0 => [
                    'typeId' => 1,
                    'itemVariationId' => 1031,
                    'quantity' => 1,
                    'orderItemName' => 'Zweisitzer White Russian',
                    'amounts' => [
                        0 => [
                            'isSystemCurrency' => true,
                            'isNet' => true,
                            'exchangeRate' => 1,
                            'currency' => 'EUR'
                        ]
                    ]
                ]
            ],
            'addresses' => [
                0 => [
                    'gender' => 'male', //'female'
                    'name1' => 'iways',
                    'name2' => 'Sravan',
                    'name3' => 'Kumar',
                    'companyName' => 'Iways',
                    'address1' => 'Kurfürstendamm',
                    'address2' => '125A',
                    'postalCode' => '10711',
                    'town' => 'Berlin',
                    'countryId' => 1
                ]
            ]
        ];
        $response = $ordersRepo->createOrder($data);


        return $response;
    }

    public function getData()
    {
        $test = [
            'paymentMethods' => $this->getAllPaymentMethods(),
            'orderStatus' => $this->getOrderStatus(),
            'plentyPluginInfo' => $this->getPlentyPluginInfo(),
            'ordersRepo' => $this->getOrders(),
            'order' => '',
            'orderReferrer' => $this->getOrderReferrer(),
            'deleteOrder' => ''
        ];

        return $test;
    }


    public function deleteOrder()
    {
        $orderId = 163;
        $orderRepo = pluginApp(OrderRepositoryContract::class);
        return $orderRepo->deleteOrder($orderId);
    }


    public function getOrderReferrer()
    {
        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) === 'PandaBlack') {
                $pandaBlackReferrerID[$key] = $orderReferrerList->name;
            }
        }

        return $pandaBlackReferrerID;

    }
}