<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_form.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: index.html');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docharity Page</title>

    <!-- ------------css file link---------- -->
    <link rel="stylesheet" href="docharity.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Icon css link -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  css file --> 
    <link rel="stylesheet" href="Header-footer.css">
</head>
<body>
<div class="header">
        <!-- Logo -->
        <nav id="logo"><a class="navbar-brand" href="#"><img src="assets/images/logo.jpeg"> Find Fortune</a></nav>
        <!-- Logo-->
        <input type="checkbox" id="chk">
        <label for="chk" class="show-btn">
            <i class="fa fa-bars" ></i>
        </label>
        <ul class="menu">
            <!-- Links -->

           <li><a href="About.php">About Us</a></li>
           <li><a href="faq_page.php">FAQ</a></li>
           <li class = "dropdown"><a href="docharity.php">Do Charity<i class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul class="submenu">
                <li> <a href="docharity.php#individual">Individual</a></li>
                <li><a href="docharity.php#emergency">Emergency</a></li>
                <li><a href="docharity.php#organization">Organization</a></li>
            </ul>
        </li>
        <li><a href="myaccount.php">My Account</a></li>
        <li><a href="contact us.php">Contact Us</a></li>
        <li>
          <!------logout button ------>
          <a href="Home.php?logout='1'"> 
          <input type="submit" value = "Log out" name = "logout" class = "logout"></a>
        </li>
           
           
           <label for="chk" class="hide-btn">
               <i class="fa fa-times" ></i>
           </label>
        </ul>
       
    </div>
    
    <br><br><br><br><br>
    
    <!-- -------------Banner image------------ -->
    <section class="charity-banner">
        <div class="charit">
            <img src="assets/images/docharity-page-images/banner-img.jpg" alt="">
        </div>
    </section>


    <section class="docharity">

        <!-- ----------------Individual donation--------------------- -->
        <a name="individual"></a>
        <h1 class="head">Individual</h1>
        <div class="card1">
            <div class="blog-post">
                <div class="blog-post-img">
                    <img src="assets/images/docharity-page-images/individual-img.jpg" alt="">
                </div>
                <div class="blog-post-info">
                    <h1 class="blog-post-title">Individual</h1>
                    <p class="blog-post-text">
                        A single step of yours can change a life of any individual. Come forward and donate for any cause you that you might think is the most crucial sector that needs help. You can either donate your time or your money or anything that can help anyone.
                    </p>
                    <a href="individual.php" class="blog-post-button">Donate Now</a>
                </div>
            </div>
        </div>

        <!-- -------------organization donation------------------ -->
        <br><br><br><br><br>
        <a name="organization"></a>
        <h1 class="head">Organization</h1>
        <div class="card2">
            <div class="blog-post">
                <div class="blog-post-img">
                    <img src="assets/images/docharity-page-images/organization-img.jpg" alt="">
                </div>
                <div class="blog-post-info">
                    <h1 class="blog-post-title">Organization</h1>
                    <p class="blog-post-text">
                        Be a small helping hand or a little live supporting system for those who are alone in this big world. Donate for organizations who give home to homeless peoples and provide them food, education, health and many other essential items of daily needs to those who can’t afford all these.
                    </p>
                    <a href="organisation.php" class="blog-post-button">Donate Now</a>
                </div>
            </div>
        </div>

        <!-- -------------emergency donation------------------ -->
        <br><br><br><br>
        <a name="emergency"></a>
        <h1 class="head">Emergency</h1>
        <div class="card3">
            <div class="blog-post">
                <div class="blog-post-img">
                    <img src="assets/images/docharity-page-images/emergency-img.jpg" alt="">
                </div>
                <div class="blog-post-info">
                    <h1 class="blog-post-title">Emergency</h1>
                    <p class="blog-post-text">
                        Problems are always uninvited, you never know what’s wrong happens with someone in the very next moment. So, it’s always better to be ready for such situations. Let’s donate for those who struck in natural calamities or for those who fight for their lives as well as for ours or for many unexpected problems like that.

                    </p>
                    <a href="emergency.php" class="blog-post-button">Donate Now</a>
                </div>
            </div>
        </div>
        
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <div class="container">
                 <!-- Grid row -->
                 <div class="row">
                    <!-- Grid column1 -->
                   <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                       <h3>Find Fortune</h3>
                       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error incidunt voluptates possimus vero aut est!</p> 
                                    
                   </div>
                    <!-- Grid column1 -->

                     <!-- Grid column2 -->
                     <div class="col-md-3 col-sm-6 col-xs-12 segment-two ">
                        <!-- Links -->
                       <h2>Useful  Link</h2>
                      <ul>
                      <li><a href="About.php">About Us</a></li>
                          <li><a href="faq_page.php">FAQ</a></li>
                          <li><a href="docharity.php">Do Charity</a></li>
                          <li><a href="myaccount.php">My Account</a></li>
                          <li><a href="contact us.php">Contact Us</a></li>
                      </ul>
                                    
                   </div>
                    <!-- Grid column2 -->

                     <!-- Grid column3 -->
                     <div class="col-md-3 col-sm-6 col-xs-12 segment-three ">
                        <h2>Follow Us</h2>
                        <!-- Links -->
                        <p>Please Follow us on our Social Media Profile In order to keep updated.</p>
                      
                        <a href="www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="www.pinterest.ca"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <!-- Grid column3 -->

                     <!-- Grid column 4-->
                     <div class="col-md-3 col-sm-6 col-xs-12 segment-four ">
                        <h2>Our Newsletter</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt quam id adipisci assumenda quasi ad.</p>
                         <!-- Form -->
                         <form action="">
                            <input type="email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                     <!-- Grid column 4-->

                </div>
                <!-- Grid row -->
                </div>
        </div>
         <!-- Copyright -->
         <p class="footer-bottom-text">All Right reserved by &copy;Find Fortune.2020</p>
         <!-- Copyright -->
    </footer>
    <!-- End Footer -->

</body>
</html>