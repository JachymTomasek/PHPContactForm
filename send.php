<?php

$to = "your-superemail@your-superdomain.org"; // To: e-mail
$from = "From: ".$_POST['email']."\r\nReply-To: ".$_POST['email']."\r\n"; // From: e-mail, Reply: e-mail
$subject = "E-mail from ".$_POST['name']."";
$text= $_POST['text'];
$message = "Name: ".$_POST['name']."\nE-mail: ".$_POST['email']."\nWeb: ".$_POST['web']."\n\nText:\n".$_POST['text']."\n";

mail ($to, $subject, $message, $from); // send the e-mail

?>
    
<html>
  <head>
    <title>Sent</title>
  </head>
  <body>
    <p>Message sent.</p>
  </body>
</html>
