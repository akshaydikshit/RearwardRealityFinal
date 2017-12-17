<?php

require_once './vendor/autoload.php';

use Twilio\Twiml;

$response = new Twiml();
if (array_key_exists('Digits', $_POST)) {
    switch ($_POST['Digits']) {
        case 1:
            $response->say('You selected 1.', ['voice' => 'woman', 'language' => 'en']);
            $response->say('Speak your City!', ['voice' => 'woman', 'language' => 'en']);

            $response->gather(['input' => 'speech', 'hints' => 'jersey','newyork', 'speechTimeout' => 'auto', 'action' => 'voice.php']);
            break;
        case 2:
            $response->say('You need support. We will help!');
            $response->play('ac.mp3', ['loop' => 1]);
            $response->say('All our representatives are currently busy with other calls. Please leave a message with your phone number.');
            $response->record(['maxLength' => 10, 'action' => 'completed.php']);
            break;
        default:
            $response->say('Sorry, I don\'t understand that choice.');
    }
} else {
    $response->say('Thanks for calling Rearward Reality. Lets Fight Back.', ['voice' => 'woman', 'language' => 'en']);
    // If no input was sent, use the <Gather> verb to collect user input
    $gather = $response->gather(array('numDigits' => 1));
    // use the <Say> verb to request input from the user
    $gather->say('Press 1 if you want to report the abuse. Press 2 to speak to our customer care executive.', ['voice' => 'woman', 'language' => 'en']);
    // If the user doesn't enter input, loop
}
// Render the response as XML in reply to the webhook request
header('Content-Type: text/xml');
echo $response;
?>
