
<?php
session_start();
?>
<?php
    
    function check_if_added_to_cart($item_id){
        //session_start();    
        require 'connection.php';
        $user_id=$_SESSION['id'];
        $product_check_query="select * from users_items where item_id='$item_id' and user_id='$user_id' and status='Added to cart'";
        $product_check_result=mysqli_query($con,$product_check_query) or die(mysqli_error($con));
        $num_rows=mysqli_num_rows($product_check_result);
        if($num_rows>=1)return 1;
        return 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shivamTech2etc Ecommerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
    <link rel="icon" href="css/favicon.ico" type="image/x-icon">
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


<section id="prodetails" class="section-p1">
 
    <div class="single-pro-image">
        <img src="img/th (20).jpg" width="100%" id="MainImg" alt="" height="460px">

        <div class="small-img-group">
            <div class="small-img-col1">
                <img src="img/th (20).jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col1">
                <img src="img/th (13).jpg" width="100%" class="small-img" alt="">
            </div>
            
            <div class="small-img-col1">
                <img src="img/th (17).jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col1">
                <img src="img/th (4).jpg" width="100%" class="small-img" alt="">
            </div>
            

        </div>
    </div>

 
   


    <div class="single-pro-details">
    <h6>HOME / T-Shirt</h6>
  <h4>Men's CPP Fashion T Shirt</h4>
  <h2>1000</h2>
   <select>  <option >Size Guide</option>
    <option >XL</option>
    <option >XXL</option>
    <option >Small</option>
    <option >Large</option>
</select>
<input type="number" value="1">

<?php if(!isset($_SESSION['email'])){  ?>
    <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
    <?php
    }else{
        if(check_if_added_to_cart(10)){
            echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
        }else{
            ?>
            <a href="cart_add.php?id= 10" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
            <?php
        }
    }
    ?>


 <h4>Product Details</h4>
  <span> CPP UA Tech fabric is quick-drying, ultra-soft & has a more natural feel. Material wicks sweat & dries really fast. New, streamlined fit & shaped hem. UA Tech™ is our original go-to training gear: loose, light, and it keeps you cool. That's why this men's training T-shirt is everything you need. Loose: Fuller cut for complete comfort. TALL Sizes: All tall sizes are 2”/ 5 cm longer than regular sizes. Sleeve lengths are adjusted proportionately depending on silhouette.Anti-odor technology prevents the growth of odor-causing microbes.</span>

    </div>
</section>







<section id="product1" class="section-p1">
    <h2>Featured Product</h2>
    <p>Winter Collection New Mordern Design</p>
    <div class="pro-container">
      <div class="pro">
        <img src="img/th (13).jpg" alt="" height="360px">
        <div class="des">
          <span>adidas</span>
          <h5>Cartoon Astronaut T-shirt</h5>
          <div class="star">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href="#">  <i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
    
    
      <div class="pro">
        <img src="img/th (14).jpg" alt="" height="360px">
        <div class="des">
          <span>adidas</span>
          <h5>Cartoon Astronaut T-shirt</h5>
          <div class="star">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href="#">  <i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
    
    
      <div class="pro">
        <img src="img/th (20).jpg" alt="" height="360px">
        <div class="des">
          <span>adidas</span>
          <h5>Cartoon Astronaut T-shirt</h5>
          <div class="star">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href="#">  <i class="fa-solid fa-cart-shopping cart"></i></a>
      </div>
    
    
    
      <div class="pro">
        <img src="img/th (16).jpg" alt="" height="360px">
        <div class="des">
          <span>adidas</span>
          <h5>Cartoon Astronaut T-shirt</h5>
          <div class="star">
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
          </div>
          <h4>$78</h4>
        </div>
        <a href="#">  <i class="fa-solid fa-cart-shopping cart"></i></a>
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














