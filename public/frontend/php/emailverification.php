<?php

if(isset($_GET['vkey']))
{
	$vkey = $_GET['vkey'];
	
	$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');
	
$s = " select * from  registration where verified = 0 && vkey = $vkey LIMIT 1 ";	
	
	if($s->num_rows == 1)
	{
		 
	}
	
}
else{
	die("Something went wrong");
}

?>