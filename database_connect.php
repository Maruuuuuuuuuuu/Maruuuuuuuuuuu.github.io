<?php
/*
------------------------------------------------------------------------------------------------------
Script Name: mysql_connect.php
Author: Decasa, Dela Torre, Polo, Ritualo
Description: To connect to the MySQL server and database
------------------------------------------------------------------------------------------------------
*/
$username ="root";
$password="";
$database="DBTheUnknown";
$conn = mysqli_connect("localhost",$username,$password);
mysqli_select_db($conn, $database) or die ("Unable to select database");
?>