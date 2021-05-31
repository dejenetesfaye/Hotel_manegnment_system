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
    <section class="hero-section set-bg" data-setbg="<?php echo $this->config->item('base_url'); ?>img/services-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Services</h1>
                    </div>
                </div>
                <div class="page-nav">
                    <a href='<?php echo base_url()."index.php/Welcome/aboutUs"; ?>' class="left-nav"><i class="lnr lnr-arrow-left"></i> About</a>
                    <a href='<?php echo base_url()."index.php/Welcome/rooms"; ?>' class="right-nav">Rooms <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/services/services-1.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Outdoor Pool</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/services/services-2.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Restaurant</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/services/services-3.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>SPA & Wellnes</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/services/services-4.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Coffee Shop</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item changed-align">
                        <div class="services-pic-item">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/services/services-5.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Executive<br /> Conference<br /> Room</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item changed-align">
                        <div class="services-pic-item">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/services/services-6.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Events<br /> Conference<br /> Venue</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/services/services-7.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Weddings</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-services-item">
                        <div class="services-pic-item">
                            <img src="<?php echo $this->config->item('base_url'); ?>img/services/services-8.jpg" alt="">
                        </div>
                        <div class="services-text">
                            <h2>Gym</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Services Section End -->
    <section class="features-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Features</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-043-room-service"></i>
                        <h4>Room Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-007-swimming-pool"></i>
                        <h4>Pool</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-013-safety-box"></i>
                        <h4>Safty Box</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-029-wifi"></i>
                        <h4>Wi-fi</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-003-air-conditioner"></i>
                        <h4>Air Conditioner</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-020-telephone"></i>
                        <h4>Phone</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-019-television"></i>
                        <h4>Smart TV</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-040-key-card"></i>
                        <h4>Smart Key</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-009-cctv"></i>
                        <h4>24/7 Security</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-features-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Free Parking</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

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