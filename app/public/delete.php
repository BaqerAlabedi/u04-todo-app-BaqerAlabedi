<?php include "functions.php";
// "no" betyder att man ska gå tilbaka till read medans yes betyder att man ska deleta den beffintliga informationen och går tillbaka till read
if(isset($_POST['no'])) {
    header("location: read.php"); 

} if(isset($_POST['yes'])) {
    delete();
    header("location: read.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Post</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body id="body">
<div class="container">
<div class="col-xs-6">
    <h1 class="text-center">Delete Post</h1>
<!-- form är en frontenden medans det som jag förklarade där uppe var backenden -->
    <form method="POST">
    <p>Proceed to delete?</p>
    <input class="btn btn-primary" type="submit" name="no" value="Go Back">
    <input class="btn btn-primary" type="submit" name="yes" value="Delete Post">
</form>
<br>    

</div>
</div>
</body>
</html>