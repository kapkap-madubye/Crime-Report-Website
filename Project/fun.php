<?php
function emptysignin($name,$email, $pwd, $pwdrpt){
    $result;
    if(empty($name) || empty($email) || empty($pwd) || empty($pwdrpt)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;

}
function username($name){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;

}
function useremail($email){
    $result;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;

}
function userpwd($pwd,$pwdrpt){
    $result;
    if( $pwd !== $pwdrpt ){
        $result=true;
    }else{
        $result =false;
    }
    return $result;

}
function userexists($con,$name,$email){
    $sql="SELECT * FROM userinfo WHERE username= ? OR useremail= ?;";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:form.php?error=stmtfailed");
        exit();


   }
   mysqli_stmt_bind_param($stmt,"ss",$name,$email); 
   mysqli_stmt_execute($stmt);

   $resultdata=mysqli_stmt_get_result($stmt);

   if($row=mysqli_fetch_assoc($resultdata)){
       return $row;

   }else{
       $result=false;
       return $result;
   }
   mysqli_stmt_close($stmt);

}
function  createUser($con,$name,$email,$pwd){
    $sql="INSERT INTO userinfo (username,useremail,userpwd) VALUES (?,?,?);";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:form.php?error=stmtfailed");
        exit();
   }
   $hashpwd=password_hash($pwd,PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt,"sss",$name,$email,$hashpwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("Location:form.php?error=none");
   exit();
}
function emptylogin($name,$pwd){
    $result;
    if(empty($name) || empty($pwd)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;

} 

function loginUser($con,$name,$pwd){
    $userexists=userexists($con,$name,$name);
    if($userexists===false){
        header("Location:loginform.php?error=usernotfound");
        exit();

    }
    $hashedpwd=$userexists["userpwd"];
    $checkpassword=password_verify($pwd,$hashedpwd);


    if($checkpassword===false) {
        header("Location:loginform.php?error=incorrectpassword");
        exit(); 
    }else if($checkpassword===true) {
        session_start();
        $_SESSION['id']=$userexists["username"];
        $_SESSION["id"]=$userexists["username"];
        header("Location:context.php"); //add homepage link
        exit();
    }

 }


