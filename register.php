<!DOCTYPE html>
<html>
<head>
	<title>Register Yourself</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">      
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="register.php">
    <img src="https://img.icons8.com/office/40/000000/edit-user-male--v1.png" width="40" height="40" class="d-inline-block align-top" alt="">
    Registration
  </a>
  <a href="index.php"><button class="btn btn-success" style="width: 150px; height: 40px;">Back to Converter</button></a>
</nav>



<div class="container col-md-6 col-sm-12">
	<form action="insert.php" method="POST"  onsubmit="return validation()">
	<div class="row">
		<label>First Name</label>
		<input type="text" name="firstName" id="firstName" class="form-control" placeholder="John">
		<span id="fName" class="text-danger font-weight-bold"></span>
	</div>

	<div class="row">
		<label>Last Name</label>
		<input type="text" name="lastName" id="lastName" class="form-control" placeholder="Doe">
		<span id="lName" class="text-danger font-weight-bold"></span>
	</div>

	<div class="row">
		<label>Email ID</label>
		<input type="text" name="email" id="email" class="form-control" placeholder="johndoe@gmail.com">
		<span id="smail" class="text-danger font-weight-bold"></span>
	</div>

	<div class="row">
		<label>Password</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password">
		<span id="pass" class="text-danger font-weight-bold"></span>		
	</div>

	<div class="row">
		<label>Confirm Password</label>
		<input type="password" name="cnfpassword" id="cnfpassword" class="form-control" placeholder="Re-enter Password">
		<span id="cnfpass" class="text-danger font-weight-bold"></span>	
	</div>
	
	<div class="row">
		<input type="submit" name="submit" class="btn btn-success" value="Submit">		
	</div>
	</form>
</div>
<footer >
<div class="footer-copyright text-center py-3 bg-dark">© 2020 Copyright:
    <a href="https://www.linkedin.com/in/nikhil-gyanchandani-191160184"> Nikhil Gyanchandani</a><br>
    <a href="https://icons8.com/icon/23467/registration">Registration icon by Icons8</a>
</div>
</footer>
</body>


<script type="text/javascript">

function validation()
{





var fname = document.getElementById("firstName").value;
var lname = document.getElementById("lastName").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var cnfpassword = document.getElementById("cnfPassword").value;

if(lname == " ")
{
	document.getElementById("lName").innerHTML="Please fill the Last Name field" ;
	return false;
}

if((lname.length<=2) || (lname.length >20))
{
	document.getElementById("lName").innerHTML="Length must be between 2 to 20 characters" ;
	return false;
}

if(!isNaN(lname))
{
	document.getElementById("lName").innerHTML="Only characters are allowed" ;
	return false;	
}



if(fname == " ")
{
	document.getElementById("fName").innerHTML="Please fill the First Name field" ;
	return false;
}

if((fname.length<=2) || (fname.length >20))
{
	document.getElementById("fName").innerHTML="Length must be between 2 to 20 characters" ;
	return false;
}

if(!isNaN(lname))
{
	document.getElementById("fName").innerHTML="Only characters are allowed" ;
	return false;	
}



if(password == " ")
{
	document.getElementById("pass").innerHTML="Please fill the Password field" ;
	return false;
}

if((password.length<=5) || (password.length >20))
{
	document.getElementById("pass").innerHTML="Length must be between 5 to 20 characters" ;
	return false;
}


if(cnfpassword == " ")
{
	document.getElementById("cnfpass").innerHTML="Please fill the Confirm Password field" ;
	return false;
}

if(pass != cnfpassword)
{
	document.getElementById("cnfpass").innerHTML="Passwords are not matching";
	return false;	
}

if(email.indexOf('@') <= 0)
{
	document.getElementById("semail").innerHTML="Please enter a valid email address" ;
	return false;	
}
if((email.charAt(email.length-4) != '.' ) &&  (email.charAt(email.length-3) != '.' ))
{
	document.getElementById("semail").innerHTML="Please enter a valid email address" ;
	return false;	
}

if(email == " ")
{
	document.getElementById("semail").innerHTML="Please fill the Email ID field" ;
	return false;
}




}


</script>


</html>


