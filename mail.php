<?php

$name = $_POST ['name'];
$email = $_POST ['emailaddress'];
$message = $_POST['message'];

$to = 'franzdacara25@gmail.com';

$subject = "Mail From website";
$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message = " . $message ;

$headers = "From: noreply@yoursite.com" . "\r\n " . "CC: Sombodyelse@example.com";
if($email != NULL){
    mail($to,$subject,$txt,$headers)
}
header("Location: thankyou.html");
?>
