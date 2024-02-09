<?php
require 'connect.php';
if(isset($_POST['submit'])){
    $location=$_POST["name"];
    
    if($_FILES["image"]["error"]===4){
        echo "<script> alert('Select a file'); </script>"
        ;

    }else{
        $filename=$_FILES["image"]["name"];
        $filesize=$_FILES["image"]["size"];
        $tempname=$_FILES["image"]["tmp_name"];

        $ext=['jpg','jpeg','JPG','JPEG','png','gif','PNG','GIF'];
        $imgext=explode('.',$filename);
        $imgext=strtolower(end($imgext));

        if(!in_array($imgext,$ext)){
            echo "<script> alert('Wrong file extension'); </script>"
            ;

        }
        else if($filesize >1000000){
            echo "<script> alert('File is more than 1MB');</script>"
            ;
        }else{
            $newimg=uniqid();
            $newimg .= '.' . $imgext;

            move_uploaded_file($tempname, 'img/' . $newimg);
            $query = "INSERT INTO test VALUES('','$location','$newimg')";
            mysqli_query($con,$query);
            echo "<script> alert('information is succesfully uploaded!');</script>"
            ;
        }
    
    
    
    
    }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Report</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/813721c2c5.js" crossorigin="anonymous"></script>
</head>
<body class="crime">
<div class="header">
        <div>
            
            <img src="images/green.jpeg">
    
        </div>
        <nav class="navigation">
    
        <a href="context.php">Home</a>
        <a href="crimereport.php">Get-Involved</a>
        <a href="aboutus.php">About-Us</a>
        <a href="contact.php">Contact</a>
        <!--<a href="form.php">Sign-Up</a>-->
        

        <!--<a href="#"><i class="fa fa-sign-out" style="font-size:20px;color:white"></i></a> -->

         
        </nav>
        
    </div>
    <div class="signout">
    <a href="loginform.php">Log-out</a>
 
    </div> 



    
    <form class="reportpage" action=" " method="post" enctype="multipart/form-data">
        
        <h3>Crime type & Address<h3><br>
        <textarea name="name"  id="name" rows="5" cols="50" placeholder="Explain the type of crime and drop the location" style="height:170px;" required></textarea><br>
        
        <h3> Upload the image:<h3>
        <input type="file" name="image" id="image" style="height:30;"><br><br>
        <input type=submit name="submit" id="submit" value="submit" style="width:70px; height:40px;">

    </form>

   
    

</body>
</html>