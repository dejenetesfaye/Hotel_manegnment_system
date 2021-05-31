<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hotel Template">
    <meta name="keywords" content="Hotel, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
	 <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
	<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/linearicons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section other-page">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="index"><img src="<?php echo $this->config->item('base_url'); ?>/img/logo.png" alt="logo"></a>
                </div>
					<div class="top-widget">
						<div class="top-info address">
							<img src="<?php echo $this->config->item('base_url'); ?>/img/placeholder.png" alt="">
							<span>1525 Boring Lane, Los <br />Angeles, CA</span>
						</div>
						<div class="top-info phone-num">
							<img src="<?php echo $this->config->item('base_url'); ?>/img/phone.png" alt="">
							<span>+1 (603)535-4592</span>
						</div>
					</div>
                <div class="container">
                    <nav class="main-menu mobile-menu">
                        <ul>
							<li><a href='<?php echo base_url()."index.php/Welcome/"; ?>'>Home</a></li>
                            <li><a href='<?php echo base_url()."index.php/Welcome/aboutUs"; ?>'>About</a></li>
                            <li><a href='<?php echo base_url()."index.php/Welcome/rooms"; ?>'>Rooms</a></li>
                            <li><a href="#">Facilities</a>
                                <ul class="drop-menu">
                                    <li><a href="#">Junior Suit</a></li>
                                    <li><a href="#">Double Room</a></li>
                                    <li><a href="#">Senior Suit</a></li>
                                    <li><a href="#">Single Room</a></li>
                                </ul>
                            </li>
                            <li><a href='<?php echo base_url()."index.php/Welcome/news"; ?>'>News</a></li>
							<li><a href='<?php echo base_url()."index.php/Welcome/services"; ?>'>Services</a></li>
                            <li><a href='<?php echo base_url()."index.php/Welcome/contact"; ?>'>Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="<?php echo $this->config->item('base_url'); ?>img/about-us-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>About</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href='<?php echo base_url()."index.php/Welcome/"; ?>' class="left-nav"><i class="lnr lnr-arrow-left"></i> Home</a>
                    <a href='<?php echo base_url()."index.php/Welcome/services"; ?>' class="right-nav">Services <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Room Section Begin -->
    <div class="about-us-room spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h2>“Customers may forget what you said  but they will never forget how you made them
                        feel”.</h2>
                </div>
            </div>
            <div class="about-para">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero mauris,
                            bibendum eget sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum
                            ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae
                            orci. Suspendisse maximus malesuada</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at vulputate est.
                            Donec tempor felis at nibh eleifend malesuada. Nullam suscipit lobortis aliquam.
                            Phasellus lobortis ante lorem, vitae scelerisque lacus tempus sed. Phasellus rutrum
                            magna </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Room Section End -->

    <!-- Video Tour Section Begin -->
    <section class="video-tour set-bg" data-setbg="<?php echo $this->config->item('base_url'); ?>img/video-bg.jpg">
        <div class="container">
            <div class="video-text">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>Video Hotel Tour</h2>
                    </div>
                </div>
                <div class="video-play-btn">
                    <a href="<?php echo $this->config->item('base_url'); ?>img/2017 Best Hotel Room Interior Design Ideas.mp4" class="pop-up"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Tour Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-text">
                        <h2>Hotel Gallery</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero mauris, bibendum eget
                            sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare. Morbi vel
                            ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci.</p>
                        <a href="#" class="primary-btn">View Gallery <i class="lnr lnr-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
								<img src="<?php echo $this->config->item('base_url'); ?>img/gallery/gallery-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
								<img src="<?php echo $this->config->item('base_url'); ?>img/gallery/gallery-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
								<img src="<?php echo $this->config->item('base_url'); ?>img/gallery/gallery-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-6">
                            <div class="gallery-img">
								<img src="<?php echo $this->config->item('base_url'); ?>img/gallery/gallery-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End -->

    <!-- Staff Section End -->
    <section class="staff-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Staff</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
							<img src="<?php echo $this->config->item('base_url'); ?>img/staff/staff-1.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Sarah Doe</h5>
                            <span>Hotel Manager</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/staff/staff-2.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Jessica Doe</h5>
                            <span>Reception Manager</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-staff-item">
                        <div class="staff-img">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/staff/staff-3.jpg" alt="">
                        </div>
                        <div class="staff-text">
                            <h5>Jessica Doe</h5>
                            <span>It</span>
                            <a href="#"><i class="lnr lnr-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Staff Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="<?php echo $this->config->item('base_url'); ?>img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row pb-50">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Location</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-map-marker"></i>
                            <p>1525 Boring Lane, <br />Los Angeles, CA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Reception</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Shuttle Service</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h5>Restaurant</h5>
                        <div class="widget-text">
                            <i class="lnr lnr-phone-handset"></i>
                            <p>+1 (603)535-4592</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                <div class="privacy-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Photo Requests</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo $this->config->item('base_url'); ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/jquery-ui.min.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/jquery.nice-select.min.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/jquery.slicknav.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo $this->config->item('base_url'); ?>js/main.js"></script>
</body>

</html>