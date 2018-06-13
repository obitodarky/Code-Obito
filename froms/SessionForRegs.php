
<?php
require "../header-footer-widget/header.php";
session_start();
require "db_config.php";
?>

<html>
<title>
</title>
</head>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{

$email= $_POST['email'];
$password= $_POST['password'];
$okay=true;
if(empty($email)){
	$okay=false;
	echo "Enter Proper Email <br>";
}
if(empty($password)){
	$okay=false;
	echo "Enter proper password <br>";
}
if($okay){

	$_SESSION['email'] = $email;

	$_SESSION["password"] = $password;



	echo "hello " .$_SESSION["email"]."<br>";
	echo "You have logged in on ".date("l jS \of F Y h:i:s A") . "<br>";
	echo "Please close the browser to disconnect your session";
	session_unset();
	session_destroy();

}
}		
?>
	
</body>
</html>
	