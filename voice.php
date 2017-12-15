<?php

require_once './vendor/autoload.php';



use Twilio\Twiml;

$response = new Twiml();
$response->say('hello how are you', ['voice' => 'woman', 'language' => 'en-US']);
$response->say('hello how are you', ['voice' => 'woman', 'language' => 'en-US']);



?>

