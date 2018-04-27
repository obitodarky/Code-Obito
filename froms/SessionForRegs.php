
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

$name= $_POST['userid'];

$email= $_POST['email'];

$password= $_POST['password'];


$_SESSION["userid"] = $name;
$_SESSION['email'] = $email;

$_SESSION["password"] = $password;



echo "hello" .$_SESSION["userid"];

echo $_SESSION["email"];


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
}		
?>
	
</body>
</html>
	