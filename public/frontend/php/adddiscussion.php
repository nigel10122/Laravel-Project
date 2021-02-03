<?php

session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

$discussion_name = $_POST['discussion_name'];
$discussion_date = $_POST['discussion_date'];
$discussion_time = $_POST['discussion_time'];
$discussion_description = $_POST['discussion_description'];

$t = " select * from discussions where discussion_name = '$discussion_name' " ;

$res = mysqli_query($con, $t);

$n = mysqli_num_rows($res);

if($n == 1)
{
	echo "discussion name already taken";
}
else{
	$discussions = "insert into discussions(discussion_name, discussion_date, discussion_time,  discussion_description)values('$discussion_name','$discussion_date', '$discussion_time', '$discussion_description')";
	
	mysqli_query($con, $discussions);
	
	echo "Discussion added Successful";
	
}
 ?>















