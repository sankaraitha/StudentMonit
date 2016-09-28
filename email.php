<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: [email]sender@sender.com[/email]' . "\r\n";

mail("sankaraitha@gmail..com", "Test mail", "Test body", $headers);
?>
