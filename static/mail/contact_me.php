<?php
// Check for empty fields
if(empty($_POST['Martin'])  		||
   empty($_POST['martinowen555@gmail.com']) 		||
   empty($_POST['+254700775787']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['martinowen555@gmail.com'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['Martin']));
$email_address = strip_tags(htmlspecialchars($_POST['martinowen555@gmail.com']));
$phone = strip_tags(htmlspecialchars($_POST['+254700775787']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'martinowen555@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $Martin";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@domain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
