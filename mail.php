<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "shubhamojha4444@gmail.com";
$subject = "Mail From Nss website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: saurabhojha065@gamil.com" . "\r\n" .
"CC: saurabhojha065@gamil.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:th.html");
?>