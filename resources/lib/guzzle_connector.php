<?php

$client = new GuzzleHttp\Client();

$res = $client->request(
    'POST',
    'https://www.medion.local/api/product/create.php'
);

/** @return array */
return json_decode($res->getBody(), true);