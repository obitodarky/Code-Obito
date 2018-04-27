<?php 
require "../header-footer-widget/header.php";
require "db_config.php";
 ?>
<!DOCTYPE HTML 5>
<HTML>
<head> <title> Handle Registration </title>

</head>

<body align="center">
<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
	
	$name=$_POST['R_ID'];
	$okay=TRUE;
	if(empty($_POST['R_ID']))
	{
		print'<p class="error"> Please enter ID</p>';
		$okay=FALSE;
	}
	
	if(empty($_POST['name']))
	{
		print'<p class="error"> Please enter Name</p>';
		$okay=FALSE;
	}
	
	
	if(empty($_POST['email']))
	{
		print'<p class="error"> Please enter e-mail</p>';
		$okay=FALSE;
	}
	
	if(empty($_POST['address']))
	{
		print'<p class="error"> Please enter Address</p>';
		$okay=FALSE;
	}
	
	
	if(empty($_POST['password']))
	{
		print'<p class="error"> Please enter Password</p>';
		$okay=FALSE;
	}
	
	if(empty($_POST['cpassword']))
	{
		print'<p class="error"> Please enter Confirm Password</p>';
		$okay=FALSE;
	}
	if ($_POST['cpassword'] !=$_POST['cpassword'])
	{
		echo "<br> <br> The password does not match";
		$okay=FALSE;
	}
	
	if($okay)
	{
		mysqli_select_db($dbc,"obito");
		$query="insert into register values(1,\"$name\",\" test\",\"1998/04/03\",\"email\",\"pass\",\"male\")";
		if(mysqli_query($dbc,$query)){
			echo "Registered";
		}
	}
	}
	?>
	</body>
	</html>