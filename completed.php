<?php

$response->say('Sorry, I don\'t understand that choice.');
require_once './vendor/autoload.php';

use Twilio\Twiml;

$response = new Twiml();
$response->say('Sorry, I don\'t understand that choice.');
?>
