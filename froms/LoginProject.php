<?php
  require "../header-footer-widget/header.php"
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>Login Form</h2>


  <form action="SessionForRegs.php" method="POST">
 
    Email :<input type="email" " name="email">

		Password :<input type="password" name="password">
        
     

  <button class="button" style="vertical-align: left" input type="submit" value="SUBMIT"><span>Login</span></button>
 
  <button class="button" style="vertical-align: left" input type='reset' value='RESET'><span>Reset </span></button>

  </form>
<?php 
  require "../header-footer-widget/footer.php";
?>

</body>
</html>