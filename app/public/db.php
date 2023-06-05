<?php

// Rad 8 till rad 14 så skapas det en ny variabel där det skapas connection med data basen. med hjälp av varibalerna från tidigra e rader får in informationen. 
// rad 14 är ifall du inte lyckas skapa en connection så skapas det en echo där det står "ERROR CONNECTION TO MYSQL". 
//varibalen ska även visa en message som är predefined. 




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