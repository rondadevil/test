<?php 
  include "include/connect.php";
  //load database connection 
  //... 

  //we will pretend we're getting the info from a form. 
  $firstName = $_POST['firstName']; 
  $lastName = $_POST['lastName']; 
  $emailAddress = $_POST['email']; 
  $zipCode = $_POST['zip']; 

  //do your error checking on the input. 
  //... 

  //Make the query to insert into the table. 
  $query = "INSERT INTO `people` (`firstName`,`lastName`,`email`,`zip`, `dateAdded`)VALUES('$firstName','$lastName','$emailAddress','$zipCode', NOW());";

  //run the query to insert the person. 
  $result = mysql_query($query) OR die(mysql_error()); 

  //let them know the person has been added. 
  echo "You have successfully added " . $firstName . " " . $lastName . " to the database.";
?> 