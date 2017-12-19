<?php

require_once './vendor/autoload.php';

use Twilio\Twiml;

$response = new Twiml();

$response->say($_POST['SpeechResult'], ['voice' => 'woman', 'language' => 'en-US']);
if (preg_match('/mumbai/i', $_POST['SpeechResult'])) {
    $response->say('The shelter home located in jersey city is at ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('twenty four willow ave ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('Jersey city ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('New Jersey zero seven three zero six ', ['voice' => 'woman', 'language' => 'en-US']);

    $from = $_REQUEST['From'];
    $response->sms('Address is: 24 Willow Ave, Jersey City,NJ 07306 .', ['from' => '+16283003802',
        'to' => $from]);
    $response->say('Thank you for calling us. You will also receive a message after this call with the same information.Stay Safe!.', ['voice' => 'woman', 'language' => 'en-US']);
} elseif (preg_match('/pune/i', $_POST['SpeechResult'])) {
    $response->say('The shelter home located in newyork city is at ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('one pace plaza ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('Newyork city ', ['voice' => 'woman', 'language' => 'en-US']);
    $from = $_REQUEST['From'];
    $response->sms('Address is: 1 Pace Plaza, Newyork City.', ['from' => '+16283003802',
        'to' => $from]);
    $response->say('Thank you for calling us. You will also receive a message after this call with the same information.Stay Safe!.', ['voice' => 'woman', 'language' => 'en-US']);
} elseif (preg_match('/indore/i', $_POST['SpeechResult'])) {
    $response->say('The shelter home located in newyork city is at ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('one pace plaza ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('Newyork city ', ['voice' => 'woman', 'language' => 'en-US']);
    $from = $_REQUEST['From'];
    $response->sms('Address is: 1 Pace Plaza, Newyork City.', ['from' => '+16283003802',
        'to' => $from]);
    $response->say('Thank you for calling us. You will also receive a message after this call with the same information.Stay Safe!.', ['voice' => 'woman', 'language' => 'en-US']);
} else {
    $response->say('Sorry I did not understand. Please Repeat. ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->gather(['input' => 'speech', 'hints' => 'jersey, newyork', 'speechTimeout' => 'auto', 'action' => 'voice.php']);
}

// Render the response as XML in reply to the webhook request
header('Content-Type: text/xml');
echo $response;
?>

