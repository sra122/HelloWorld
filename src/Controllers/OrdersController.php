<?php
namespace HelloWorld\Controllers;
use Plenty\Modules\Order\Referrer\Contracts\OrderReferrerRepositoryContract;
use Plenty\Plugin\Controller;
use Plenty\Modules\Payment\Method\Contracts\PaymentMethodRepositoryContract;
use Plenty\Modules\Order\Status\Contracts\OrderStatusRepositoryContract;
use Plenty\Modules\Order\Contracts\OrderRepositoryContract;
use Plenty\Plugin\Application;
use Plenty\Modules\Market\Settings\Contracts\SettingsRepositoryContract;
use Plenty\Modules\Account\Address\Contracts\AddressRepositoryContract;
use Plenty\Modules\Item\Variation\Contracts\VariationSearchRepositoryContract;
use Plenty\Modules\Market\Credentials\Contracts\CredentialsRepositoryContract;
use Plenty\Modules\Order\Shipping\Package\Contracts\OrderShippingPackageRepositoryContract;
use Plenty\Modules\Order\Property\Contracts\OrderPropertyRepositoryContract;
use Plenty\Modules\Plugin\Libs\Contracts\LibraryCallContract;
use Plenty\Modules\Order\Shipping\Information\Contracts;
/**
 * Class OrdersController
 */
class OrdersController extends Controller
{

    public function fetchOrders()
    {
        $libCall = pluginApp(LibraryCallContract::class);

        $propertiesRepo = pluginApp(SettingsRepositoryContract::class);
        $properties = $propertiesRepo->find('HelloWorld', 'property');

        foreach($properties as $key => $property) {
            if (isset($property->settings['pbToken'])) {
                $response = $libCall->call(
                    'HelloWorld::products_to_pandablack',
                    [
                        'token' => $property->settings['pbToken']['token'],
                    ]
                );
                $this->createOrder($response);
            }
        }

    }

    public function createOrder($orderDetails)
    {
        if(!empty($orderDetails)) {

            foreach($orderDetails as $orderDetail)
            {
                $ordersRepo = pluginApp(OrderRepositoryContract::class);

                $data = [
                    'typeId' => 1, // sales order
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
                                    'currency' => 'EUR',
                                    'priceOriginalGross' => 2300
                                ]
                            ]
                        ]
                    ],
                    'addressRelations' => [
                        [
                            'typeId' => self::BILLING_ADDRESS,
                            'addressId' => $this->createBillingAddress($orderDetail['reference_key'])->id
                        ],
                        [
                            'typeId' => self::DELIVERY_ADDRESS,
                            'addressId' => $this->createDeliveryAddress($orderDetail['reference_key'])->id
                        ]
                    ]
                ];


                $response = $ordersRepo->createOrder($data);

                $this->createOrderProperties($response, $orderDetail['reference_key']);
            }
        }
    }


    public function createOrderProperties($orderInfo, $referenceKey)
    {
        if(!empty($orderInfo)) {
            $orderProperties = pluginApp(OrderPropertyRepositoryContract::class);

            $data = [
                'orderId' => $orderInfo->id,
                'typeId' => 16,
                'value' => $referenceKey,
                'createdAt' => time(),
                'updatedAt' => time()
            ];

            $orderProperties->create($data);
        }
    }


    public function getOrderProperties()
    {
        $orderProperties = pluginApp(OrderPropertyRepositoryContract::class);

        $response = $orderProperties->findByOrderId(176);

        return $response;
    }


    // OrderAddressRepositoryContract

    const BILLING_ADDRESS = 1;
    const DELIVERY_ADDRESS = 2;

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

    public function createBillingAddress($referenceKey)
    {
        $addressRepo = pluginApp(AddressRepositoryContract::class);
        $billingAddress = [
            'gender' => 'male',
            'name1' => 'PANDA.BLACK GmbH',
            'address1' => 'Friedrichstraße',
            'address2' => '123',
            'address3' => 'Bestellung Id ' .$referenceKey,
            'postalCode' => '10711',
            'town' => 'Berlin',
            'countryId' => 1
        ];

        return $addressRepo->createAddress($billingAddress);
    }


    public function createDeliveryAddress($referenceKey)
    {
        $addressRepo = pluginApp(AddressRepositoryContract::class);
        $deliveryAddress = [
            'gender' => 'male',
            'name1' => 'PANDA.BLACK GmbH',
            'address1' => 'Friedrichstraße',
            'address2' => '123',
            'address3' => 'Order Id ' .$referenceKey,
            'postalCode' => '10711',
            'town' => 'Berlin',
            'countryId' => 1
        ];

        return $addressRepo->createAddress($deliveryAddress);
    }


    public function getOrderReferrer()
    {
        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name']);
        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) === 'PandaBlack') {
                $pandaBlackReferrerID[$key] = $orderReferrerList;
            }
        }

        return $pandaBlackReferrerID;
    }

    public function getShippingInformation()
    {
        $shippingInfo = pluginApp(ShippingInformationRepositoryContract::class);

        $shippingDetails = $shippingInfo->getShippingInformationByOrderId(176);

        return $shippingDetails;
    }
}