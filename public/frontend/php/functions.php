<?php



function getUsersData($id)
{



$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');

	
	$array = array();
	$f = "select * from registration where id = '$id'";
	
	$query = mysqli_query($con, $f);
	$q = mysqli_fetch_assoc($query);
	
	while($r = $q)
	{
		$array['id'] = $r['id'];
		$array['name'] = $r['name'];
		$array['email'] = $r['email'];
		$array['number'] = $r['number'];
		$array['country'] = $r['country'];
	}
	
	return $array;
	
}

function getId($email)
{
	$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'registrationform_inicio');
	
	$f = "select * from registration where email = '$email'";
	
	$query = mysqli_query($con, $f);
	$q = mysqli_fetch_assoc($query);
	
	
	while($r = $q)
	{
		return $r['id'];
	}
	
	
}
	



?>