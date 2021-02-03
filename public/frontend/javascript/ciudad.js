function incio_desession_login() {
  var x = document.forms["inciciodesessionloginform"]["iniciodesession_email"].value;
  var y = document.forms["inciciodesessionloginform"]["iniciodesession_password"].value;
  if (x == "") {
    alert("Email must be entered");
    return false;
  }
  if (y == "") {
    alert("Password must be entered");
    return false;
  }	
  
}
	
function copy() {
    document.getElementById("getcountry").innerHTML = document.getElementById("selectcountry").value
}