<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shivamTech2etc Ecommerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
   
<link rel="stylesheet" href="style.css">
</head>
    <body>
<section id="header">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
<?php
                require 'header.php';
            ?>
</section>


<section id="page-header" class="about-header">
<h2>#let's_talk</h2>
<p>LEAVE A MESSAGE ,We love to hear from you</p>
</section>

<section id="contact-details" class="section-p1">
    <div class="details" >
        <span>GET IN TOUCH</span>
        <H2>Visit one of our agency locations or contact us today</H2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fal fa-map" ></i>
                <p>56 GLassford Street Glassglow G1 !UL New York</p>
            </li>
            <li>
                <i class="fal fa-map" ></i>
                <p>56 GLassford Street Glassglow G1 !UL New York</p>
            </li>
            <li>
                <i class="fal fa-map" ></i>
                <p>56 GLassford Street Glassglow G1 !UL New York</p>
            </li>
            <li>
                <i class="fal fa-map" ></i>
                <p>56 GLassford Street Glassglow G1 !UL New York</p>
            </li>
        </div>
    </div>
    <div class="map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7057189.508677635!2d69.55734219999997!3d30.268620799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092b9451ae8dfd%3A0xf39c46d34a152faa!2sGraphic%20Era%20(Deemed%20to%20be%20University)!5e0!3m2!1sen!2sin!4v1672055752481!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>


<!-- <section id="form-details">
<form action="mailto:shivam">
    <span>LEAVE A MESSAGE</span>
    <H2>We love to hear from you</H2>
    <input type="text"   placeholder="Your Name" >
    <input type="text"   placeholder="Your Email" >
    <input type="text"   placeholder="Your Subject" >
    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
   <button class=" normal">Submit</button>
</form>  


<div class="people">
    <div>
        <img src="" alt="">
    </div>
</div>
</section> -->


<section id="form-details">
  <form action="mailtoinfo:shivam2003" method="post" enctype="text/plain">
      <span>LEAVE A MESSAGE</span>
      <H2>We love to hear from you</H2>
      <input type="text" name="yourName" value=""  placeholder="Your Name" >
      <input type="email"  name="yourEmail" id="" value="" placeholder="Your Email" >
      <input type="text" name="yourSubject" value=""  placeholder="Your Subject" >
      <textarea id="" cols="30" rows="10" name="yourMessage" value=""  placeholder="Your Message"></textarea>
     <button class=" normal">Submit</button>
  </form>  
  
  
  <div class="people">
      <div>
          <img src="" alt="">
      </div>
  </div>
  </section>
  


  <section id="newsletter" class="section-p1 section-m1">
  <div class="newstext">
    <h4>Sign Up for Newsletters</h4>
    <p>Get E-Mail update about latest shop and <span>special offer</span></p>
  </div>
  
   <div class="form">
    <input type="email" placeholder="Your email address">
   <button class="normal"> Sign up</button> 
  </div>
  </section>

<div> 
<link rel="stylesheet" href="style.css">
    <footer class="section-p1">
        <div class="col">
            <img src="img/logo1.jpg" class="logo" alt="">
            <h4>Contact</h4>
            <p> <strong>Address</strong> :130 A II-D,Sector-2 ,Vaishali GZB,UP </p>
            <p><strong>Phone:</strong>8287039364 </p>
            <div class="follow">
                <h4>Follow Us</h4> 
                <div class="icon">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

    <div class="col">
    <h4>About</h4>
    <a href="about.html">About</a>
    <a href="#">Delivery Information</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms & Conditions</a>
    <a href="contact.html">Contact Us</a>
    </div>

    <div class="col">
    <h4>My Account</h4>
    <a href="login.html">Sign In</a>
    <a href="cart.html">View Cart</a>
    <a href="#">My Wishlist</a>
    <a href="#">Track My Order</a>
    <a href="#">Help</a>
    </div>

    <div class="col install">
    <h4>Install App</h4>
    <p>From App Store or Google Play</p>
    <div class="row">
    <img src="img/th (26).jpg" width="170px" alt="" srcset="">
    <img src="img/th (25).jpg" alt="" width="170px"  srcset="">

    </div>
    <p>Secured Payment Gateways</p>
    <img src="img/f27.webp" width="180px"alt="">
    </div>
    </footer>
   <br>
    <br>
    <div class="copyRight">
      <p class="cr">@ 2023, shivamTech2 etc. HTML CSS Ecommerce </p>
    </div>
</div>
<script src="script.js"></script>
</body>


</html>
