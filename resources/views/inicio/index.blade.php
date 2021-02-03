


<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="true">	
<title>Inicio.html</title>
<link href="{{ asset('frontend') }}/css/ciuad.css" rel="stylesheet" type="text/css">
<link href="{{ asset('frontend') }}/css/custom.css" rel="stylesheet" type="text/css">




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<script src="javascript/ciudad.js" type="text/javascript"></script>		
<!--Script - Validation###########################################################################-->
<script type="text/javascript">
function validation(){
var email =document.getElementById("email").value;
var password =document.getElementById("password").value;
var error_message_login =document.getElementById("error_message_login")  ;
var text;


if(email.length<5){
alert("Please enter valid First name");
error_message_login.innerHTML=text;
return false;
}

print_r(console.log);
if(password.length<4){
alert("Please enter atleast 4 charecters");
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
alert("Please enter valid First name");
//error_message.innerHTML=text;
return false;
}
/*if (reg.test(emails)){
 return true; }
 else{
 return false;
}*/

if(email.indexOf("@")==-1||email.length<6){
alert("Please Enter valid Email");
//error_message.innerHTML=text;
return false;
}

if(password.length<4){
alert("Please enter valid password");
//error_message.innerHTML=text;
return false;
}
if(number.length<10){
alert("Please enter valid number ");
//error_message.innerHTML=text;
return false;
}




return true;
}
</script>
</head>
<body>

<!-- Main Container -->
<div class="container_inicio"> 
  <!-- Navigation -->
  @if(count($errors)>0)
        <ul>
          @foreach($errors->all() as $error)
          <li class="alert alert-danger">{{$error}}</li>
          @endforeach
        </ul>
    @endif
  <header class="header_inicio"> <a href="">
    <img class="logo" src="{{ asset('frontend') }}/images/Logotipo.png" alt="logo">
    </a>
    <nav>
      <ul>
        <li><a class="active" href="inicio">INICIO</a></li>
        <li><a href="/nosotros">NOSOTROS</a></li>
        <li> <a href="/equipos">EQUIPOS</a></li>
		<li><a href="http://ndd9444.uta.cloud">BLOG</a></li>
        <li><a href="/contacto">CONTACTO</a></li>
        <li> <a href="/iniciodesession">INICIO DE SESSION</a></li>  
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
  <!-- Section  ###############################################1--START###################################################################-->
  <section class="about_inicio" id="about_inicio">
    <h2 class="hidden">about_inicio</h2>
    <p class="text_column_inicio"> </p>
	
<div id="text_column_inicio2">
<h2>Objectivos</h2>		
<p>Realizar investigaciones, estudios y propuestas legislativas, relacionados con la gestión de los
gobierno locales para el desarrollo sostenible.
Formular proyectos para promover la participación ciudadana en iniciativas locales para la 
sostenibilidad.
Desarrollar programas de capacitación en las áreas de participación ciudadana local y gobierno 
abierto para la sostenibilidad.
Promover iniciativas de responsabilidad social y voluntariado, como espacios de participación 
ciudadana
Implementar campañas de sensibilización para motivar en la audiencia el ejercicio activo de la
ciudadanía como eje fundamental para la transformación de las ciudades
		</p>
	</div>
    <p class="text_column_inicio"> </p>
  </section>
	<!-- Section  ###############################################1--END###################################################################-->
	
	<!-- Section  ###############################################2-START#######################################################################################-->
  <section class="about_inicio" >
    <h2 class="hidden">about_inicio</h2>
    <div class="text_column_inicio"> 
		<h2><u>CA</u>LIDAD</h2>
		<p>
		Es la práctica de los integrantes de Gente &
	    Ciudad que fomenta una mejora continua
		para alcanzar la misión de la organización.</p></div>
	
<div class="text_column_inicio">
	<h2><u>CO</u>NFIANZA</h2>		
<p>Es la seguridad que Gente & Ciudad
  genera a través de sus actos
		</p>
	</div>
    <div class="text_column_inicio">
		<h2><u>CO</u>HERENCIA</h2>
		<p>Todas las actuaciones de Gente & Ciudad
		 estarán en consonancia con sus valores 
 institucionales.</p> </div>
  </section>
	<!-- Section  ###############################################2--END###################################################################-->
	
	<!-- Section  ###############################################3--START#######################################################################################-->
	 <section class="about_inicio" >
    <h2 class="hidden">about_inicio</h2>
    <div class="text_column_inicio"> 
		<h2><u>CO</u>MPROMISO</h2>
		<p>
		Los integrantes de Gente & Ciudad
	    asumen como propio el cumplimiento de
	 las obligaciones de la institución</p></div>
	
