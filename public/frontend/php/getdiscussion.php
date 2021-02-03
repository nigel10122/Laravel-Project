<?php
	session_start();
	
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

if(!empty($_POST['discussion_name'])) 
{
	$discussion_name = $_POST['discussion_name'];
	
	
	
	$t = "select * from discussions where discussion_name = '$discussion_name'";
	
	$query = mysqli_query($con, $t);
	
	$numrow = mysqli_num_rows($query);
	
	if($numrow!=0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
		$db_discussion_name = $row['discussion_name'];	
		$db_discussion_date = $row['discussion_date'];
		$db_discussion_time = $row['discussion_time'];
		$db_discussion_description = $row['discussion_description'];
			
			header("location:../after_login_user_discussions.php");
			}
		
		if($discussion_name == $db_discussion_name)
			
		{
			session_start();
			$_SESSION['discussion_name']=$db_discussion_name;
			$_SESSION['discussion_date']=$db_discussion_date;
			$_SESSION['discussion_time']=$db_discussion_time;
			$_SESSION['discussion_description']=$db_discussion_description;
			
			header("location:../after_login_user_discussions.php");
		}
	}
}
