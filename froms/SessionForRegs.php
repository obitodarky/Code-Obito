
<?php
session_start();
?>

<html>
<title>
</title>
</head>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$R_ID= $_POST['R_ID'];
$name= $_POST['name'];
$address= $_POST['address'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$password= $_POST['password'];

$_SESSION["R_ID"] = $R_ID;
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["address"] = $address;
$_SESSION["dob"] = $dob;
$_SESSION["password"] = $password;
echo"<br> Thank you for Registration<br>";
}
?>

<?php
echo "<br>Your id is"  . $_SESSION ["R_ID"];
	echo "<br>Your name is"  . $_SESSION ["name"];
	echo "<br>Your address is" .$_SESSION ["address"];
	echo "<br>Your email is" . $_SESSION ["email"];
	echo "<br>Your Date of Birth is". $_SESSION ["dob"];
	
	
	session_unset();
	session_destroy();
		if($_SESSION == FALSE)
		{
				echo "<br> Session Destroyed";
		}
		else
		{
			echo"<br> Session not destroyed";
		}
		
?>
	
</body>
</html>
	