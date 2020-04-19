<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

$fname = $_POST['firstName'];

$lname = $_POST['lastName'];

$email = $_POST['email'];

$password = md5($_POST['password']);


if($_POST){



	$sql = "SELECT email from USERS WHERE email ='$email' ";

	$result = mysqli_query($connection,$sql);
	
	$count = mysqli_num_rows($result);




	if($count == 1)
	{
		echo "<script>
		alert('User is Already Registered with Email Id.');
		window.location.href='register.php';
		</script>"
		;
	}
	else
	{
		$query  = "INSERT into users (ID,fname,lname,email,password) values ('','$fname','$lname','$email','$password')";
		$insert =mysqli_query($connection,$query) ;

		echo "<script>
		alert('User Successfully Registered!');
		window.location.href='index.php';
		</script>"
		;

	}
}
/**/
?>

