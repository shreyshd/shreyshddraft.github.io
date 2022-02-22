<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'gvasireddy04@gmail.com';
    
$email_subject = 'New Contact Request';

$email_body = "Contact Info: .\n".  "Name: $name.\n". "Email: $email.\n". "Message: $message.\n";


$to =  'karthikchilakapati2005@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: ")

?>