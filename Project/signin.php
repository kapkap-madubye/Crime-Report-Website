
<?php

if(isset($_POST["submit"])){
    $name=$_POST["fname"];
    $email=$_POST["email"];
    $pwd=$_POST["password"];
    $pwdrpt=$_POST["rptpassword"];


    require_once 'connect.php';
    require_once 'fun.php';

    if(emptysignin($name,$email, $pwd, $pwdrpt) !==false){
        header("Location:form.php?error=emptyinput");
        exit();
    }  
    if(username($name) !==false){
        header("Location:form.php?error=emptynameinput");
        exit();
    }  
    if(useremail($email) !==false){
        header("Location:form.php?error=emptyemailinput");
        exit();
    }  
    if(userpwd($pwd,$pwdrpt) !==false){
        header("Location:form.php?error=mismatch");
        exit();
    }
    if(userexists($con,$name,$email) !==false){
        header("Location:form.php?error=usernametaken");
        exit();

    }
    createUser($con,$name,$email,$pwd);
}else{
    header("Location:form.php?error=none");
        exit();
}    