<?php
$servername = "localhost";
$username = "adminer";
$password = "P@ssw0rd";

try {
  $conn = new PDO("mysql:host=$servername;dbname=smt_movie_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>