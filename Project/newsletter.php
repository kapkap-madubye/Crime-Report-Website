<?php

include_once 'connect.php';

$mail=$_POST['email'];

$insert="INSERT INTO newsletter VALUES ('','$mail');";
mysqli_query($con,$insert);

header("Location:context.php");