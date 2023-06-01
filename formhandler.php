<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$email_from = 'hanaabdulla@ug.cusat.ac.in';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Contact: $contact.\n".
                "User Message: $message.\n";


$to = 'hanaabdulla12345@gmail';
$headers = "From: $email_from \r\n";  
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);       
header("Location: contact.html");       
?>