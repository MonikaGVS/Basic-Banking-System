<?php
$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'banking';

$conn = mysqli_connect($servername,$user,$pass,$dbname);

if(!$conn){
  die("Could Not Connect to the database".mysqli_connect_error());
}

?>