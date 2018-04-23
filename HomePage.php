<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
<style>


body{
    font-family: "Calibri";
}

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
   
a{
   text-decoration: none;
}
a:active{
    color: -webkit-link;
}



</style>
</head>
<body id="fg">
<?php 
	require "header-footer-widget/header.php";
?>
<h3>Sub Topic</h3>
<nav>
<?php
	require "header-footer-widget/phpwidget.php";

?>
</nav>
<a href="/topics/"> Hello World</a><br>
<a href="/topics/"> Variables</a><br>
<a href="topics/"> Strings</a><br>
<a href="topics/"> Constants</a><br>
<a href="topics/"> Operators</a><br>
<a href="topics/"> Control Statements and Loops</a><br>
<a href="topics/"> Arrays</a><br>
<a href="topics/"> User Input</a><br>
<a href="topics/"> Functions </a><br>
<a href="topics/"> Static and Global </a><br>
<a href="topics/"> Super Globals </a><br>
<!-- Following topics are not required
<a href="topics/"> </a><br>
<a href="topics/"> 13</a><br>
<a href="topics/"> 14</a><br>
<a href="topics/"> 15</a><br>
<br><br><br><br>
-->
<footer>
<?php

    require "header-footer-widget/footer.php";

?>

</footer>
</body>

</html>
