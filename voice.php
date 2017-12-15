<?php

require_once './vendor/autoload.php';



use Twilio\Twiml;

$response = new Twiml();
$response->say('hello how are you', ['voice' => 'woman', 'language' => 'en-US']);
$response->say('hello how are you', ['voice' => 'woman', 'language' => 'en-US']);





// Render the response as XML in reply to the webhook request
header('Content-Type: text/xml');
echo $response;

?>

