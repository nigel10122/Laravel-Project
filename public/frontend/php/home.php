<?php
	session_start();
	

	?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/ciuad.css">

</head>
<body>
<div class="container_inicio"> 
  <!-- Navigation -->
  <header class="header_inicio"> <a href="">
    <img class="logo" src="images/Logotipo.png" alt="logo">
    </a>
    <nav>
      <ul>
        <li><a href="Inicio.php">INICIO</a></li>
        <li><a href="Nosotros.html">NOSOTROS</a></li>
        <li> <a href="Equipos.html">EQUIPOS</a></li>
		<li><a href="http://ndd9444.uta.cloud">BLOG</a></li>
        <li><a href="Contacto.html">CONTACTO</a></li>
        <li> <a href="Inicio de Session.php">INICIO DE SESSION</a></li>  
      </ul>
    </nav>
  </header>



<section class="hero_inicio" id="hero_inicio">
    <h2 class="hero_header_inicio">GENETE <span class="light_inicio">Y CIUDAD</span></h2>
    <p class="tagline_inicio">
   Buscamos marcar un punto de partida para la transformación de nuestras
   dificultades y diferencias en cimientos firmes que, desde las ciudades,
   requieren nuestros países latinoamericanos para convertirse en los mejores
   lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino
   por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de
   vida y asegurar los derechos de las futuras generaciones.</p>
  </section>
	<div> <h1 id="hello1">Welcome <?php echo $_SESSION['name'];?></h1></div>
	

	<div class="row">

	<div class="column2_inicio">
		
		<div class="vertical-menu">
		  <a href="logout.php">LOGOUT</a>
		  <a class="active" href="home.php" >Profile</a>
		  <a href="userevents.php">Events participated in</a>
		  <a href="../after_login_user_discussions.php">Discussions contributed to</a>
		  <a href="userteams.php">View teams</a>	
		  
		</div>
		
		</div>

	<div class="column2_inicio">
		<?php if(isset($_SESSION['email']))
{
	
	
	?>
		<div id="profile">
			
	
	<tr><td><h3>Full Name: <?php echo $_SESSION['name'];?></h3></td></tr>
	<tr><td><h3>Phone number: <?php echo $_SESSION['number'];?></h3></td></tr>
	<tr><td><h3>Email id: <?php echo $_SESSION['email'];?></h3></td></tr>
	<tr><td><h3>Hometown: <?php echo $_SESSION['country']?></h3></td></tr>
	<tr><td><h3>Role: User</h3></td></tr>
		</div>		
<?php 
}
		?>	
</div>


	<div class="column2_inicio">
  		

	</div>


</div>
<!-- Footer Section -->
  <section class="footer_main" id="contact_inicio">
    <h2 class="hidden">Footer Banner Section </h2>
	 <form method="post" action="php/subscribe.php">
    <h2 class="footer_header">Contactate con Nosotros</h2>
	<input id="subsrcibe" type="email" name="subscribe">
	<input value="ENVIAR" type="submit" name="submit" class="button">
		 </form> 
  </section>
	<div id="social_icons_footer">
		<a href="#"><img src="../images/msg_footer.JPG" alt="msg"></a>
		<a href="#"><img src="../images/twitter_footer - Copy.JPG" alt="twitter"></a>
		<a href="#"><img src="../images/insta_footer.JPG" alt="insta"></a>
	
	
	</div>
  <!-- Copyrights Section -->
  <div class="copyright">Diazapps&copy;2020- <strong>All rights reserved</strong>
	</div>
</div>
	
<!-- Main Container Ends -->
</body>
</html>