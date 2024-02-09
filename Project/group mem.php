<?php
session_start();
include("connect.php");
include("fun.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Members/Green</title>
    <link rel="stylesheet" href="index.css">
    <syle>

    </syle>
    <script src="https://kit.fontawesome.com/813721c2c5.js" crossorigin="anonymous"></script>
</head>
<body>
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
    
    <div class="members">
        <h2>Group Members</h2>
        
        <h3>Maubane Tshegofatso  : Email : <a href="#"> Temaubane@gmail.com</a></h3><br>
        <h3>Molise Kabelo  : Email : <a href="#"> 218020452@student.uj.ac.za</a></h3><br>
        <h3>Seakgela Faith Tumelo : Email : <a href="#"> tfseakgela@gmail.com</a></h3><br>
        <h3>Mnguni Thato  : Email : <a href="#">218009419@student.uj.ac.za</a></h3><br>
        <h3>Madubye Kapkap Daniel :  Email : <a href="#"> danielkapukapu@gmail.com</a></h3><br>

        

   

        <footer id="footer1">
        <div id="socials">
            <h4>Follow-US</h4>
            <a href="https://www.facebook.com/nrdc.org" target="_blank"> <i class="fa fa-facebook" ></i></a>
            <a href="https://www.instagram.com/nrdc_org/" target="_blank"><i class="fa fa-instagram" ></i></i></a>
            <a href="https://twitter.com/nrdc" target="_blank"> <i class="fa fa-twitter"></i></a>

        </div>
        <span id="About-us">
        <h4><a href="aboutus.php">About-US</a></h4>
            <h4><a href="contact.php">Contact</a></h4>
            <h4><a href="group mem.php">Group Members</a></h4>

        </span>

        <div id="news-letter">
            <form>
            <h2>Newsletter</h2>
            <input type="email" name="email" placeholder="Email Address">
            <button type="submit" name="submit" id="sub.btn">Subscribe</button>
            </form>

        </div>

    </footer>

    </footer>


    

   

    
</body>
</html>