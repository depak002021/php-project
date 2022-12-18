<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";
$tbl_name="users";
if(!$con = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname"))
{
header("Location:login.php");
die;
}
?>
