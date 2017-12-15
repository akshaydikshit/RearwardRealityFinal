<?php

require_once './vendor/autoload.php';



use Twilio\Twiml;

$response = new Twiml();
$response->say('FETCHING CAT', ['voice' => 'woman', 'language' => 'en']);


switch ($_REQUEST['SpeechResult']) {
    case 'cat':
      $response->say('FETCHING CAT', ['voice' => 'woman', 'language' => 'en']);
        break;
    case 'CAT':
      $response->say('FETCHING CAT', ['voice' => 'woman', 'language' => 'en']);
        break;
    case 'Cat':
      $response->say('FETCHING CAT', ['voice' => 'woman', 'language' => 'en']);
        break;
    case 'number':
        $response->say('Fetching Number!');
        break;
}
?>

