<!DOCTYPE html>
<html lang="en">
<head>

     <title>Job Portal</title>
     <link rel="shortcut icon" type="image/png" href="images\favicon.ico"/>
     
     <link rel="stylesheet" href="css/otherdesign/bootstrap.min.css">
     <link rel="stylesheet" href="css/otherdesign/owl.carousel.css">
     <link rel="stylesheet" href="css/otherdesign/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/otherdesign/font-awesome.min.css">
     
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">
     <style>
          .home_b .btn-lg{
    font-size: 30px !important;
    margin:40px !important;
  }
     </style>

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <!-- <div class="container"> -->
               <div>

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <img src="images\logo.png" width="200px" height="60px">
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About us</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                         <li><a href="register.php" class="smoothScroll">Register</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- Home -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-sm-12">
                         <div class="home-info">
                              <h1>WE HELP YOU TO GET YOUR DREAM COME TRUE</h1>
                              <div class="home_b">
                                        <button type="button" onclick="location.href='adminlogin.php';" class="btn btn-primary btn-lg cus">Admin Login</button>
                                        <button type="button" onclick="location.href='studentlogin.php';" class="btn btn-primary btn-lg cus">Student Login</button>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-image"></div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="testimonial-info">

                              <div class="owl-carousel owl-theme">

                                   <div class="item">
                                        <div class="section-title">
                                             <h1>Sandesh Shivane</h1>
                                        </div>
                                        <h3>Pursuing MCA from Sardar Patel Institute of Technology <br>Enrollment No: 2021510063</h3>
                                   </div>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h1>Say hello to us</h1>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <input type="text" class="form-control" placeholder="Full name" name="name" required="">
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="email" class="form-control" placeholder="Email address" name="email" required="">
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="8" placeholder="Your message" name="message" required=""></textarea>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </section>       


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2022 Designed by- Sandesh Shivane
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>