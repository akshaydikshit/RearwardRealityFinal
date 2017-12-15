<?php

require_once './vendor/autoload.php';



use Twilio\Twiml;

$response = new Twiml();
$response->say('hello!', ['voice' => 'woman', 'language' => 'en-US']);

echo $response;
$response->say('Chapeau!', ['voice' => 'woman', 'language' => 'fr']);
echo $response;

?>

