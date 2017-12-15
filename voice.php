<?php

require_once './vendor/autoload.php';



use Twilio\Twiml;

$response = new Twiml();
$response->say('Chapeau what are your doing!', ['voice' => 'woman', 'language' => 'fr']);

echo $response;
$response->say('Chapeau!', ['voice' => 'woman', 'language' => 'fr']);
echo $response;

?>

