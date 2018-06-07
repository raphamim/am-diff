</main>
    <footer>
    
    <!--Main Footer-->
    <section class="main-footer">
    	<div class="auto-container">
        	<div class="row clearfix">
                <!--Info Column-->
            	<div class="info-column col-md-6 col-sm-6 col-xs-12">
                	<ul class="info-list">
                        <li>12 rue du Bac d'Asnières, 92110 Clichy</li>
                        <li>contact@am-diffusion.com</li>
                        <li>+33 1 41 06 03 70</li>
                        <li>&copy; AM-DIFFUSION 2017 All rights reserved.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Main Footer-->
    </footer>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>




<script src="../js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="../plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="../plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="../js/main-slider-script.js"></script>

<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../js/jquery.fancybox.pack.js"></script>
<script src="../js/jquery.fancybox-media.js"></script>
<script src="../js/owl.js"></script>
<script src="../js/mixitup.js"></script>
<script src="../js/wow.js"></script>
<script src="../js/appear.js"></script>
<script src="../js/script.js"></script>
<script>
    function footerPosition() {
        var mainHeight = $('main').height();
        var headerHeight = $('header').height();
        var footerHeight = $('footer').height();
        var documentHeight = $(document).height();
		var elementHeight = headerHeight + footerHeight + mainHeight;
        var positionFooter = documentHeight - elementHeight;
        $('footer').css("position", "relative");
        $('footer').css("top", positionFooter);
		
    }
    if  ($(document).height() > 668 ) {
        footerPosition();
    }
    </script>

</body>
</html>