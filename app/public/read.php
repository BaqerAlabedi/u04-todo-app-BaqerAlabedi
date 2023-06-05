<?php include "functions.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- Formen ska ta oss till index när vi vill klicka add post i read.php-->
</head>
<body id="body">
<div class="container">
<div class="col-xs-6">
<h1 class="text-center">To-Do List</h1>
<form action="index.php" method="POST">
<button class="btn btn-primary">Add Post</button>

<?php



$host = "mariadb";
$db = "db";
$user = "Bager";
$password = "Bager";


?>
<?php 

// 
create();?>
</form>

<?php showAllData();?>
<!-- Show all data ska läsa allt ifrån databasen, -->
<?php 

// den ska fectha bara checkbox som är 0 och när det inte är noll (esle) ska den visa att den är checkat. 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 

    if($row["checkbox"] == 0) {

        

?>
<div>
<br>
<!-- Senare har vi delar som skriver ut title från data basen samt description  -->
<!-- när jag trycker på edit så tar den mig dit och samma sak när jag trycker delet post -->
<h5>Title: <?php echo $row['title']?></h5>
<p>Description: <?php echo $row['description']?></p>

<a href="check.php?id=<?php echo $row['id']?>">
<img src="resurser/unchecked.jpg" width="50px" height="40px"></a>


<a class="btn btn-primary" href="update.php?id=<?php echo $row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete.php?id=<?php echo $row['id']?>">Delete Post</a>


<hr>
</div>

<?php
}

else {

?>

<div>
<br>

<h5>Title: <?php echo $row['title']?></h5>
<p>Description: <?php echo $row['description']?></p>


<a href="uncheck.php?id=<?php echo $row['id']?>">
<img src="resurser/checked.jpg" width="55px" height="40px"></a>

<a class="btn btn-primary" href="update.php?id=<?php echo $row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete.php?id=<?php echo $row['id']?>">Delete Post</a>


<hr>
</div>
<?php 
}
};
?>

</div>
</div>
</body>
</html>
