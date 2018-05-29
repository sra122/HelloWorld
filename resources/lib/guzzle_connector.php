<?php

$client = new \GuzzleHttp\Client();

$res = $client->request(
    'POST',
    'www.medion.local',
    [
        'query' => ['q' => SdkRestApi::getParam('packagist_query')]
    ]
);

/** @return array */
return json_decode($res->getBody(), true);