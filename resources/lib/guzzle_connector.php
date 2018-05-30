<?php

$client = new \GuzzleHttp\Client();

//$client->setDefaultOption('headers', array('Content-type' => 'application/json; charset=UTF-8'));

$res = $client->request(
    'POST',
    'https://jsonplaceholder.typicode.com/posts',
    [
        'headers' => ['Content-type' => 'application/json; charset=UTF-8'],
        'body' => ['title' => SdkRestApi::getParam('title')]
    ]

);

/** @return array */
return json_decode($res->getBody(), true);