<?php
	session_start();
	
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

if(!empty($_POST['event_name'])) 
{
	$event_name = $_POST['event_name'];
	
	
	
	$t = "select * from events where event_name = '$event_name'";
	
	$query = mysqli_query($con, $t);
	
	$numrow = mysqli_num_rows($query);
	
	if($numrow!=0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
		$db_event_name = $row['event_name'];	
		$db_event_date = $row['event_date'];
		$db_event_time = $row['event_time'];
		$db_event_location = $row['event_location'];
		$db_event_description = $row['event_description'];
			header("location:userevents.php");
			}
		
		if($event_name == $db_event_name)
			
		{
			session_start();
			$_SESSION['event_name']=$db_event_name;
			$_SESSION['event_date']=$db_event_date;
			$_SESSION['event_time']=$db_event_time;
			$_SESSION['event_location']=$db_event_location;
			$_SESSION['event_description']=$db_event_description;
			
			header("location:userevents.php");
		}
	}
}
