<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];

$to = "vijaynannapuraju@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone Number =" . $number;
$headers = "From: noreply@vijayn7.github.io" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>