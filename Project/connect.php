<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "green";

$con= mysqli_connect($servername,$username,$password,$databaseName);

if(!$con){
    die("Could not connect to server".mysql_connect_error());
}