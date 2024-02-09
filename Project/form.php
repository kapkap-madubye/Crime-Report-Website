<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup/Green</title>
    <link rel="stylesheet" href="index.css">
</head>
<body class="form2" >
   
    <form action="signin.php"  method="post">
        <h4 style="color:green;">Sign-In</h4>

        <label for="name"><strong></strong></label>
        <input type="text" id="fname" name="fname" placeholder="Enter name"> <br>

       
        <label for="email"><strong></strong></label>
        <input type="email" id="email2" name="email" placeholder="Enter email address"><br>
       

       
        <label for="password"><strong></strong></label>
        <input type="password" id="password" name="password" placeholder="Enter Password" ><br>

        <label for="passwordrpt"><strong></strong></label>
        <input type="password" name="rptpassword" id="passwordrpt" placeholder="Re-Enter-Password"><br>
       

       <button type="submit" name="submit" id="submit">Sign-up &#8594; </button> <br>

       <a href="loginform.php" style="color:green;">have Account</a><br>


       <div>
           <?php
           if(isset($_GET["error"])){
           if ($_GET["error"]=="emptyinput"){
            echo "<p style=color:red;>Fill in all fields<p>";
            }
            else if($_GET["error"]=="emptyinputname"){
            echo "<p style=color:red;>Incorrect UserName format<p>";

            }
            else if($_GET["error"]=="emptyemailinput"){
            echo "<p style=color:red;>Incorrect Email format<p>";

            }
            else if($_GET["error"]=="mismatch"){
            echo "<p style=color:red;>Passwords don't match<p>";

            }
            else if($_GET["error"]=="usernametaken"){
            echo "<p style=color:red;>UserName already exists<p>";

            }
             else if($_GET["error"]=="none"){
            echo "<p style=color:green>You have signed up<p>";

        }

        

    }
    
    
    
    
       ?>


       </div>

    </form>

    
    



</body>
</html>