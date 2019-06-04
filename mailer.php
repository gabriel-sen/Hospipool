<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

$name = $_POST['name'];
$from = $_POST['mail'];
$object = $_POST['object'];
$message = $_POST['message'];


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
    ->setUsername(USERNAME)
    ->setPassword(PWD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('[Hospipool message] '.$object))
    ->setFrom($from)
    ->setTo('deadpool.hospipool@gmail.com')
    ->setBody('message de '. $name . '(' . $from . ') : ' . $message)
;


// Send the message
    $result = $mailer->send($message);
header('location:/');