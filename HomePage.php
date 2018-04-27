<?php 
    define('TITLE',"ProjectObito");
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
<!--<a href=""> 1</a><br>
<a href=""> 2</a><br>
<a href=""> 3</a><br>
<a href=""> 4</a><br>
<a href=""> 5</a><br>
<a href=""> 6</a><br>
<a href=""> 7</a><br>
<a href=""> 8</a><br>
<a href=""> 9</a><br>
<a href=""> 10</a><br>
<a href=""> 11</a><br>
<a href=""> 12</a><br>
<a href=""> 13</a><br>
<a href=""> 14</a><br>
<a href=""> 15</a><br>
<br><br><br><br>-->
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