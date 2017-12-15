<?php

require_once './vendor/autoload.php';



use Twilio\Twiml;

$response = new Twiml();
$response->say('hello', ['voice' => 'woman', 'language' => 'en-US']);

echo $response;


?>

