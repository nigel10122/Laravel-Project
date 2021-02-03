


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
	<style>
table, th, td {
  border: 1px solid black;
}
</style>
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
	
	<!--<div> <h1 id="hello1">Welcome Admin</h1></div>-->
	
<br><br>
	<ul class="nav nav-pills nav-justified " style="background-color: orange">
    
    <li ><a  href="/admin">Profile</a></li>
  <li class="dropdown ">
    <a class="dropdown-toggle" data-toggle="dropdown"  href="#">EVENTS
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a data-toggle="pill"  href="#insertevents">INSERT EVENT</a></li>
      <li><a data-toggle="pill"  href="#updateevents">UPDATE EVENT</a></li>
      <li><a data-toggle="pill"  href="#deleteevents">DELETE EVENT</a></li>
    </ul>
  </li>
  <li class="dropdown active">
    <a class="dropdown-toggle" data-toggle="dropdown"  href="#">DISCUSSIONS
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a data-toggle="pill" href="#insertdiscussions">INSERT DISCUSSION</a></li>
      <li><a data-toggle="pill" href="#updatediscussions">UPDATE DISCUSSION</a></li>
      <li><a data-toggle="pill" href="#deletediscussions">DELETE DISCUSSION</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown"  href="#">TEAMS
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a data-toggle="pill" href="#insertteams">INSERT TEAMS</a></li>
      <li><a data-toggle="pill" href="#updateteams">UPDATE TEAMS</a></li>
      <li><a data-toggle="pill" href="#deleteteams">DELETE TEAMS</a></li>
    </ul>
  </li>
  <li><a href="/iniciodesession">LOGOUT</a></li>
  </ul>

  <div class="tab-content">
    <div id="profile" class="tab-pane fade " style="text-align: justified;">
	
	
		<h3>Full Name: ndd9444 </h3>
		<h3>Phone number: 4693325344 </h3>
		<h3>Email id: ciudad.gente@gmail.com</h3>
		<h3>Hometown: India</h3>
		<h3>Role: Admin</h3>
		
		
		
	
	</div>

    <div id="insertevents" class="tab-pane fade">
	
	<form action="/insertevents" method="post">
	{{ csrf_field() }}
  <label for="e_name">Event name:</label><br>
  <input type="text" id="event_name" name="event_name"><br>
  
	<label for="date">Date:</label><br>
  <input type="date" id="event_date" name="event_date"><br>
	
		<label for="time">Time:</label><br>
  <input type="time" id="event_time" name="event_time"><br>
	
	<label for="e_location">Location:</label><br>
  <input type="text" id="event_location" name="event_location"><br>
	
	<label for="e_description">Description:</label><br>
  <input type="text" id="event_description" name="event_description"><br><br>
	
  <input type="submit" value="Add Event">

</form>

	</div>
	
    <div id="updateevents" class="tab-pane fade">
	
	<form action="/updateevents" method="post">
	{{ csrf_field() }}
	<label for="e_name">Event id:</label><br>
  <input type="text" id="event_name" name="id"><br>
  <label for="e_name">Event name:</label><br>
  <input type="text" id="event_name" name="event_name"><br>
  
	<label for="date">Date:</label><br>
  <input type="date" id="event_date" name="event_date"><br>
	
		<label for="time">Time:</label><br>
  <input type="time" id="event_time" name="event_time"><br>
	
	<label for="e_location">Location:</label><br>
  <input type="text" id="event_location" name="event_location"><br>
	
	<label for="e_description">Description:</label><br>
  <input type="text" id="event_description" name="event_description"><br><br>
	
  <input type="submit" value="Update Event">
 
</form>
	</div>
	
    <div id="deleteevents" class="tab-pane fade">
	<form action="/deleteevents" method="post">
	{{ csrf_field() }}
  <label for="e_name">Event id:</label><br>
  <input type="text" id="event_name" name="id"><br>
  
	
  <input type="submit" value="Delete Event">
