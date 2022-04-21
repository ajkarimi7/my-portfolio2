<?php 
if(!isset($_POST['submit']))
{
    echo "error; you need to submit the form!";
}

$name = $_Post['name'];
$visitor_email = $_Post['email'];
$message = $_Post['message'];
$subject = $_Post['subject'];

if(empty($name)||empty($visitor_email))
{
    echo "Name and email are required";
    exit;
}

$email_from = 'ajkarimi7@gmail.com';
$email_subject = 'New Form submission';
$email_body = "You have received a new message from $name.\n"
    "email address: $visitor_email\n" 
    "Here is the message:  $message"

$to = "ajkarimi7@gmail.com";
$headers = "From: $email_from \r\n";

//Send the email
mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page
header('Location: contact-form-thank.you.html');


