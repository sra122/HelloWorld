<?php

$client = new \GuzzleHttp\Client();
$res = $client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/posts'
);
/** @return array */
return json_decode($res->getBody(), true);