<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";
$tbl_name="comments";
if(!$con = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname"))
{
header("Location:video_course1.php");
die;
}
?>
