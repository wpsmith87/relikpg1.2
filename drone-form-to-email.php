<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
//$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'will@relikdesign.com';//<== update the email address
$email_subject = "New Form submission";
$email_body = "You have received a new Drone message from the user $name, their email is $visitor_email.\n".
   // "Here is the message:\n $message".
    
$to = "will@relikdesign.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

$email_subject2 = "Relik Design: Thank You!";
$email_body2 = "Thank you very much for your interest in our Drone Services, please click the link below to schedule a consultation.\n".
    "https://calendly.com/willsrelik/initial-consultation".

$headers2 = "From: $email_from \r\n";
$headers2 .= "Reply-To: $email_from \r\n"; 
//Send the email!
mail($to,$email_subject,$email_body,$headers);
mail($visitor_email,$email_subject2,$email_body2,$headers2);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 