<?php include "functions.php";

// 
if(isset($_POST['submit'])) {
    update();
}
global $connection;
$id = $_GET['id'];
$query = $connection->prepare("SELECT * FROM todo WHERE id = '$id'");

if($query->execute()) {

    $row=$query->fetch(PDO::FETCH_ASSOC); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body id="body">
<div class="container">
<div class="col-xs-6">
    <h1 class="text-center">Edit Post</h1>

    <form method="POST">
<div class="form-group">
<label for="title">Title:</label>
    <input type="text" name="title" value="<?php echo $row['title']?>" class="form-control">
</div>
<div class="form-group">
<label for="description">Description:</label>
    <input type="text" name="description" value="<?php echo $row['description']?>" class="form-control">
</div>
    <input class="btn btn-primary" type="submit" name="submit" value="Edit Changes">
</form>
<br>    

</div>
</div>
</body>
</html>
