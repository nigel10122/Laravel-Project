

<?php



include_once("dbc.php");

if(!empty($_POST['email']) && !empty($_POST['password']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	$t = "select * from registration where email = '$email'";
	
	$query = mysqli_query($con, $t);
	
	$numrow = mysqli_num_rows($query);
	
	if($numrow!=0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
		$db_name = $row['name'];	
		$db_email = $row['email'];
		$db_password = $row['password'];
		$db_number = $row['number'];
		$db_country = $row['country'];
			}
		
		if($email== $db_email && $password == $db_password)
			
		{
			session_start();
			$_SESSION['name']=$db_name;
			$_SESSION['email']=$db_email;
			$_SESSION['passsword']=$db_password;
			$_SESSION['number']=$db_number;
			$_SESSION['country']=$db_country;
			
			header("location:home.php");
		}
		
	
		else
		{
			/*header("location:Inicio de Session.php?feedback=Incorrect Password");*/
			echo("Incorrect Password");
		}
	}
		else
		{
			/*header("location:Inicio de Session.php?feedback= User Does not Exist");*/
			echo("User Does not exist");
		}
}
		else
		{
			/*header("location:Inicio de Session.php?feedback=All fields are required");*/
			echo("All fields are required");
		}
	
	if($email== "admin@gmail.com" && $password == 1234)
		{
		session_start();
		$_SESSION['name']=$db_name;
		$_SESSION['email']=$db_email;
		$_SESSION['passsword']=$db_password;
		$_SESSION['number']=$db_number;
		$_SESSION['country']=$db_country;
			
			header("location:admin.php");
		}
	
		
	

	
	
	
	
	?>