<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

$contact_number = $_POST['contact_number'];
$contact_email = $_POST['contact_email'];
$contact_issue = $_POST['contact_issue'];
$contact_description = $_POST['contact_description'];



$s = " select * from  contact where contact_number = '$contact_number' " ;

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Enter a valid number";
}
elseif($contact_number == '')
{
	echo "Enter a valid number";
	
}
elseif(strlen($contact_number < 10 ) )
{
	echo("Mobile Number should be atleast 10 characters");
 
	}
elseif($contact_issue == '' )
{
	echo("Please enter a issue");
 
	}
elseif($contact_description == '')
{
	echo("Please enter a description");
 
	}
else{
	$reg = "insert into contact(contact_number, contact_email, contact_issue, contact_description)values('$contact_number','$contact_email', '$contact_issue', '$contact_description')";
	
	mysqli_query($con, $reg);
	
	$to = $contact_email;
	$subject = "CONTACT CONFIRMATION";
	$message = "<h1>WE WILL CONTACT YOU SHORTLY</h1>";
	$headers = "From: ciudad.gente@gmail.com \r\n";
	/*$headers .= "MIME-VERSION: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset-UTF-8". "\r\n";*/
	
	mail($to, $subject, $message, $headers);
	
	echo "<h1>Contact Successful</h1>";
	
	
	}



?>





















