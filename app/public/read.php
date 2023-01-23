<?php include "../php/functions.php";?>

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

</head>
<body id="body">
<div class="container">
<div class="col-xs-6">
<h1 class="text-center">To-Do List</h1>
<form action="index.php" method="POST">
<button class="btn btn-primary">Add Post</button>

<?php create();?>
</form>

<?php showAllData();?>

<?php 

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 

    if($row["checkbox"] == 0) {

        

?>
<div>
<br>

<h5>Title: <?php echo $row['title']?></h5>
<p>Description: <?php echo $row['description']?></p>

<a href="check.php?id=<?php echo $row['id']?>">
<img src="../assets/unchecked.jpg" width="50px" height="40px"></a>

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
<img src="../assets/checked.jpg" width="55px" height="40px"></a>

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
