<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "gobi@123"; /* Password */
$dbname = "mydb"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>