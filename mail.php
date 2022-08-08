<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "hansenlobo07@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "Phone = ". $phone . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From:hansenlobo07@gmail.com" . "\r\n" .
"CC: hansenlobo07@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
?>