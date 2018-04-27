
<html>
<head>
<title> Registration </title>
<body align="center">
<pre>
<form action="HandleforRegs.php" method="POST">
<h2> Registration Form </h2>
Enter UserID<input type"name" name="R_ID"> </input>
Enter Name<input type="name" name="name"> </input>
Enter Address<input type="name" name="address"> </input>
<input type="Radio" name="sex" required value='male' size='35'> Male
<input type="Radio" name="sex" required value='male' size='35'> Female
	  
Date Of Birth<name="dob"><select name="Months">
<option value="">Month</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
<select name="Days">
				<option value="">Day</option>
<?php 
   for($i=1;$i<=31;$i++)
{
echo"<option value=\"$i\">$i</option><br>";
}
?>
</select>
<select name="Years">
				<option value="">Year</option>
<?php
   for($i=1990;$i<=2018;$i++)
{
echo"<option value=\"$i\">$i</option><br>";
}
?>
</select>
Enter Email ID<input type="email" name="Email"> </input>
Enter Password<input type="Password" name="Password"> </input>
Confirm Password<input type="password" name="cpassword"> </input>


<center>
  <input type="submit" value="SUBMIT">   <input type='reset' value='RESET'>
 
  </center>
</form>
</form>
</form>
</pre>
</body>
</html>