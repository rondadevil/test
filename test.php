


<?php
include "include/connect.php";

$query = "select * from login";
  $result = mysql_query($query);
  //fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
  echo "Username:".$row{'username'}." Password:".$row{'password'}."<br>";
}
//close the connection
mysql_close($dbhandle);
?>
