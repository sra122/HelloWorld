<?php

$client = new \GuzzleHttp\Client();
$res = $client->request(
    'POST',
    'https://templates.i-ways.net/login'
);
/** @return array */
return json_decode($res->getBody(), true);