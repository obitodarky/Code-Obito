<?php
		function validate_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$fname = $email = $comment = "";
		
		if ($_SERVER['REQUEST_METHOD'] == "POST")
		{
	if(empty($_POST["R_ID"]))
			{
				$okay=false;
				$okay=false;
				echo "<br> Please enter ID";
			}
	else
			{
				$R_ID = validate_input ($_POST['R_ID']);
			}
			
	if(empty($_POST["name"]))
			{
				$okay=false;
				echo "<br> Please enter name";
			}
	else
			{
				$name = validate_input ($_POST['name']);
			}
			
			
	if(empty($_POST["email"]))
			{
				$okay=false;
				echo "<br> Please enter Email";
			}
	else
			{
				$email = validate_input ($_POST['email']);
			}
			
			
	if(empty($_POST["password"]))
			{
				$okay=false;
				echo "<br> Please enter Password";
			}
	else
			{
				$name = validate_input ($_POST['password']);
			}
		
			echo "<br> Hey $name! <br> Your ID is $R_ID <br> Your email id is $email <br>" ;
			
		} ?>
		
		
		</body>
		</html>
		
			