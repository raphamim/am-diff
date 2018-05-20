<?php include 'partial/header.php'; ?>
<style>.preloader{display:none;}</style>
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title Column-->
            	<div class="title-column col-md-5 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<!--Sec Title-->
                        <div class="sec-title">
                        	<h2>If you have a perfume creation project or are interested by one of our products,
                             <br> <span>don’t hesitate to contact us in order to develop it together.</span></h2>
                        </div>
                        <div class="contact-number">+33 1 41 06 03 70</div>
                        <div class="email">contact@amdiffusion-parfums.com</div>
                        <ul>
                        	<li>12 Rue du Bac d'Asnières, 92110 Clichy</li>
                            <li>Opening Hours : Lundi - Vendredi / 10 am - 7 pm</li>
                        </ul>
                    </div>
                </div>
                <!--Form Column-->
                <div class="form-column col-md-7 col-sm-12 col-xs-12">
                	<!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="sendemail.php" id="contact-form">
                            <div class="form-group">
                                <input type="text" name="name" value="" placeholder="Your name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Your email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" value="" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Your message..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one">Send</button>
                            </div>                            
                        </form>
                    </div>
                    <!--End Contact Form-->
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    
   
	<!--End Map Section-->
    <?php include 'partial/footer.php';?> 