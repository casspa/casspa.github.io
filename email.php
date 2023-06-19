<?php
if(!isset($_POST['submit']))
{
	echo "Error! You need to submit the form!";
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

//validation
if(empty($name)||empty($email))
{
	echo "Name and Email are Mandatory!";
	exit;
}

$email_from = 'casspapag@outlook.com';
$email_subject = "New Form Submission";
$email_body = "You have received an email from $name.\n". 
							"Email Address: $email\n".
							"Message: \n $message".

$to = 'casspapag@outlook.com';
$headers = "From $email_from \r\n";

//Send
mail(to,subject,message,headers);
