<?php

require_once './vendor/autoload.php';

use Twilio\Twiml;

$response = new Twiml();

$response->say($_POST['SpeechResult']);
if (preg_match('/jersey/i', $_POST['SpeechResult'])) {
    $response->say('twenty four willow ave ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('Jersey city ', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('New Jersey zero seven three zero six ', ['voice' => 'woman', 'language' => 'en-US']);

    $from = $_REQUEST['From'];
    $response->sms('The king stay the king.', ['from' => '+16283003802',
        'to' => $from]);
    
    
    
} elseif (preg_match('/newyork/i', $_POST['SpeechResult'])) {
    $response->say('one pace plaza', ['voice' => 'woman', 'language' => 'en-US']);
    $response->say('newyork city', ['voice' => 'woman', 'language' => 'en-US']);
}

// Render the response as XML in reply to the webhook request
header('Content-Type: text/xml');
echo $response;
?>

