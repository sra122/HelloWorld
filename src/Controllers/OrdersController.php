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
/**
 * Class OrdersController
 */
class OrdersController extends Controller
{

    public function createOrder()
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
            'properties' => [
                [
                    'typeId' => 16,
                    'value' => 'ef42kpo52df'
                ]
            ],
            'addressRelations' => [
                [
                    'typeId' => self::BILLING_ADDRESS,
                    'addressId' => $this->createBillingAddress()->id
                ],
                [
                    'typeId' => self::DELIVERY_ADDRESS,
                    'addressId' => $this->createDeliveryAddress()->id
                ]
            ]
        ];


        $response = $ordersRepo->createOrder($data);

        return $response;

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

    public function createBillingAddress()
    {
        $addressRepo = pluginApp(AddressRepositoryContract::class);
        $billingAddress = [
            'gender' => 'male',
            'name1' => 'iways',
            'name2' => 'Sravan',
            'name3' => 'Kumar',
            'companyName' => 'Iways',
            'address1' => 'Kurfürstendamm',
            'address2' => '125A',
            'postalCode' => '10711',
            'town' => 'Berlin',
            'countryId' => 1
        ];

        return $addressRepo->createAddress($billingAddress);
    }


    public function createDeliveryAddress()
    {
        $addressRepo = pluginApp(AddressRepositoryContract::class);
        $deliveryAddress = [
            'gender' => 'male',
            'name1' => 'iways',
            'name2' => 'Sravan',
            'name3' => 'Kumar',
            'companyName' => 'Iways',
            'address1' => 'Kurfürstendamm',
            'address2' => '125A',
            'postalCode' => '10711',
            'town' => 'Berlin',
            'countryId' => 1
        ];

        return $addressRepo->createAddress($deliveryAddress);
    }

    public function createOrder1()
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
            'addressRelations' => [
                [
                    'typeId' => self::BILLING_ADDRESS,
                    'addressId' => $this->createBillingAddress()->id
                ],
                [
                    'typeId' => self::DELIVERY_ADDRESS,
                    'addressId' => $this->createDeliveryAddress()->id
                ]
            ]
        ];
        $response = $ordersRepo->createOrder($data);

        return $response;
    }

    public function getData()
    {
        $test = [
            'items' => $this->getItems(),
            'attributes' => $this->getAttributes(),
            'correlations' => $this->getCorrelations()
        ];

        return $test;
    }
    
    public function deleteOrder()
    {
        $orderId = 173;
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
                $pandaBlackReferrerID[$key] = $orderReferrerList;
            }
        }

        return $pandaBlackReferrerID;
    }


    public function getItems()
    {
        $itemRepository = pluginApp(VariationSearchRepositoryContract::class);
        $itemRepository->setSearchParams([
            'with' => [
                'item' => null,
                'lang' => 'de',
                'variationSalesPrices' => true,
                'variationCategories' => true,
                'variationClients' => true,
                'VariationAttributeValues' => true,
                'variationSkus' => true,
                'variationMarkets' => true,
                'variationSuppliers' => true,
                'variationWarehouses' => true,
                'variationDefaultCategory' => true,
                'unit' => true,
                'variationStock' => [
                    'params' => [
                        'type' => 'virtual'
                    ],
                    'fields' => [
                        'stockNet'
                    ]
                ],
                'stock' => true,
                'images' => true,
            ]
        ]);

        $orderReferrerRepo = pluginApp(OrderReferrerRepositoryContract::class);
        $orderReferrerLists = $orderReferrerRepo->getList(['name', 'id']);

        $pandaBlackReferrerID = [];

        foreach($orderReferrerLists as $key => $orderReferrerList)
        {
            if(trim($orderReferrerList->name) === 'PandaBlack' && count($pandaBlackReferrerID) === 0) {
                array_push($pandaBlackReferrerID, $orderReferrerList);
            }
        }

        foreach($pandaBlackReferrerID as $pandaBlackId) {
            $itemRepository->setFilters([
                'referrerId' => (int)$pandaBlackId['id']
            ]);
        }


        $resultItems = $itemRepository->search();

        return $resultItems;
    }


    private function getAttributes()
    {
        $settingsRepo = pluginApp(SettingsRepositoryContract::class);
        $attributes = $settingsRepo->find('HelloWorld', 'attribute');
        return $attributes;
    }


    private function getCorrelations()
    {
        $filters = [
            'marketplaceId' => 'HelloWorld',
            'type' => 'category'
        ];

        $settingsCorrelationFactory = pluginApp(SettingsRepositoryContract::class);

        $correlationsData = $settingsCorrelationFactory->search($filters, 1, 50);

        return $correlationsData;
    }


    public function getShippingInformation()
    {
        $shippingInfo = pluginApp(OrderShippingPackageRepositoryContract::class);

        $shippingDetails = $shippingInfo->listOrderShippingPackages(176, [], []);

        return $shippingDetails;
    }
}