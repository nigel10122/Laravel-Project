<?php
session_start();
?>


<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio.html</title>
<link href="{{ asset('frontend') }}/css/ciuad.css" rel="stylesheet" type="text/css">
<script src="javascript/ciudad.js" type="text/javascript"></script>	
<!--Script - Validation###########################################################################-->
<script type="text/javascript">

function validation(){
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var error_message_login =document.getElementById("error_message_login")  ;
var text;


if(email.length<5){
text="Please enter valid First name";
error_message_login.innerHTML=text;
return false;
}
print_r(console.log);
if(password.length<4){
text="Please enter atleast 4 charecters";
error_message_login.innerHTML=text;
return false;
}
alert("Form Submitted Successfully!")
return true;
}

function validation_signup(){
var name =document.getElementById("name").value;

var email =document.getElementById("email").value;

var password =document.getElementById("password").value;
var number =document.getElementById("number").value;
var country =document.getElementById("country").value;
var error_message =document.getElementById("error_message")  ;
var text;

if(name.length<5){
text="Please enter valid First name";
error_message.innerHTML=text;
return false;
}
/*if (reg.test(emails)){
 return true; }
 else{
 return false;
}*/

if(email.indexOf("@")==-1||email.length<6){
text="Please Enter valid Email";
error_message.innerHTML=text;
return false;
}
if(password.length<4){
text="Please enter valid password";
error_message.innerHTML=text;
return false;
}
if(number.length<10){
text="Please enter valid user name";
error_message.innerHTML=text;
return false;
}
if(country.length<100){
text="Please enter valid user name";
error_message.innerHTML=text;
return false;
}


alert("Form Submitted Successfully!")
return true;
}
</script>
</head>
<body>
<!-- Main Container -->
<div class="container_inicio"> 
  <!-- Navigation -->
  <header class="header_inicio"> <a href="">
    <img class="logo" src="{{ asset('frontend') }}/images/Logotipo.png" alt="logo">
    </a>
    <nav>
      <ul>
        <li><a href="/inicio">INICIO</a></li>
        <li><a href="/nosotros">NOSOTROS</a></li>
        <li> <a href="/equipos">EQUIPOS</a></li>
		<li><a href="http://ndd9444.uta.cloud">BLOG</a></li>
        <li><a href="/contacto">CONTACTO</a></li>
        <li> <a class="active" href="#popup1">INICIO DE SESSION</a></li>  
      </ul>
    </nav>
  </header>
	
  <!-- Section  ###############################################HEADER-HOMEPAGE-LOGO-SECTION-START###################################################################-->
  <section class="hero_inicio" id="hero_inicio">
  <h2 class="hero_header_inicio">  GENETE <span class="light_inicio">Y CIUDAD</span></h2>
  <h4 class="tagline_inicio">
  <pre> 
 Buscamos marcar un punto de partida para la transformación de nuestras
 dificultades y diferencias en cimientos firmes que, desde las ciudades,
 requieren nuestros países latinoamericanos para convertirse en los mejores
 lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino
 por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de
 vida y asegurar los derechos de las futuras generaciones.</pre></h4>
  </section>
  <!-- Section  ###############################################HEADER-HOMEPAGE-LOGO-SECTION--END###################################################################-->	
  

	<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Inicio de <i id="col"> Sesion </i></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			<i><strong><div id="error_message_login" style="color:red; background-color:black;"></div></strong></i>
			<form   name="inciciodesessionloginform" action="/login"  method="post" onsubmit="return validation()">
			{{ csrf_field() }}
				<hr>
				<label>Correo</label>
				<p>
				<input id="iniciodesession_email" id="email" type="email" name="email">
			</p>
				<label>Contrasena</label>
				<p>
				<input id="iniciodesession_password" id="password" type="password"  name="password">
			</p>
			<hr>
			<button onClick="incio_desession_login()">ENVIAR</button> 
		    </form>
	
				
			
		</div>
	</div>
</div>  
	  
	  
	  
	  
	  
    
<br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
  <!-- Footer Section -->
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
		<a href="#"><img src="{{ asset('frontend') }}/images/msg_footer.JPG" alt="msg"></a>
		<a href="#"><img src="{{ asset('frontend') }}/images/twitter_footer - Copy.JPG" alt="twitter"></a>
		<a href="#"><img src="{{ asset('frontend') }}/images/insta_footer.JPG" alt="insta"></a>
	
	
	</div>
  <!-- Copyrights Section -->
  <div class="copyright">Diazapps&copy;2020- <strong>All rights reserved</strong>
	</div>
	
</div>
<!-- Main Container Ends -->
</body>
</html>
