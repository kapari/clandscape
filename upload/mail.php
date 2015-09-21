<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];

$msg = "

Name: $name
Email: $email
Phone: $phone
Comments: 
$message
";

$to = "ariel@arielkaplan.com";
$subject = "Website Contact";
$message = $msg;
$headers = "Website Contact";
mail($to,$subject,$message,$headers);

?>