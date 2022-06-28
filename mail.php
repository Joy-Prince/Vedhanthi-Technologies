<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone-number'];
$message= $_POST['message'];
$to = "joyprince942003@gmail.com";
$subject = "Mail From VedhanthiTechnologies.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone Number = " . $phone . "\r\n Message =" . $message;
$headers = "From: form@vedhanthitechnologies.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>