<?php

require_once './vendor/autoload.php';

use Twilio\Twiml;

$response = new Twiml();
$response->say('hello how are you', ['voice' => 'woman', 'language' => 'en-US']);
$response->say('hello how are you', ['voice' => 'woman', 'language' => 'en-US']);


switch ($_POST['SpeechResult']) {
    case 'hello':
        $response->say('I am back');
        break;
    case 'Hello':
        $response->say('You need support. We will help!');
          break;
       case 'HELLO':
        $response->say('You need support. We will help!');
          break;
    default:
        $response->say('Sorry, I don\'t understand that choice.');
}


// Render the response as XML in reply to the webhook request
header('Content-Type: text/xml');
echo $response;
?>

