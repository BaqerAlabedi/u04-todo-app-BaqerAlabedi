<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Note</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body id="body">
<div class="container">
<div class="col-xs-6">
    <h1 class="text-center">To-Do List</h1>
    
<form action="create.php" method="POST">
<div class="form-group">
<h3 for="title">Title:</h3>
    <input type="text" name="title" placeholder="What to do?" class="form-control">
</div>
<div class="form-group">

<h3 for="description">Description:</h3>
    <input type="text" name="description" placeholder="Describe" class="form-control">
</div>
    <input class="btn btn-primary" type="submit" name="submit" value="Add Post">
    <button class="btn btn-primary">See All Posts</button>
    

</form>

</div>
</div>
</body>
</html>