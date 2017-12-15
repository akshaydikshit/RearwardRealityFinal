<?php

require_once './vendor/autoload.php';



use Twilio\Twiml;

$response = new Twiml();
$response->say('Chapeau!', ['voice' => 'woman', 'language' => 'fr']);

echo $response;
$response->say('Fetching Cat!');
switch ($_REQUEST['SpeechResult']) {
    case 'cat':
        $response->say('Fetching Cat!');
        break;
    case 'CAT':
        $response->say('Fetching ALL Cat!');
        break;
    case 'Cat':
        $response->say('Fetching one Cat!');
        break;
    case 'number':
        $response->say('Fetching Number!');
        break;
}
?>