<div class="text_column_inicio">
<h2><u>CO</u>PERACION</h2>		
<p>En Gente & Ciudad se promueve la suma
  	      de fuerzas para lograr objetivos compartidos.
		</p>
	</div>
    <div class="text_column_inicio">
		<h2><u>TR</u>ANSPARENCIA</h2>
		<p>Es la cualidad que caracteriza y
	promueve Gente & Ciudad que permite
		conocer claramente nuestro 
		planteamientos y acciones</p> </div>
  </section>

  <!-- Section  ###############################################3--END#######################################################################################-->	
	
  <!-- BANNER NEAR THE FOOTER SECTION ##################################################################################################################### -->
 
  
	
	
	<div class="row blockDisplay">
    <div class="column_half left_half">
      <div class="thumbnail_inicio1"> 
		<div> <i class="fas fa-microphone" id="bckclr"></i></div>
		<h3 class="socialiconslabel_inicio">18 FOROS</h3>
		<br><br><br><br>
		 <div> <i class="fas fa-book" id="bckclr2"></i></div>
		<h3 class="socialiconslabel_inicio">30 EVENTOS</h3>

	</div>
	
	
	
    <div class="thumbnail_inicio1"> 
	  <div> <i class="fas fa-users" id="bckclr"></i></div>
		<h3 class="socialiconslabel_inicio">50 + PARTICAPANTS</h3>
		<br><br><br><br>
		<div> <i class="fas fa-calendar-alt" id="bckclr3"></i></div>
		<h3 class="socialiconslabel_inicio">3 EVENTOS FOR DIAS</h3>
    </div>
    </div>
    <div class="column_half right_half">
      <h2 id="reg">REGISTRATE CON <span id="nos"><i>NOSOTROS</i></span></h2>
    <h6 id="regpara"> Para estas informado de nuestas setividades y eventos</h6>
    
   

	<form id="registrate" method="post" action="/register" onsubmit="return validation_signup()"> 
  {{ csrf_field() }}
	 <input placeholder="Nombres Compele" id="name" type="name" name="name">
	 <br><br>
	 <input placeholder="Correo" id="email" type="email" name="email">
	 <br><br>
	 <input placeholder="Contrasena" id="password" type="password" name="password">
	 <br><br>	
	 <input placeholder="Telefono" id="number" type ="number" name="number">
	 <br><br>	 
   	 <select  type ="text" id="country" name="country">    
   <option value="">--Ciudad De Orign--</option> 
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
		 </select><br><br><br><br>
	 <input value="REGISTRAR AHORA" type="submit" name="submit" class="button_inicio">

		
	</form>
    </div>
  </div>
	
	
	
	
	
	
	
	
	
	
<!-- BANNER NEAR THE FOOTER SECTION ---END ##################################################################################################################### -->	
	
	
  <!-- 2logo section################################################################################################################################################# -->
  
  <div class="row blockDisplay">
    <div class="column_full full">
      
		
		
		  
		 
		
		 

	
		</div>
	  </div>
	
	  <div class="row blockDisplay">
    <div class="column_half1 left_half1">
		<br><br><br>
      <img src="{{ asset('frontend') }}/images/image3.jpg" alt="image3" class="cards_inicio1">
    </div>
    <div class="column_half right_half1">
		<br><br>
      <img src="{{ asset('frontend') }}/images/Logotipo.png" alt="logo" class="cards_inicio">
    </div>
  </div>
	  
	 
	  <div class="row_inicio">
	<h1 id="blog_header">Nuestro <span id="blog_text"><em>Blog</em></span></h1>
		<p id="blog_p">Esta sección esta pensada para integrar a los ciudadanos y poder tener un feedback directo con nuestra comunidad</p>
 	<div class="text_column_inicio">
	
	<div id="blog_1">
		
		<img class="blog_img_1" src="{{ asset('frontend') }}/images/blog_img_01.jpg" alt="logo">

	</div>




 </div>





<div class="text_column_inicio">
	<div id="blog_2">
  	
		<img class="blog_img_1" src="{{ asset('frontend') }}/images/blog_img_2.jpg" alt="logo">

  	</div>	
</div>

<div class="text_column_inicio">
	<div id="blog_3">
		
		<img class="blog_img_1" src="{{ asset('frontend') }}/images/blog_img_3.jpg" alt="logo">

	</div>
	  
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
