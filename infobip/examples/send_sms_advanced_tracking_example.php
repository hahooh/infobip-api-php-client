<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use infobip\api\smsMessage\client\SendMultipleTextualSmsAdvanced;
use infobip\api\smsMessage\configuration\BasicAuthConfiguration;
use infobip\api\smsMessage\model\Destination;
use infobip\api\smsMessage\model\sms\mt\send\Tracking;
use infobip\api\smsMessage\model\sms\mt\send\Message;
use infobip\api\smsMessage\model\sms\mt\send\textual\SMSAdvancedTextualRequest;

// Initializing SendMultipleTextualSmsAdvanced client with appropriate configuration
$client = new SendMultipleTextualSmsAdvanced(new BasicAuthConfiguration(USERNAME, PASSWORD));

// Creating request body
$destination = new Destination();
$destination->setTo(TO);

$message = new Message();
$message->setFrom(FROM);
$message->setDestinations([$destination]);
$message->setText("This is an example message. More information you can find on: http://dev.infobip.com/docs/fully-featured-textual-message");

$tracking = new Tracking();
$tracking->setTrack("URL");

$requestBody = new SMSAdvancedTextualRequest();
$requestBody->setMessages([$message]);
$requestBody->setTracking($tracking);

// Executing request
$response = $client->execute($requestBody);

$sentMessageInfo = $response->getMessages()[0];
echo "Message ID: " . $sentMessageInfo->getMessageId() . "\n";
echo "Receiver: " . $sentMessageInfo->getTo() . "\n";
echo "Message status: " . $sentMessageInfo->getStatus()->getName() . "\n";