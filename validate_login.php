

<?php
include "include/connect.php";



// Grab User submitted information
$email = $_POST["iduser"];
$pass = $_POST["password"];
 
?>
<br>
<?php
$query = "select * from login WHERE username = '$email' and password = '$pass'";
$result1 = mysql_query($query);

$result1 = mysql_query($query) OR die(mysql_error());
$count = mysql_num_rows($result1);

if ($count>0) {
$row = mysql_fetch_array($result1);
$firstName = $row ['username'];
echo 'Welcome back,' .$email.' ! <br/>';
}
else
{
echo 'The information you provided was not valid.';
}

?>