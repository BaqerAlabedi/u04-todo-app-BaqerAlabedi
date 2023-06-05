<?php include "db.php";


// Create är en funktion där vi tar in connection där vi specifiserar att variabeln är global(vi skriver global för att få in den i funktionen), eftersom den finns i ett annat dokument. 
// vi måste  alltid ha en connection med data based annars kommer vi ej kunna posta eller create saker. 
// om submit är tryck gör det här, post är php sätt att skicka. det som den postar är title och description är description. 
// om den trycks så ska title bli till en variabel samma sak gäller för description. 
// vi skapar en query vilken är connection till databaset "todo" där vi specifiserar att title och description ska gå in i title och desription i databasen. 
// så query är fortfarande en variabel vilket vi måste fortfarande execute variabeln, title och description. 
// beskriv vad crud är!!

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

// update, Det enda skillnadedn på uppdate är när den tryck så ska vi hämta id och posta title och description. 
// vi har redan postat den, så vi kommer trycka på noten för att uppdatera, det vi gör är att vi postar det som är ett nytt.
// vi måste veta vilket id den har när vi hämtar om den på nytt. 
// om den lyckas uppdatera så ska den oss tillbaka till read.php om den inte lyckas inte så får vi fram connection error.
// om vi ej har en query då ska det bara stå query fel. Den ska bara liksom dö!!!!!


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

// Delet är att man hämtar id och senare execute, Man raderar det som redan finns. 
function delete() {
    global $connection;
    
        $id = $_GET["id"];

        $query = $connection->prepare("DELETE FROM todo WHERE id = '$id'",);
        $query->execute();
         
}

// vi prepar att hämta ut allt från todo tabellen och vi sorterar det uppifrån och ner, vi sorterar det med id uppifrån och ner och det sparas i en variabel som executas.

function showAllData() {
    global $connection;
    global $stmt;
    $stmt = $connection->prepare("SELECT * FROM todo ORDER BY id DESC");
    $stmt->execute();

}

// här plockar vi id, variabeln blir id checkbox. Connection ska förbreda att uppdatera tabellen. Sen ska vi set checkbok vilket är att sätta ett nytt value. 
// checkbok är checkbok i todo där id är variabeln
// ifall du execute så går du tillbaka till read.php
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


// exaxt samma sak som tidigare, enda skillnaden är att om man vill ta bort den eller inte. olika Id kopplat till tabellen. 
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