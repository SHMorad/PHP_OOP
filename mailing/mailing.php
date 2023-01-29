<?php

// send E-mail
/* $to = "www.morad5226@gmail.com";
$from = "test@example.com";
$subject = "How is Life";
$body = "Hello \n How are you";
$header= "From: {$from}\r\n";
// $headers = "cc: {$cc}\r\n";
echo mail($to, $subject, $body, $header); */


// send Html E-mail

$to = "www.morad5226@gmail.com";
$from ="test@example.com";
$subject = "How is Life";
$body ="<strong>Hello</strong><br/> কি খবর ..?<br/>";
$body .= "<img src=''>";
$headers="MIME-Version:1.0\r\n";
$headers .= "Content-type:text/html;charset='UTF-8'\r\n";
$headers .= "From: {$from}\r\n";
echo mail($to, $subject, $body, $headers);



?>