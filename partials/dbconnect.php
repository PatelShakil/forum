<?php
$servenname = "localhost";
$username = "root";
$password = "";
$database = "idiscuss";

$conn = mysqli_connect($servenname, $username, $password, $database);
if(!$conn)
die("We are sorry to say but Some error occured on server.");
?>