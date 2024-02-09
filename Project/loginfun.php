<?php

if(isset($_POST["submit"])){
    $name=$_POST["fname"];
    $pwd=$_POST["password"];

    require_once 'connect.php';
    require_once 'fun.php';

    if(emptylogin($name,$pwd) !==false){
        header("Location:loginform.php?error=emptyinput");
        exit();
    }
    loginUser($con,$name,$pwd);

}else{
    header("Location:form.php");
    exit();
}

