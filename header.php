<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <h3 style="color : white">MOSCHINO</h3>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">

                        <?php
                  if(isset($_SESSION['email'])){
                  ?>
                  <li><a href="index.php"><span class="nav-link"></span> Home</a></li>
                           <li><a href="shop.php"><span class="nav-link"></span> Shop</a></li>
                           <li><a href="cart.php"><span class="nav-link"></span> Cart</a></li>
                           <li><a href="logout.php"><span class="nav-link"></span> Logout</a></li>
                    <?php
                }else{
                    ?>
                           <li><a href="index.php"><span class="nav-link"></span> Home</a></li>
                           <li><a href="shop.php"><span class="nav-link"></span> Shop</a></li>
                           <li><a href="blog.php"><span class="nav-link"></span> Blog</a></li>
                           <li><a href="about.php"><span class="nav-link"></span> About</a></li>
                           <li><a href="contact.php"><span class="nav-link"></span> Contact</a></li>
                           <li><a href="signup.php"><span class="nav-link"></span> Sign Up</a></li>
                          <li><a href="login.php"><span class="nav-link"></span> Login</a></li>
                      <?php
                }
                ?>
                           
                       </ul>
                   </div>
               </div>
</nav>