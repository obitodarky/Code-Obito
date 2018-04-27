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
			$s=$_POST["R_ID"];
			$name=$_POST["name"];
			$okay=true;
			if(empty($_POST["R_ID"]))
					{
						$okay=false;
						echo "<br> Please enter ID";
					}
					else
					{
						$R_ID= validate_input ($_POST['R_ID']);
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
					
					
			if(empty($_POST["address"]))
					{
						$okay=false;
						echo "<br> Please enter address";
					}
					else
					{
						$address = validate_input ($_POST['address']);
					}
					
					
			if(empty($_POST["dob"]))
					{
						$okay=false;
						echo "<br> Please enter Date of Birth";
					}
					else
					{
						$name = validate_input ($_POST['dob']);
					}
					
			if(empty($_POST["dob"]))
					{
						$okay=false;
						echo "<br> Please enter Date of Birth";
					}
					else
					{
						$dob = validate_input ($_POST['dob']);
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
						$password = validate_input ($_POST['password']);
					}
					


			if(empty($_POST["cpassword"]))
					{
						$okay=false;
						echo "<br> Please enter Confirm Password";
					}
			else
			{
						$cpassword = validate_input ($_POST['cpassword']);
			}
			if($okay)
				echo "<br> Hey $name! <br> Your ID is $s <br> Your email id is $email <br>" ;
					

		} ?>
				
				
			
		</body>
		</html>
		
			