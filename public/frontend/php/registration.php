<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$country = $_POST['country'];



$s = " select * from  registration where email = '$email' " ;

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Email already taken";
}
elseif($password == '')
{
	echo "Enter a password";
	
}
elseif(strlen($password < 4 ) )
{
	echo("Password should be atleast 4 characters");
 
	}
elseif($number == '' )
{
	echo("Please enter a number");
 
	}
elseif($country == '')
{
	echo("Please select a country");
 
	}
else{
	$reg = "insert into registration(name, email, password, number, country)values('$name','$email', '$password', '$number', '$country')";
	
	mysqli_query($con, $reg);
	
	$to = $email;
	$subject = "EMAIL VERIFICATION";
	$message = "<a> <br> Click here to verify <br> https://ciudad.org/md5/vkey/&20%&20%%%/verified/ <br></a>";
	$headers = "From: ciudad.gente@gmail.com\r\n";
	/*$headers .= "MIME-VERSION: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset-UTF-8". "\r\n";*/
	
	mail($to, $subject, $message, $headers);
	
	echo "Registration Successful";
	
	
	}



?>





















