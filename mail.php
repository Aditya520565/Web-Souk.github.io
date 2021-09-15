<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject= $_POST['Subject'];
$to = "Modanwaladi@gmail.com";
$subject = "Mail From Web-Souk";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject =" . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@Web-Souk.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>