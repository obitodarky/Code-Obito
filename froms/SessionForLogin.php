
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
$email= $_POST['email'];
$password= $_POST['password'];

$_SESSION["R_ID"] = $R_ID;
$_SESSION["name"] = $name;
$_SESSION["password"] = $password;

echo"<br> You are Successfully Logged In<br>";
}
?>

<?php
echo "Your id is" <br> . $_SESSION ["R_ID"]; 
	echo "Your name is" <br> . $_SESSION ["name"];  
	echo "Your email is"<br> . $_SESSION ["email"]; 
	
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
	