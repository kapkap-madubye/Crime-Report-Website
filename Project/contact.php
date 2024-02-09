



<script>
var i=0;
var images=[];
var time=9000;

images[0]='images/pic1.webp';
images[1]='images/rhino.jpg';
images[2]='images/scal.jpg';
images[3]='images/bear.jpg';
images[4]='images/Poaching2-1.jpg';
images[5]='images/snow.jpg';
images[6]='images/Hero+2.png';
images[7]='images/arpec_poster.jpg';
images[8]='images/burn2.jpg';
images[9]='images/deforestation.jpg';
images[10]='images/tog.jpg';


function changeimg(){
    document.slide1.src=images[i];

    if(i<images.length - 1){
      i++

    }else{
      i=o;
    }
    setTimeout("changeimg()", time);
  
  
  }
  window.onload=changeimg;
</script>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green/Contact Us</title>
    <script src="https://kit.fontawesome.com/813721c2c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <!---<script src="slide.js"></script>--->
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
       <!-- <a href="form.php">Sign-Up</a>-->
        
        <!--<a href="#"><i class="fa fa-sign-out" style="font-size:20px;color:white"></i></a> -->

         
        </nav>
        
</div>
<div class="signout1">
<a href="loginform.php">Log-out</a>
 
    </div>


<div class="contactpage">
    <h1>Contact Us</h1>
    <br>
    <img name="slide1" id="slide1" height="360px" width="80%">
    <br>
    
    <br>
    <h2>E-MAIL US:</h2>
    <br>
    <ul>
        <li>General Questions:<a href="#" style="text-decoration:none;">218020452@student.uj.ac.za</a></li> <br>
        <li>Website Problems/Questions:<a href="#" style="text-decoration:none;" >danielkapukapu@gmail.com</a></li> <br>
        <li>Webinars Questions:<a href="#"  style="text-decoration:none;">tfseakgela@gmail.com</a></li><br>
        <li>Consultation Info:<a href="#"  style="text-decoration:none;">221134256@student.uj.ac.za</a></li> <br>
        <li>Calls:<a href="#" style="text-decoration:none;">+27 62 330 1514</a></li> <br>
        


    </ul>
    <br>
    <br>
    
    <br>

    <h2>Our Offices</h2><br>
    
    <br>
    <h4 style="color:green;">Johannesburg</h4>
    <br><h5>Johannesburg,2001</h5>
    <br><h5>208-212 Jeppe Street</h5>
    <br><h5>Marble Towers</h5>
    <br>
    <br>
    <h4 style="color:green;">Mokopane</h4>
    <br><h5>Mokopane,0600</h5>
    <br><h5>101 Thabo Mbeki Dr</h5>
    <br><h5>Welkom Gebou</h5>
    <br>
    
    <br>
    <h4 style="color:green;">Cape Town</h4>
    <br><h5>Cape Town,8000</h5>
    <br><h5>Hans Strijdom Ave</h5>
    <br><h5>Thibault Square</h5>
    <br>
    <br>
    <h4 style="color:green;">Durban</h4>
    <br><h5>Durban,4001</h5>
    <br><h5>11 Walnut Rd, Durban Central</h5>
    <br><h5>Regus - Durban, Kingsmead</h5>





</div>
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
    
</body>
</html>