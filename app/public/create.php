<?php 
// Det som händer är att i index när vi trycker på  submit så leder den oss till create.php
// create.php är det som gör så att vi postar till rätt kolumn i tabbellen. 
// sen tar den oss tillbaka till read eftersom vi vill se vart vi har hamnat efter. eller det som har uppdateras liksom. 
include "functions.php";
create();
header("location: read.php");
?>