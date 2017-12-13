<?php

require_once './vendor/autoload.php';

use Twilio\Twiml;

$response = new Twiml();
$response->say('Thanks for calling Rearward Reality. Lets Fight Back.', ['voice' => 'alice', 'language' => 'en']);
$response->pause(['length' => 1]);
$response->say('In case of emergency Dial 911.', ['voice' => 'alice', 'language' => 'en']);


if (array_key_exists('Digits', $_POST)) {
    switch ($_POST['Digits']) {
        case 1:
            $response->say('You pressed 1');
            break;
        case 2:
            $response->say('You need support. We will help!');
            break;
        default:
            $response->say('Sorry, I don\'t understand that choice.');
    }
} else {
    // If no input was sent, use the <Gather> verb to collect user input
    $gather = $response->gather(array('numDigits' => 1));
    // use the <Say> verb to request input from the user

    $gather->say('Press 1 if you want to report the abuse. Press 2 to speak to our customer care executive.');

    // If the user doesn't enter input, loop
   // $response->redirect('/voice');
}

// Render the response as XML in reply to the webhook request
header('Content-Type: text/xml');
echo $response;
?>
