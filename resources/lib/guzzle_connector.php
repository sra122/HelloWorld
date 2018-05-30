<?php

$client = new \GuzzleHttp\Client();


$res = $client->request(
    'POST',
    'https://jsonplaceholder.typicode.com/posts',
    [
        'headers' => ['Content-type' => 'application/json; charset=UTF-8'],
        'form_params' => ['title' => SdkRestApi::getParam('title')]
    ]

);

/** @return array */
return json_decode($res->getBody(), true);