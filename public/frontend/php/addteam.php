<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

$team_name = $_POST['team_name'];
$team_email = $_POST['team_email'];
$team_number = $_POST['team_number'];
$team_country = $_POST['team_country'];


$t = " select * from teams where team_name = '$team_name' " ;

$res = mysqli_query($con, $t);

$n = mysqli_num_rows($res);

if($n == 1)
{
	echo "Team name already taken";
}
else{
	$teams = "insert into teams(team_name, team_email, team_number, team_country)values('$team_name','$team_email', '$team_number', '$team_country')";
	
	mysqli_query($con, $teams);
	
	echo "Team added Successful";
	
}
 ?>















