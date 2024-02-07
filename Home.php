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
    <title>About</title>
    <!--<link rel="stylesheet" href="about.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Icon css link -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  css file --> 
    <link rel="stylesheet" href="Header-footer.css">    
    <link rel="stylesheet" href="Homepage.css"> 
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

    <!--Home-section-->
<main>
      <!------------------------------------------section-one------------------------------------------------->
            <section id="section-one">
                <div class="text">
                        <button class="start"><a href="#"><b>HOW COULD YOU HELP</b></a></button>
                </div>
                <div class="caption-holder">
                    <div class="caption-main">
                        <div class="leftArrow" onclick="plus(-1)"><span class="arrow arrowLeft"></span></div>
                        <div class="rightArrow" onclick="plus(1)"><span class="arrow arrowRight"></span></div>
                        <div class="real-caption"><p class="real-text">Captions</p></div>
                        <div class="caption"><p class="text-text">
                            DONATE & SUPPORT OUR WORK TODA
                            
                        </p></div>
                        <div class="caption"><p class="text-text">
                            <b>TELL THE WORK YOU STAND #WITHREFUGES</b>
                        </p></div>
                        <div class="caption"><p class="text-text">
                           <b>629,000 PEOPLE HAVE PLEDGED THEIR SUPPORT</b>
                        </p></div>
                        <div class="caption"><p class="text-text">
                                <b>TELL THE WORK YOU STAND #WITHREFUGES</b>
                        </p></div>
                        <div class="caption"><p class="text-text">
                                <b>TELL THE WORK YOU STAND #WITHREFUGES</b>
                        </p></div>
                        <div class="caption"><p class="text-text">
                                <b>TELL THE WORK YOU STAND #WITHREFUGES</b>
                        </p></div>
                    </div>
                </div>
            </section>
            <!-----------------------------------------------------section-two--------------------------------->
            <section id="section-two">
                    <div class="box-1">
                            <h1><b>DONATE NOW</b></h1>
                            <p>Please donate your ideas, thoughts or money and help us change the world. With a financial donation you can help us connect people and create partnerships around the world and through that, help us help people. </p>
                            
                        </div>
                        <div class="box-2">
                            <h1><b>JOIN US NOW</b></h1>
                            <p>Complete online fundraising system for active, participatory events. Includes registration, team and individual pages, progress bars, leader tables, and customizable emails.

                              </p>
                           
                        </div>
                        <div class="box-3">
                            <h1><b>GET INVOLVED</b></h1>
                            <p>Few companies existed to help non-profits raise money online. We set out to change that by creating a company founded on the desire to blend a business opportunity with a chance to do some good.</p>
                            
                        </div>
            </section>
            <!---------------------------------------------------------section-three----------------------------->
            <section id="section-three">
                <div class="about">
                    <b>STORY ABOUT US</b>
                </div>
                <div class="every">
                        <h2>EVERYONE.EVERYWHERE<br>EQUAL VALUE</h2>
                        <p>We  work with children and young people to change systems and practicesthat affect them. We campaign on the root causes of conflict,and we demand that children are at the center of all humanitarian responses.</p>
                        <a href="About.php"><b>LEARN MORE...</b></a>
                    </div>
            </section>
            <!---=========================================================section-four======================-->
            <section id="section-four">
                    <div class="box">
                            <h1><b>468</b></h1>
                            <h3><b>Succesful Project</b></h3>
                            <p>Our main objective is to increase the scale of our work and reach more children in conflict areas. </p>
                            
                        </div>
                        <div class="box">
                            <h1><b>1534</b></h1>
                            <h3><b>People Impacted</b></h3>
                            <p>We promise to respect you and your decisions. we will do all we can to ensure that no agencies working on our behalf will do so either.</p>
                            
                        </div>
                        <div class="box">
                            <h1><b>$144</b></h1>
                            <h3><b>Money Donated</b></h3>
                            <p>Where schools have closed, we are working on home education kits which will mean poor children without books at home can continue to learn and play.</p>
                            
                        </div>
                        
                
            </section>
            <!---------------------------------------section-five------------------------------>
            <section id="section-five">
                <div class="section-five1"><b>BECOME DONOR</b></div>
                <h1><b>NO ONE HAS EVER BECOME POOR BY GIVING</b></h1>
                <p>The message of The Faithland is that Christ saves sinners. In light of<br>
                        that, we steward a message that radically changes lives.</p>
                <a href="docharity.php"><b>GET DONATE NOW!</b></a>
               
            </section>
            <!-- ==================================news carousel ====================================== -->
 
 <section id="news-section">
    <div class="news-title">
      <h3>BE FIRST TO READ</h3>
      <h1>LATEST NEWS</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1575356891535-a79c0bc6bffc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:100%;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>Organisation</h1>
                <p>Give Donation</p>
                <p>Help Others!!</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Organisation</h4>
            <p>We provide crucial healthcare support to children, including newborns, infants, young children and adolescentsSupport Save the Children's humanitarian response for the worst-affected amidst the ongoing crisis</p>
            <div class="flip-content-a">
              <a href="www.google.com">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1593692921340-fc60d23770c6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>COVID 19</h1>
                <p>Give Donation</p>
                <p>Help Others!!</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>COVID 19</h4>
            <p>We’re proud of our staff and volunteers, who have been putting themselves at risk to help families avoid the devastation of food insecurity. We know that no mother wants to send her children to be hungry.</p>
            <div class="flip-content-a">
              <a href="www.google.com">Read More</a>
            </div>
          </div>      
        </div>
  
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1601931163309-fe9459564c03?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>Earthquake</h1>
                <p>Give Donation</p>
                <p>Help Others!!</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Earthquake</h4>
            <p>Your support enables the global Red Cross network to deliver lifesaving aid and the vital help communities need to rebuild lives. Your support enables the global Red Cross network to deliver lifesaving aid.</p>
            <div class="flip-content-a">
              <a href="www.google.com">Read More</a>
            </div>
          </div> 
        </div>
  
      </div>
    </div>
  
  
  
  
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1593113630400-ea4288922497?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:100%;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>Charity</h1>
                <p>Give Donation</p>
                <p>Help Others!!</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Charity</h4>
            <p>“Charity means giving something to those in needs without expectation or wanting something back in return.” Sumi Oetomo. All of my friends believe charity is doing good to others. </p>
            <div class="flip-content-a">
              <a href="www.google.com">Read More</a>
            </div>
          </div>
        </div>
  
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1600336153113-d66c79de3e91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Avatar" style="width:300px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>Flood</h1>
                <p>Give Donation</p>
                <p>Help Others!!</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Flood</h4>
            <p>All donations to this fund will support recovery and relief efforts for flooding and monsoons in India. Initially, the fund will help first responders meet survivors' immediate needs for food.</p>
            <div class="flip-content-a">
              <a href="www.google.com">Read More</a>
            </div>
          </div>      
        </div>
  
        <div class="col-sm-4">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="https://images.unsplash.com/photo-1532372722026-28ddb1b48daf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
              </div>
              <div class="flip-card-back">
                <h1>Poor People</h1>
                <p>Give Donation</p>
                <p>Help Others!!</p>
                <button>Donate</button>
              </div>
            </div>
          </div>
          <div class="flip-content">
            <h4>Poor People</h4>
            <p>A poor is an individual who does not have the minimum essential necessities of life. Women, female infants and elderly are considered to the poorest of the poor.
            </p>
            <div class="flip-content-a">
              <a href="www.google.com">Read More</a>
            </div>
          </div> 
        </div>
  
      </div>
    </div>
  
  
    
  </section> 
</main>

<!--==============================javascript-file================================================S-->
<script src="home.js"></script>

  


   <!-- Footer -->
   <footer>
        <div class="footer">
            <div class="container">
                 <!-- Grid row -->
                 <div class="row">
                    <!-- Grid column1 -->
                   <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                       <h3>Find Fortune</h3>
                       <p>Hope for Children is an international charity working towards a world where every child has a happy childhood that sets them up for a positive future.</p> 
                                    
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
                        <p>We are helping to change this by delivering education, health, livelihoods and Child Rights projects that benefit thousands of children and families each year.</p>
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

    <?php if (isset($_SESSION['success']) and (isset($_SESSION['username']))) :   ?>
    <script>
           
        alert("<?php
            echo "\\n";
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
            echo "\\n \\nWelcome ";
            echo $_SESSION['username'];
        ?>");
       
    </script>
   <?php endif ?>
</body>
</html>