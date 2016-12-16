<?php
/*
 * Sample PHP Client to access SIWIAT Out App JSON
 *
 * @license see LICENSE
 * @copyright Copyright (c) 2016, Ondics GmbH
 */ 
require_once __DIR__ . '/vendor/autoload.php';

$client = new Swagger\Client\ApiClient();
$client->getConfig()->setHost('http://[IP-APP-BOX]/websites/ab/index.php/json/api');
$api = new Swagger\Client\Api\DefaultApi($client);

try {
    // Get valueid of first (0th) channel 
    $valueid = $api->getChannelsResponse()->getChannels()[0]->getValueid();
    // Get current value with this valueid
    $value = $api->getValuesResponse($valueid)->getValues()[0]->getValue();
    echo "Value 0th Channel: " . $value;
} catch (Exception $e) {
     echo 'Exception: ', $e->getMessage(), PHP_EOL;
}