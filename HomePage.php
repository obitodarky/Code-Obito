<?php 
    define('TITLE',"ProjectObito:Home");
?>
<!DOCTYPE html>
<html>
<head>
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

1)Echo :

Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to output the text "Hello World!" on a web page:
Example:
<?php
echo "Hello world!<br>";
//This is how you insert a single line comment
echo "You can also <br> add html tags in echo";
?>

<footer>
<?php

    require "header-footer-widget/footer.php";

?>

</footer>
</body>

</html>
