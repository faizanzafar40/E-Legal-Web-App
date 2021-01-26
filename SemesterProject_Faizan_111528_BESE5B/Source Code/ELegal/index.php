<?php
    include 'header.php';
?>
<head>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

</style>
</head>
<body>
    <section class="slider-area">

        <div class="Modern-Slider">

            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="img/back.jpg" alt="">
                    <div class="slider-text overlay">
                        <div class="tb">
                            <div class="tbc">
                                <div class="container rs-padding ">
                                    <div class="col-md-12">

                                        <h1 style="color: #2dcc70">
                                            <div class="container">
                                                <div class="row">    
                                                    <div class="col-xs-8 col-xs-offset-2">
		                                                <div class="input-group">
                                                           <b><center>E-Legal<center></b><br>
                                            <small>Legal help at your fingertips <b style="color: #fff">Anytime. Anywhere.</b></small>
                                                    </div>
	                                            </div>
                                            </div>
                                            <br>
                                            <button class="button button1" onclick="location.href='lawyerregister.php';">Sign in as Lawyer</button>
                                            <button class="button button2" onclick="location.href='clientregister.php';">Sign in as Client</button>


                                        </h1>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Item -->

        </div>

    </section>

    <!-- About Us Area-->
    <section class="about-area section-padding">
        <div class="container">
            <div class="col-md-4">
                <div class="about-left">
                    <h2>We have more than <strong>20 years of experiences</strong>
                      in Lawyer Advisory Management</h2>
                    <figure class="about-thumb">
                        <img src="img/about-thumb.jpg" alt="" class="img-responsive">
                        <figcaption>
                            Working around the clock for you
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="about-quote">
                    <blockquote>
                       E-Legal is a state-of-the-art enterprise level application that will gather all interested lawyers and clients on one platform. The web application will be a major advancement to the current system of lawyer's’ practice management in Pakistan. Moreover, clients will be able to find the lawyers that suit to their requirements and availability. 
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of About Us Area -->

    <!-- What We Area
        =========================== -->
    <section class="works-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>What we do</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Single Work -->
                <div class="col-md-6 col-sm-6">
                    <div class="single-work">
                        <a class="work-thumb mb-35" href="single-services-1.html.html">
                            <img src="img/works/img-10.jpg" alt="">
                            <div class="work-hover"></div>
                        </a>
                        <div class="work-excerp">
                            <h2><center>Lawyer Services<center></h2>
                            <p>We function as freelancing portal for lawyers whc have just started out in the field and are looking for work</p>
                        </div>
                    </div>
                </div>
                <!-- /. End Of Single Work -->

                <!-- Single Work -->
                <div class="col-md-6 col-sm-6">
                    <div class="single-work">
                        <a class="work-thumb mb-35" href="">
                            <img src="img/works/img-09.jpg" alt="">
                            <div class="work-hover"></div>
                        </a>
                        <div class="work-excerp">
                            <h2><center>Client Services<center></h2>
                            <p>Do not worry if you have limited information about the world of law. Getting advice from our expert lawyers is as easy as 1,2,3...</p>
                        </div>
                    </div>
                </div>
                <!-- /. End Of Single Work -->
    <!-- Info Area
  
    <!-- Testimonial Area
        =========================== -->
    <section class="tesimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-65"><br><br>
                        <h2>OUR BEST LAWYERS</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-70">
                <div class="testimonial-wrap testimonial-active">

                    <!-- Single Testimonial -->
                    <div class="sin-tesimonial">
                        <span class="quote">Best service ever</span>

                        <div class="cliet-bio">
                            <h2>Farhan Rizvi</h2>
                            <span class="client-pos">Professional Diploma in Law</span>
                        </div>
                    </div>
                    <!-- /.End OfSingle Testimonial -->

                    <!-- Single Testimonial -->
                    <div class="sin-tesimonial">
                        <span class="quote">I found it very useful</span>

                        <div class="cliet-bio">
                            <h2>David Ramon</h2>
                            <span class="client-pos">Master of Laws</span>
                        </div>
                    </div>
                    <!-- /.End OfSingle Testimonial -->

                    <!-- Single Testimonial -->
                    <div class="sin-tesimonial">
                        <span class="quote">Helped me a lot in my early years</span>

                        <div class="cliet-bio">
                            <h2>Khawaja Fahad</h2>
                            <span class="client-pos">Doctor Juridical Science </span>
                        </div>
                    </div>
                    <!-- /.End OfSingle Testimonial -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Testimonial Area -->

    <!-- LatestNews Area
        =========================== -->
    <section class="latestNews-area pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title text-center mb-70">
                    <h2>Latest news</h2>
                </div>
            </div>
            <div class="row">

                <!-- Single News -->
                <div class="col-sm-6">
                    <div class="sin-news">
                        <a class="news-thumb mb-35" href="single-news.html">
                            <img src="img/news/img-01.jpg" alt="">
                            <div class="news-hover"></div>
                        </a>
                        <div class="news-excerpt">
                            <h2>Now resolve your property issues</h2>
                            <span class="news-date">03/06/2017</span>
                        </div>
                    </div>
	                </div>
                <!-- /.End Of Single News -->

                <!-- Single News -->
                <div class="col-sm-6">
                    <div class="sin-news">
                        <a class="news-thumb mb-35" href="single-news.html">
                            <img src="img/news/img-02.jpg" alt="">
                            <div class="news-hover"></div>
                        </a>
                        <div class="news-excerpt">
                            <h2>We support entrepreneurship</h2>
                            <span class="news-date">04/06/2017</span>
                        </div>
                    </div>
                </div>
                <!-- /.End Of Single News -->

               

            </div>
        </div>
    </section>
    <!-- /.End Of LatestNews Area -->

   <footer id="footer-area">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget widget_text">
                            <div class="footer-logo">
                            <span>E-Legal</span>
                            </div>
                            <p> E-Legal is a state-of-the-art enterprise level application that will gather all interested lawyers and clients on one platform. The web application will be a major advancement to the current system of lawyer's’ practice management in Pakistan. Moreover, clients will be able to find the lawyers that suit to their requirements and availability. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
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
                    <div class="col-md-4 col-sm-6 col-xs-12">
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
                        <span>&copy; 2017 E-Legal</span>
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


    <!-- /.End Of Footer Area -->


    <!-- JQUERY LIBRARY -->
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <!-- Mobile Menu JS -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- WayPoints JS -->
    <script src="js/waypoints.min.js"></script>

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

    <!-- MAIN JS -->
    <script src="js/main.js"></script>

    <!-- Color Settings JS -->
    <script src="js/color-settings.js"></script>

</body>


</html>