<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

$event_name = $_POST['event_name'];
$event_date = $_POST['event_date'];
$event_time = $_POST['event_time'];
$event_location = $_POST['event_location'];
$event_description = $_POST['event_description'];

$t = " select * from events where event_name = '$event_name' " ;

$res = mysqli_query($con, $t);

$n = mysqli_num_rows($res);

if($n == 1)
{
	echo "event name already taken";
}
else{
	$events = "insert into events(event_name, event_date, event_time, event_location, event_description)values('$event_name','$event_date', '$event_time', '$event_location', '$event_description')";
	
	mysqli_query($con, $events);
	
	echo "Event added Successful";
	
}
 ?>















