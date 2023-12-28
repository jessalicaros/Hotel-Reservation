<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$number = $_POST['number'];
$message = $_POST['message'];

$base_url = "https://e1g443.api.infobip.com";
$base_key = "398c17f622768e0e3582ca58486031e5-e214a5f3-bc31-432a-a21d-cbfc495ca4b5";

$configuration = new Configuration(host: $base_url, apiKey: $base_key);

$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $number);

$message = new SmsTextualMessage(
    destinations: [$destination],
    text: $message,
    from:"jessa"
);

$request = new SmsAdvancedTextualRequest(messages: [$message]);

$response = $api->sendSmsMessage($request);

echo "Message sent";
