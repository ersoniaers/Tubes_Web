<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['Email'])){
header ("location:form-sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Setelah login </title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      
      <div class="bg-primary py-3 top-bar shadow d-none d-md-block">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-md-right">
              <a href="form-sign-up.php" class="p-3">Sign Up</a>
              <a href="form-sign-in.php" class="p-3">Sign In</a>
              <a href="sign-out.php" class="p-3">Sign Out</a>

            </div>
          </div>
        </div>
      </div>

      <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="site-logo">
              <a href="index.html" class="text-white"> VISO ( Village Information SOcial Indramayu) </a>
            </div>

            <nav class="site-navigation text-left ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li class="active">
                	<a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Tentang </a>
                	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
             	   		<a class="dropdown-item" href="kategori_perkembangan.html"> Klasifikasi Desa </a>
                   		<a class="dropdown-item" href="perkembangan.html"> Perkembangan Desa </a>
                	</div>
               	</li>
                <li class="nav-item dropdown">
                	<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sistem </a>
                   		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          	<a class="dropdown-item" href="Penilaian.html">Penilaian</a>
               	        </div>
               	 </li>
            </nav>

            <div class="ml-auto toggle-button d-inline-block d-lg-none">
            	<a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white">
            		<span class="icon-menu h3 text-white"></span>
            	</a>
            </div>
          </div>
        </div>
      </header>

    <div class="owl-carousel-wrapper">
      <div class="box-92819">
        <h1 class="text-white mb-3">Desamu Mencerminkan Perkembangan Bangsamu</h1>
      </div>
      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/pulau1.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/nelayanku.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/sawahku.jpg');"></div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row mb-5 align-items-st">
          <div class="col-md-4">
            <div class="heading-20219">
              <h2 class="title text-cursive">Harapan Kemendes</h2>
            </div>
          </div>
          <div class="col-md-8">
            <p>Kementerian desa memiliki beberapa indikator untuk mengategorikan tingkat perkembangan suatu desa. Tiga indikator di antaranya seperti ekonomi, sosial, dan lingkungan.</p>
          </div>
        </div>

    <div class="site-section">
      <div class="container">
        <div class="heading-20219 mb-5">
          <h2 class="title text-cursive">Latest Event</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="event-29191 mb-5">
              <a href="#" class="d-block mb-3"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="px-3 d-flex">
                <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                  <span class="text-white h3 m-0 d-block">22</span>
                  <span class="text-white small">Oct 2019</span>
                </div>
                <div>
                  <div class="mb-3">
                    <span class="mr-3"> <span class="icon-clock-o mr-2 text-muted"></span>9:30 AM &mdash; 11:30 AM</span>
                    <span> <span class="icon-room mr-2 text-muted"></span>Ghana Africa</span>
                  </div>
                  <h3><a href="single.html">Ratione Delectus Assumenda Rem Modi Quaerat Laborum</a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="event-29191 mb-5">
              <a href="#" class="d-block mb-3"><img src="images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="px-3 d-flex">
                <div class="bg-primary p-3 d-inline-block text-center rounded mr-4 date">
                  <span class="text-white h3 m-0 d-block">22</span>
                  <span class="text-white small">Oct 2019</span>
                </div>
                <div>
                  <div class="mb-3">
                    <span class="mr-3"> <span class="icon-clock-o mr-2 text-muted"></span>9:30 AM &mdash; 11:30 AM</span>
                    <span> <span class="icon-room mr-2 text-muted"></span>Ghana Africa</span>
                  </div>
                  <h3><a href="single.html">Ratione Delectus Assumenda Rem Modi Quaerat Laborum</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
            <div class="d-md-flex cta-20101 align-self-center bg-light p-5">
              <div class=""><h2 class="text-cursive">Helping School Children, Building Villages, and Health Facilities</h2></div>
            </div>
      </div>
    </div>
    <h2 class="title text-cursive">Massage</h2>
    <div class="col-md-12 ml-auto">
        <div class="mb-5">
             <div class="site-section">
		      <div class="container">
        
        		<div class="row">
        			<div class="col-lg-8 mb-5" >
            			<form action="#" method="post">
              				<div class="form-group row">
               					 <div class="col-md-6 mb-4 mb-lg-0">
                  				 		<input type="text" class="form-control" placeholder="First name">
                				</div>
            		    		<div class="col-md-6">
                 						<input type="text" class="form-control" placeholder="First name">
                				</div>
              				</div>

              				<div class="form-group row">
                				<div class="col-md-12">
                  					<input type="text" class="form-control" placeholder="Email address">
                				</div>
              				</div>

              				<div class="form-group row">
                				<div class="col-md-12">
                  					<textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                				</div>
              				</div>

              				<div class="form-group row">
                				<div class="col-md-6 mr-auto">
                  					<input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Send Message">
                				</div>
              				</div>
            			</form>
          			</div>
        		</div>
   		   </div>
    	</div>

    <footer class="site-footer bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>"Membangun Indonesia Dari Pinggiran dengan Memperkuat Daerah dan Desa"</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>

            </div>
          </div>
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="https://www.facebook.com/kemendesa.1" class="smoothscroll pl-3 pr-3"><span class="icon-facebook"></span></a>
            <a href="https://twitter.com/KemenDesa" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="https://www.instagram.com/kemendespdtt" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
