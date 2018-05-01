<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use infobip\api\smsMessage\client\GetReceivedMessages;
use infobip\api\smsMessage\configuration\BasicAuthConfiguration;
use infobip\api\smsMessage\model\sms\mo\reports\GetReceivedMessagesExecuteContext;

// Initializing GetReceivedMessages client with appropriate configuration
$client = new GetReceivedMessages(new BasicAuthConfiguration(USERNAME, PASSWORD));

// Creating execution context
$context = new GetReceivedMessagesExecuteContext();

// Executing request
$response = $client->execute($context);

foreach ($response->getResults() as $result) {
    echo "Message ID: " . $result->getMessageId() . "\n";
    echo "Received at: " . $result->getReceivedAt()->format('Y-m-d H:i:s P') . "\n";
    echo "Sender: " . $result->getFrom() . "\n";
    echo "Receiver: " . $result->getTo() . "\n";
    echo "Message text: " . $result->getText() . "\n";
    echo "Keyword: " . $result->getKeyword() . "\n";
    echo "Clean text: " . $result->getCleanText() . "\n";
    echo "Sms count: " . $result->getSmsCount() . "\n\n";
}