</form>
	</div>
	<div id="insertdiscussions" class="tab-pane fade">
	<form action="/insertdiscussions" method="post">
	{{ csrf_field() }}
  <label for="e_name">discussion name:</label><br>
  <input type="text" id="discussion_name" name="discussion_name"><br>
  
	<label for="date">Date:</label><br>
  <input type="date" id="discussion_date" name="discussion_date"><br>
	
		<label for="time">Time:</label><br>
  <input type="time" id="discussion_time" name="discussion_time"><br>
	
	<label for="e_location">Location:</label><br>
  <input type="text" id="discussion_location" name="discussion_location"><br>
	
	<label for="e_description">Description:</label><br>
  <input type="text" id="discussion_description" name="discussion_description"><br><br>
	
  <input type="submit" value="Add discussion">

</form>
    </div>
    <div id="updatediscussions" class="tab-pane fade in active">
	<form action="/updatediscussions" method="post">
	{{ csrf_field() }}
	<label for="e_name">discussion id:</label><br>
  <input type="text" id="discussion_name" name="id"><br>
  <label for="e_name">discussion name:</label><br>
  <input type="text" id="discussion_name" name="discussion_name"><br>
  
	<label for="date">Date:</label><br>
  <input type="date" id="discussion_date" name="discussion_date"><br>
	
		<label for="time">Time:</label><br>
  <input type="time" id="discussion_time" name="discussion_time"><br>
	
	<label for="e_location">Location:</label><br>
  <input type="text" id="discussion_location" name="discussion_location"><br>
	
	<label for="e_description">Description:</label><br>
  <input type="text" id="discussion_description" name="discussion_description"><br><br>
	
  <input type="submit" value="Update discussion">
 
</form>
@if(count($errors)>0)
        <ul>
          @foreach($errors->all() as $error)
          <li class="alert alert-danger">{{$error}}</li>
          @endforeach
		</ul>
	@else	
	@foreach($data as $item)
		<table class="table table-dark">
			<tr>
			<th>discussion id</th>
            <th>discussion Name</th>
			<th>discussion date</th>
			<th>discussion time</th>
			<th>discussion location</th>
			<th>discussion Description</th>
           </tr>
        <tr>   
		<td>{{$item->id}} </td>
		<td>{{$item->discussion_name}} </td>
        <td>{{$item->discussion_date}} </td>
        <td>{{$item->discussion_time}} </td>
		<td>{{$item->discussion_location}}</td>
		<td>{{$item->discussion_description}}</td>
		</tr>
		</table>
		@endforeach
    @endif

    </div>
    <div id="deletediscussions" class="tab-pane fade">
	<form action="/deletediscussions" method="post">
	{{ csrf_field() }}
  <label for="e_name">discussion id:</label><br>
  <input type="text" id="discussion_name" name="id"><br>
  
	
  <input type="submit" value="Delete discussion">
</form>
	</div>
	<div id="insertteams" class="tab-pane fade">
	<form action="/insertteams" method="post">
	{{ csrf_field() }}
  <label for="e_name">team name:</label><br>
  <input type="text" id="team_name" name="team_name"><br>
  
	<label for="date">Date:</label><br>
  <input type="date" id="team_date" name="team_date"><br>
	
		<label for="time">Time:</label><br>
  <input type="time" id="team_time" name="team_time"><br>
	
	<label for="e_location">Location:</label><br>
  <input type="text" id="team_location" name="team_location"><br>
	
	<label for="e_description">Description:</label><br>
  <input type="text" id="team_description" name="team_description"><br><br>
	
  <input type="submit" value="Add team">

</form>

	</div>
	
    <div id="updateteams" class="tab-pane fade">
	<form action="/updateteams" method="post">
	{{ csrf_field() }}
	<label for="e_name">team id:</label><br>
  <input type="text" id="team_name" name="id"><br>
  <label for="e_name">team name:</label><br>
  <input type="text" id="team_name" name="team_name"><br>
  
	<label for="date">Date:</label><br>
  <input type="date" id="team_date" name="team_date"><br>
	
		<label for="time">Time:</label><br>
  <input type="time" id="team_time" name="team_time"><br>
	
	<label for="e_location">Location:</label><br>
  <input type="text" id="team_location" name="team_location"><br>
	
	<label for="e_description">Description:</label><br>
  <input type="text" id="team_description" name="team_description"><br><br>
	
  <input type="submit" value="Update team">
 
</form>
    </div>
    <div id="deleteteams" class="tab-pane fade">
	<form action="/deleteteams" method="post">
	{{ csrf_field() }}
  <label for="e_name">team id:</label><br>
  <input type="text" id="team_name" name="id"><br>
  
	
  <input type="submit" value="Delete team">
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
