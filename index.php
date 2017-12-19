<?php

require_once './vendor/autoload.php';

use Twilio\Twiml;
$response = new Twiml();
$response->say('Thanks for calling Rearward Reality. Lets Fight Back.', ['voice' => 'woman', 'language' => 'en']);
$response->say('In case of emergency Dial one zero zero.', ['voice' => 'woman', 'language' => 'en']);

// If no input was sent, use the <Gather> verb to collect user input
$gather = $response->gather(array('numDigits' => 1));
// use the <Say> verb to request input from the user
$gather->say('Press 1 to know about the nearest shelter. Press 2 to speak to our representatives.', ['voice' => 'woman', 'language' => 'en', 'action' => 'control.php']);




// Render the response as XML in reply to the webhook request
header('Content-Type: text/xml');
echo $response;
?>
