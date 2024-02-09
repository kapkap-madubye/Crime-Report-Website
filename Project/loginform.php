<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginin/Green</title>
    <link rel="stylesheet" href="index.css">

    
    
</head>
<body class="form"  method="post">
    <form action="loginfun.php" method="post">
        <h4 style="color:green;">Log-In</h4>
        <label for="name"><strong></strong></label>
        <input type="text" name="fname"id="email" placeholder="first Name/Email"> <br>

        <label for="Password"><strong></strong></label>
        <input type="password" id="password" name="password" placeholder="Password"> <br>
        
        
        <span class="buttons"  >

            <button id="btn-submit" name="submit" type="submit">log-in &#8594; </button> <br>
        </span>

        <a href="form.php" style="color:green;">Dont have Account</a>
        <div>
            <?php
             if(isset($_GET["error"])){
                if ($_GET["error"]=="usernotfound"){
                    echo "<p style=color:red;>User not Found<p>";
                }
                
               
                else if($_GET["error"]=="incorrectpassword"){
                    echo "<p style=color:red;>Incorrect Password<p>";
        
                }
                else if($_GET["error"]=="emptyinput"){
                    echo "<p style=color:red;>Fill all fields<p>";
        
                }
               
        
            }
           


            ?>



        </div>
       

        


    </form>
</body>   
</html>	 