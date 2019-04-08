<?php 
?>

<form action = "Registration.php" method = "GET">
<br/>
<br/>
<em> <b> Enter Your ID Please </b> </em> <br/> <br/>
<input type="text" name="name" value="<?php if(isset($_POST['R_ID'])) {print htmlspecialchars_decode ($_POST['name']);}?>" />
<br> <br>
<em> <b> Enter Your Name Please </b> </em> <br/> <br/>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) {print htmlspecialchars_decode ($_POST['name']);}?>" />
<br> <br>
<em> <b> Enter Your Address Please </b> </em> <br/> <br/>
<input type="text" name="address" value="<?php if(isset($_POST['address'])) {print htmlspecialchars_decode ($_POST['address']);}?>" />
<br> <br>
<em> <b> Select Your Gender Please </b> </em> <br/> <br/>
<input type="radio" name="gender" value="<?php if(isset($_POST['gender'])) {print htmlspecialchars_decode ($_POST['gender']);}?>" />
<br> <br>
<em> <b> Enter Your Email ID Please </b> </em> <br/> <br/>
<input type="text" name="name" value="<?php if(isset($_POST['email'])) {print htmlspecialchars_decode ($_POST['email']);}?>" />
<br> <br>
<em> <b> Enter Your Password Please </b> </em> <br/> <br/>
<input type="text" name="name" value="<?php if(isset($_POST['password'])) {print htmlspecialchars_decode ($_POST['password']);}?>" />
<br> <br>
