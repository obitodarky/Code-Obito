<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
<style>




nav {
    float: right;
    width: 600px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}


</style>
</head>
<body id="fg">
<?php 
	require "header.php";
?>
The topics go here
<br> <br> <br> <br>

<nav>
<?php
	require "phpfidget.php";

?>
</nav>
</body>
</html>