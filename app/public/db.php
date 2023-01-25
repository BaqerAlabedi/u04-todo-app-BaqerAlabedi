<?php

$host = "mariadb";
$db = "db";
$user = "Bager";
$password = "Bager";

try {
  // connect to database with the PDO object. 
  $connection = new \PDO("mysql:host=$host;dbname=$db;charset=utf8", "$user", "$password", 
  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  ]); 
} catch(\PDOException $e){
  // if connection fails, show PDO error. 
echo "Error connecting to mysql: " . $e->getMessage();
}
?>