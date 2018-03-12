<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'ami99b@gmail.com';
$subject = $_POST['subject'];
$email_message = "Form details below.\n\n";
$email_message .= "From: ".$name."\n";
$email_message .= "Email: ".$email."\n";
$email_message .= "Message: ".$message."\n";
    
$headers = 'From: admin@is-its.com' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $email_message, $headers); //This method sends the mail.
echo "Your email was sent!<br><a href='/'>Close</a>"; // success message
}else{
echo "Invalid Email, please provide an correct email.";
}
?>