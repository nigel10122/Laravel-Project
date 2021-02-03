<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Light Theme</title>
<link href="{{ asset('frontend') }}/css/ciuad.css" rel="stylesheet" type="text/css">

</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <header class="header_main"> <a href="">
    <img class="logo" src="{{ asset('frontend') }}/images/Logotipo.png" alt="logo">
    </a>
    <nav>
      <ul>
        <li><a href="/inicio">INICIO</a></li>
        <li><a href="/nosotros">NOSOTROS</a></li>
        <li> <a href="/equipos">EQUIPOS</a></li>
		<li><a href="http://ndd9444.uta.cloud">BLOG</a></li>
        <li><a class="active" href="contacto">CONTACTO</a></li>
        <li> <a href="/iniciodesession">INICIO DE SESSION</a></li>  
      </ul>
    </nav>
  </header>
	
  
   <!-- header  ###############################################HEADER-HOMEPAGE-LOGO-SECTION-START###################################################################-->
  <section class="hero_main" id="hero">
    <h2 class="hero_header_main">CONTACT US <span class="light_main"></span></h2><br>
	<h3 class="hero_header_main"> HOME &gt; CONTACT US</h3>  
    <p class="tagline_equipos">
  </p>
  </section>
	
	
	<!-- about######################################################################################-->
	
	<div class="gallery_contacto">
		
	<h2 id="nuestras_contacto">NUESTRAS <span id="redes"><i>REDES <br><u>SO</u>CIALES</i></span></h2>
	<h2 id="formulario">FORMULARIO DE <span id="contacto"><i><br>
    <u>CO</u>NTACTO</i></span></h2>
      
    <div class="thumbnail_contacto"> <a href="#"><img src="{{ asset('frontend') }}/images/insta2.JPG" alt=""  class="cards_social_contacto"/></a>
      <h3><a  id="insta_label" href="#">@genteyciudadorg</a></h3><br><br>
		
	  <img id="call" src="{{ asset('frontend') }}/images/call.jpg"  alt="insta" class="cards_social_contacto">
		<div id="call_label">
		<a href="#">001 346 714 3892</a><br>
		<a href="#">058 414 8225881</a><br>
		<a href="#">056 933948007</a>
		</div>
    </div>
	
    <div class="thumbnail_contacto"> <a href="#"><img src="{{ asset('frontend') }}/images/twitter.jpg" alt="" width="2000" class="cards_social_contacto"/></a>
      <h3><a  id="twitter_label" href="#">@genteyciudadorg</a></h3><br><br>
		<img id="mail" src="{{ asset('frontend') }}/images/mail.jpg"  alt="insta" class="cards_social_contacto">
		<h3><a  id="mail_label" href="#">info@genteyciudadorg</a></h3>
	  
    </div>
	
    <div class="thumbnail_contacto">
		
		<form id="form1" method="post" action="/contactme">
		{{ csrf_field() }}
		<label>Tu Nombre(requerido)</label><br>
		<input id="input_1" type="number" name="contact_number"><br><br>
		<label>Tu Correo(reuerido)</label><br>
		<input id="input_2" type="email" name="contact_email"><br><br>
		<label>Asunto</label><br>
		<input id="input_3" type="text" name="contact_issue"><br><br>
		<label>Asunto</label><br>
		<input id="comment" type="text" name="contact_description"><br><br>
		<input value="ENVIAR" type="submit" name="submit" class="button">
	  </form>
    
	  
    </div>
    
  </div>
	
	    
	
	
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