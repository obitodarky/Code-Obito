<!DOCTYPE HTML 5>
<HTML>
<head> <title> Handle Registration </title>

</head>

<body align="center">
<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
	
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
		echo '<p class="Success"> Congrats <br> You have been successfully registered </p>';
		
	}
	}
	?>
	</body>
	</html>