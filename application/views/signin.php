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
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>fonts/fonts/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>fonts/fonts/iconic/css/material-design-iconic-font.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/animate/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/css-hamburgers/hamburgers.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/select2/select2.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/datepicker/daterangepicker.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/util.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/vendor/animate/animsition.min.css" type="text/css">
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
    
    <!-- Hero Section End -->

    <!-- Rooms Section Begin -->
    <section class="room-section spad">
        <div class="container">
	
				<?Php echo form_open('index.php/Welcome/signin',['class'=>'form-horizontal']);?>
					  <fieldset>
						<legend>standard Room Book</legend>
							<div class="limiter">
							<div class="container-login100" style="background-image: url(<?php echo $this->config->item('base_url'); ?>img/services/services-5.jpg);">
								<div class="wrap-login100">
									<form class="login100-form validate-form">
										<span class="login100-form-logo">
											<i class="zmdi zmdi-landscape"></i>
										</span>

										<span class="login100-form-title p-b-34 p-t-27">
											Register New Admin
										</span>

										<div class="wrap-input100 validate-input" data-validate = "Enter Name">
											<input class="input100" type="text" name="name" placeholder="name">
											<span class="focus-input100" data-placeholder="&#xf207;"></span>
										</div>
										
										<div class="wrap-input100 validate-input" data-validate = "Enter username">
											<input class="input100" type="text" name="username" placeholder="Username">
											<span class="focus-input100" data-placeholder="&#xf207;"></span>
										</div>

										<div class="wrap-input100 validate-input" data-validate="Enter password">
											<input class="input100" type="password" name="pass" placeholder="Password">
											<span class="focus-input100" data-placeholder="&#xf191;"></span>
										</div>

										<div class="container-login100-form-btn">
											<button class="login100-form-btn">
												Sign in
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					  </fieldset>
		<?php echo form_close();?>
		</div>
    </section>
    <!-- Rooms Section End -->

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