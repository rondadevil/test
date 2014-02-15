<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
mysql_select_db("test",$dbhandle) 
  or die("Could not select examples");
  echo "Connected to Test DB";

?>
<br>