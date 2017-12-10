<?php include 'partial/header.php'; ?>

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg)">
    	<div class="auto-container">
        	<h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title Column-->
            	<div class="title-column col-md-5 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<!--Sec Title-->
                        <div class="sec-title">
                        	<h2>Get in touch with us <br> <span>For any project inquiry</span></h2>
                        </div>
                        <div class="contact-number">Call us 1.369.741.2580</div>
                        <div class="email">support@calena.com</div>
                        <ul>
                        	<li>360 hamill Avenue, Sea View Pleasant, NewYork 13268</li>
                            <li>Work hours:  Mon - Fri : 0900 - 1800</li>
                        </ul>
                    </div>
                </div>
                <!--Form Column-->
                <div class="form-column col-md-7 col-sm-12 col-xs-12">
                	<!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="form-group">
                                <input type="text" name="name" value="" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" value="" placeholder="Write a Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Message details"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one">Send Message</button>
                            </div>                            
                        </form>
                    </div>
                    <!--End Contact Form-->
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Section-->
    <section class="map-section">
    	<div class="auto-container">
            <!--Map Outer-->
            <div class="map-outer">
                <!--Map Canvas-->
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div>
            </div>
        </div>
    </section>
	<!--End Map Section-->
    <?php include 'partial/footer.php';?> 