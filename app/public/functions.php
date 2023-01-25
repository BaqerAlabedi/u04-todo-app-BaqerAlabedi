<?php include "db.php";

function create() {
    global $connection;

    if(isset($_POST["submit"])){

        $title = $_POST["title"];
        $description = $_POST["description"];
        
        $query = $connection->prepare("INSERT INTO todo (title, description) VALUES (:title, :description)",);
        $query->bindValue(":title", $title);
        $query->bindValue(":description", $description);
        $query->execute();
        
    }
}

function update() {
    global $connection;

    if(isset($_POST["submit"])) {

        $title = $_POST["title"];
        $description = $_POST["description"];
        $id = $_GET["id"];

        $query = $connection->prepare("UPDATE todo SET title = :title, description = :description WHERE id = '$id'",);
        $query->bindValue(":title", $title);
        $query->bindValue(":description", $description);

        if($query->execute()) {
            header("location: read.php");
        } else {
            print_r($connection->errorInfo());
        }
    
        if(!$query){
            die('Query FAILED');

        }
    }
}

function delete() {
    global $connection;
    
        $id = $_GET["id"];

        $query = $connection->prepare("DELETE FROM todo WHERE id = '$id'",);
        $query->execute();
         
}

function showAllData() {
    global $connection;
    global $stmt;
    $stmt = $connection->prepare("SELECT * FROM todo ORDER BY id DESC");
    $stmt->execute();

}

function checkbox() {
    global $connection;
    
    $id = $_GET["id"];
    $checkbox = 1;

    $query = $connection->prepare("UPDATE todo SET checkbox = :checkbox WHERE id = '$id'",);
    $query->bindValue(":checkbox", $checkbox);

    if($query->execute()){
        header("location: read.php"); 

    } 
}

function uncheckbox() {
    global $connection;
    
    $id = $_GET["id"];
    $checkbox = 0;

    $query = $connection->prepare("UPDATE todo SET checkbox = :checkbox WHERE id = '$id'",);
    $query->bindValue(":checkbox", $checkbox);
    
    if($query->execute()){
        header("location: read.php"); 

    } 
}
?>