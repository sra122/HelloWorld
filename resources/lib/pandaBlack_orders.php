<?php

$client = new \GuzzleHttp\Client();


$res = $client->request(
    'GET',
    'https://pb.i-ways-network.org/panda-black-orders.json',
    [
        'headers' => [
            'APP-ID' => 'Lr7u9w86bUL5qsg7MJEVut8XYsqrZmTTxM67qFdH89f4NYQnHrkgKkMAsH9YLE4tjce4GtPSqrYScSt7w558USrVgXHB',
            'API-AUTH-TOKEN' => SdkRestApi::getParam('token')
        ]
    ]

);

/** @return array */
return json_decode($res->getBody(), true);