<?php

use infobip\api\smsMessage\client\GetAccountBalance;
use infobip\api\smsMessage\configuration\BasicAuthConfiguration;

require_once __DIR__ . '/../../vendor/autoload.php';

// Initializing GetAccountBalance client with appropriate configuration
$client = new GetAccountBalance(new BasicAuthConfiguration(USERNAME, PASSWORD));
// Executing request
$response = $client->execute();

echo 'accountBalance = ' . $response->getBalance() . ' ' . $response->getCurrency();