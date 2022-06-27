<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "joyprince942003@gmail.com";
$subject = "Mail From VedhanthiTechnologies.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone Number = " . $phone . "\r\n Message =" . $message;
$headers = "From: form@vedhanthitechnologies.com" . "\r\n" .
"CC: somebodyelse@example.com";

//redirect
header("Location:thankyou.html");
?>