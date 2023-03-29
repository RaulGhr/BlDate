<?php
$host = "localhost";
$usename = "root";
$pass = "root";
$bazadedate = "dbmea";

$conn = mysqli_connect($host,$usename,$pass,$bazadedate);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>