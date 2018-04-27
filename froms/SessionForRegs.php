
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



	echo "hello " .$_SESSION["email"];


	session_unset();
	session_destroy();

}
}		
?>
	
</body>
</html>
	