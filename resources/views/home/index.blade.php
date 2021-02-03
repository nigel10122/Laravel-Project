	<!DOCTYPE html>
	<html lang="en">
	<head>
	<title>CSS Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{ asset('frontend') }}/css/ciuad.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
	<body>
	<div class="container_inicio"> 
	<!-- Navigation -->
	<header class="header_inicio"> <a href="">
	<img class="logo" src="{{ asset('frontend') }}/images/Logotipo.png" alt="logo">
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
<br>
	@foreach($data as $item)
	<div> <h1 id="hello1">Welcome {{$item->name}}</h1></div>
	@endforeach
<br><br>
	<ul class="nav nav-pills nav-justified " style="background-color: orange">
    
    <li class="active"><a data-toggle="pill" href="#profile">Profile</a></li>
  
    <li><a  data-toggle="pill" href="#viewevents">VIEW EVENTS</a></li>
    
  
  
	<li><a data-toggle="pill" href="#viewdiscussions">VIEW DISCUSSIONS</a></li>
   
  
  
    <li><a data-toggle="pill" href="#viewteams">VIEW TEAMS</a></li>
   
  
  <li><a href="/iniciodesession">LOGOUT</a></li>
  </ul>
<br><br><br>
  <div class="tab-content">
    <div id="profile" class="tab-pane fade in active" style="text-align: justified;">
	
		
		@foreach($data as $item)
		<table>
		<tr><td><h3>Full Name: {{$item->name}} </h3></td></tr>
		<tr><td><h3>Phone number: {{$item->number}} </h3></td></tr>
		<tr><td><h3>Email id: {{$item->email}}</h3></td></tr>
		<tr><td><h3>Hometown: {{$item->country}}</h3></td></tr>
		<tr><td><h3>Role: User</h3></td></tr>
		</table>
		@endforeach
	</div>

    <div id="viewevents" class="tab-pane fade" style="text-align: justified;">
		<form action="/viewevents" method="get">
		<input type="submit" value="Get Events" style="text-align: center;">

		</form>
		
		
    
	</div>
	<div id="viewdiscussions" class="tab-pane fade" style="text-align: justified;">
	
		
	<form action="/viewdiscussions" method="get">
		<input type="submit" value="Get discussions" style="text-align: center;">
</form>
	</div>
	<div id="viewteams" class="tab-pane fade" style="text-align: justified;">
	
		
	<form action="/viewteams" method="get">
		<input type="submit" value="Get teams" style="text-align: center;">
</form>
	</div>
	</div>
	



	<div class="row">

	<div class="column2_inicio">



	</div>

	<div class="column2_inicio">

		

	</div>


	<div class="column2_inicio">


	</div>


	</div>
	<br><br><br>
	<!-- Footer Section -->
	<section class="footer_main" id="contact_inicio">
	<h2 class="hidden">Footer Banner Section </h2>
	<form  action="/subscribe" method="post">
   {{ csrf_field() }}
	<h2 class="footer_header">Contactate con Nosotros</h2>
	<input id="subsrcibe" type="email" name="subscribe">
	<input value="ENVIAR" type="submit" name="submit" class="button">
	</form> 
	</section>
	<div id="social_icons_footer">
	<a href="#"><img src="../{{ asset('frontend') }}/images/msg_footer.JPG" alt="msg"></a>
	<a href="#"><img src="../{{ asset('frontend') }}/images/twitter_footer - Copy.JPG" alt="twitter"></a>
	<a href="#"><img src="../{{ asset('frontend') }}/images/insta_footer.JPG" alt="insta"></a>


	</div>
	<!-- Copyrights Section -->
	<div class="copyright">Diazapps&copy;2020- <strong>All rights reserved</strong>
	</div>
	</div>

	<!-- Main Container Ends -->
	</body>
	</html>