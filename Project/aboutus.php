<?php 
session_start();

?>


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
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/813721c2c5.js" crossorigin="anonymous"></script>
    <title>Green/About Us</title>
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
<div class="signout1">
        <a href="loginform.php">Log-out</a>
 
    </div>

<div class="aboutuspage">
        <h1>About Us</h1><br>
        <br>
        <img name="slide" id="slide1" width="80%" height="360px">
    <br>
    <br>

<h2>
        Green works to safeguard the earth—its people, its plants <br>
        and animals, and the natural systems on which all life depends.
    
</h2><br><br>
<p>We combine the power of more than three thousand members and online activists with the expertise of <br>
    some 700 scientists, lawyers, and policy advocates across the globe to ensure the rights of all people to<br>the air, the water, and the wild.
</p>
<br>
<br>
<h2>Our Finances and Progress</h2>
<br>
<h5>
    Green is a non Profitable Organization,<br>
    Registered in 2021 Johannesburg Under<br>
    under the law of South Africa.Our work<br>
    helps safeguard the air we breathe, the water<br>
     we drink  and the places we treasure.

</h5><br>
<br>
<h2>Our Leadership</h2><br>
<h5>
    Green was found by Group of IT students<br>
    From Unversity of Johannesburg.Today's<br>
    leadership team and board of trustees<br>
    makes sure the organization continues to<br>
    work to ensure the rights of all people to<br>
    clean air, clean water, and healthy communities.

</h5>
<br>
<br>
<h2>Our Partnership</h2>
<h5><br>
With dedicated staff working in more than a <br>
dozen program areas, we partner with businesses<br>
businesses, elected leaders, and <br>
community groups on the biggest issues we<br>
face today.
</h5>
<br>
<br>
<h2>Our Mission</h2>
<br>
<h5>
The Green campaign exists to advocate for the immediate and drastic <br>
action that is required to avoid the catastrophic destabilization of the <br>
world climate,With the probable exception of all-out conflict with contemporary<br>
weapons of mass destruction, climate destabilization has become the greatest <br>
threat to our planet and everyone on it. We don't know how much irrevocable <br>
harm we've already done, but we do know that if we don't act now, the <br>
consequences will be many times worse.
<br>
<br>
<br>
Green  was established to ensure that we get the action we need - on a <br>
local, national, and, most importantly, international level - to reduce <br>
damaging climate change and its catastrophic consequences. To that end, Green <br>
aims to raise awareness about the seriousness and urgency of the threat posed<br>
 by climate change as well as to persuade those in positions of power to take <br>
 meaningful action as soon as possible. Green exists to combat ignorance, <br>
 short-term greed, and vested interests that stand in the way of taking action<br>
  that is desperately needed.
  <br>
  <br>
  <br>
Green in particular, organizes public demonstrations in order to bring together<br>
as many people as possible and form a mass movement to advocate for our objectives<br>
Green is working to find a global solution to a global problem by pushing for a worldwide <br>
emissions reductions pact that is both effective in preventing catastrophic climate destabilization<br>
and equitable in its implementation. To be effective, such a pact must guarantee reductions <br>
in global total greenhouse gas emissions that are deemed necessary to avoid adverse climate change<br> 
by a broad majority of competent scientific opinion. Green goal is to raise awareness about <br>
individuals who are most responsible for obstructing or delaying the critically needed progress<br>
toward an international climate accord.
<br>
<br>
<br>
Green recognizes that the issue of global climate destabilization has far-reaching consequences for<br>
social justice and global inequity.The wealthier nations have done most of the damage to the earth's<br>
atmosphere so far, but the poorest will suffer the most and most quickly. Green recognizes that any solution<br>
must be as equitable as possible,integrating social justice principles and not aggravating global inequities.<br>
Green aspires to bring together as many people as possible who share our broad goals of pressing for immediate <br>
climate action and lowering global emissions. As a result, Green does not campaign on the crucial but more detailed<br>
topics of how to best achieve these emission reductions, acknowledging that supporters will hold differing and passionately<br>
held views on these matters.  
</h5>




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