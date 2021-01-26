<?php 
include 'header.php';
?>

<body>

    <!-- PAGE TITLE Area
      =========================== -->
    <section class="page-title fix">
        <div class="container bb-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-content">
                        <h2 class="page-title">Contact us</h2>
                        <span class="sub-title">Get in touch with us anytime</span>
                    </div>
                    <div class="bread-cumb">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /.END OF BREAD CUMB -->
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <div class="upper-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Area
      =========================== -->
    <section class="contact-area fix">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form id="ajax-contact" action="http://company.design360studios.com/mail.php" method="post">
                        <div class="contact-form">
                            <div class="single-form">
                                <div class="sin-input">
                                    <input id="name" type="text" name="name" placeholder="Your name *">
                                </div>
                                <div class="sin-input">
                                    <input id="email" type="email" name="email" placeholder="Email address *">
                                </div>
                            </div>
                            <div class="single-form">
                                <div class="sin-input">
                                    <input type="text" id="phoneNo" name="phoneNo" placeholder="Phone Number *">
                                </div>
                                <div class="sin-input select-box">
                                    <select name="usercountry">
                                        <option value="">Country</option>
                                        <option value="1">Bangladesh</option>
                                        <option value="2">Usa</option>
                                        <option value="3">England</option>
                                        <option value="3">Australia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single-form contactSubmit text-area">
                                <textarea id="contactMsg" name="contactMsg" rows="4" placeholder="Type your message"></textarea>
                                <input type="submit" id="submit" name="submit" value="Send us message">
                            </div>
                        </div>
                        <div id="form-messages"></div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="single-info phone-number">
                            <h4>Call us</h4>
                            <p class="info">USA: <span>+ 021-5432-145</span></p>
                            <p class="info">Non- USA: <span>+ 021-5432-145</span></p>
                        </div>

                        <div class="single-info useremail-add">
                            <h4>EMAIL</h4>
                            <p class="info">Product support: <span>product@company.com</span></p>
                            <p class="info">Customer support: <span>support@company.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Contact Area -->

    <!-- GOOGLE MAP -->
    <div id="googleMap2"></div>


    <!-- Footer Area
        =========================== -->
    <footer id="footer-area">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget_text">
                            <div class="footer-logo">
                                <img src="img/logo-2.png" alt="">
                            </div>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget widget_links fix">
                            <h3 class="widget-title">Important Links</h3>
                            <ul class="site_map_links">
                                <li><a href="#">Legal Notice</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Payment Method</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                            <ul class="page-links">
                                <li><a href="#">About</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <h3 class="widget-title">Contact Us</h3>
                            <p>Euis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat.</p>
                            <a href="#" class="button contact-btn">CONTACT US</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <h3 class="widget-title">Newsletter Subscription</h3>
                            <div class="widget">
                                <div class="footer-newsletter">
                                    <div class="input-email">
                                        <input type="email" placeholder="Enter your email address" name="email" id="email">
                                        <i class="icofont icofont-send-mail"></i>
                                    </div>
                                    <input type="submit" value="Subscribe Now">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom fix">
            <div class="container bb-top foo-padding">
                <div class="row">
                    <div class="col-sm-6 copyright">
                        <span>&copy; 2016 Copyright, the company. A product by D360-Studio</span>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="social-links">
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">twitter</a></li>
                                <li><a href="#">google+</a></li>
                                <li><a href="#">Pinterest</a></li>
                                <li><a href="#">linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.End Of Footer Area -->


    <!-- JQUERY LIBRARY -->
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <!-- Mobile Menu JS -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- WayPoints JS -->
    <script src="js/waypoints.min.js"></script>

    <!-- GOOGLE MAP API -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- MAP JS -->
    <script src="js/map.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- CounterUp JS -->
    <script src="js/jquery.counterup.min.js"></script>

    <!-- OWL CAROUSEL JS -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- PrettyPhoto JS -->
    <script src="js/jquery.prettyPhoto.js"></script>

    <!-- SLICK SLIDER -->
    <script src="js/slick.min.js"></script>
    
    <!-- AJAX MAIL -->
    <script src="js/mail.ajax.js"></script>

    <!-- MAIN JS -->
    <script src="js/main.js"></script>

    <!-- Color Settings JS -->
    <script src="js/color-settings.js"></script>

</body>


<!-- Mirrored from company.design360studios.com/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2016 21:11:00 GMT -->
</html>