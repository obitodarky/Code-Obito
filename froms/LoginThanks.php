<!DOCTYPE html>
<html>
<head>
<style>

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
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
      $okay=true;
     /*if(empty($_POST["emailID"]))
          {
            $okay=false;
            echo "<br> Please enter email ID";
          }
      else
          {
            $R_ID = validate_input ($_POST['emailID']);
          }*/
          
      if(empty($_POST["userID"]))
          {
            $okay=false;
            echo "<br> Please enter user ID";
          }
      else
          {
            $name = validate_input ($_POST['userID']);
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
      if($okay==true){
        echo "Logged in Succesfully";
      }    
        } ?>



</body>
</html>