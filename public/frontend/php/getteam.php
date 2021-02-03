<?php
	session_start();
	
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

if(!empty($_POST['team_name'])) 
{
	$team_name = $_POST['team_name'];
	
	
	
	$t = "select * from teams where team_name = '$team_name'";
	
	$query = mysqli_query($con, $t);
	
	$numrow = mysqli_num_rows($query);
	
	if($numrow!=0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
		$db_team_name = $row['team_name'];	
		$db_team_email = $row['team_email'];
		$db_team_number = $row['team_number'];
		$db_team_country = $row['team_country'];
	
			header("location:userteams.php");
			}
		
		if($team_name == $db_team_name)
			
		{
			session_start();
			$_SESSION['team_name']=$db_team_name;
			$_SESSION['team_email']=$db_team_email;
			$_SESSION['team_number']=$db_team_number;
			$_SESSION['team_country']=$db_team_country;
			
			
			header("location:userteams.php");
		}
	}
}
