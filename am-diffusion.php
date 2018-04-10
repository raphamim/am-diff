<?php include 'partial/header.php'; ?>
    <!--Project Section-->
    <section class="project-section am-diffusion">
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters text-center clearfix">
                	
                	<ul class="filter-tabs filter-btns clearfix">
                        <li class="filter filter-dianecastel" data-role="button" data-filter=".diane-castel"><img class="logo-projects" src="images/logo/diane-castel.png" alt="logo diane-castel"></li>
                        <li class="filter filter-sainthubert" data-role="button" data-filter=".saint-hubert"><img class="logo-projects" src="images/logo/sthubert.png" alt="logo Saint-Hubert"></li>
                        <li class="filter filter-exclusivites" data-role="button" data-filter=".exclusivites">Exclusivités</li>
                    </ul>
                    
                </div>

                <!-- SAINT HUBERT -->
                <div class="filter-list row clearfix">
					<?php for ($i = 1; $i <= 27; $i++ ) { ?> 
                    <!--Gallery Block-->
                    <div class="gallery-block mix all saint-hubert col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="images/gallery/st-hubert/st-hubert_<?=$i;?>.jpg" alt="collection Saint-Hubert">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            <!-- <a href="projects-single.php" class="icon"><span class="fa fa-link"></span></a> -->
                                            <a href="images/gallery/st-hubert/st-hubert_<?=$i;?>.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                            <!-- <a href="#" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-flask"></span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <?php } ?> 
                </div>
                <!-- FIN SAINT HUBERT -->

                <!-- DIANE CASTEL -->
                <div class="filter-list row clearfix">
					<?php for ($i = 1; $i <= 11; $i++ ) { ?> 
                    <!--Gallery Block-->
                    <div class="gallery-block mix all diane-castel col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="images/gallery/diane-castel/diane-castel_<?=$i;?>.jpg" alt="collection diane-castel">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            <!-- <a href="projects-single.php" class="icon"><span class="fa fa-link"></span></a> -->
                                            <a href="images/gallery/diane-castel/diane-castel_<?=$i;?>bis.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                            <!-- <a href="#" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-flask"></span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <?php } ?> 
                </div>
                <!-- FIN DIANE CASTEL -->

                <!-- EXCLUSIVITES AM DIFFUSION -->
                <div class="filter-list row clearfix">
					<?php for ($i = 1; $i <= 4; $i++ ) { ?> 
                    <!--Gallery Block-->
                    <div class="gallery-block mix all exclusivites col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="images/gallery/exclusivites/exclusivites_<?=$i;?>.jpg" alt="collection exclusivites">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            <!-- <a href="projects-single.php" class="icon"><span class="fa fa-link"></span></a> -->
                                            <a href="images/gallery/exclusivites/exclusivites_<?=$i;?>.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                            <!-- <a href="#" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-flask"></span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <?php } ?> 
                </div>
                <!-- FIN EXCLUSIVITES AM DIFFUSION -->

            </div>
            <!-- <br>
            <div class="text-center">
            	<a href="#" class="theme-btn btn-style-three">voir plus</a>
            </div> -->
   
        </div>
    </section>
    <!--End Project Section-->
    <?php include 'partial/footer.php';?> 
    <script>
    $('.preloader').delay(3000).fadeOut();
        $( ".filter-dianecastel" ).click(function() {
            $('.am-diffusion .all').css("display", "none");
            $('footer').css("display", "none");
            $('.am-diffusion .diane-castel').css("display", "block");
        });

        $( ".filter-sainthubert" ).click(function() {
            $('.am-diffusion .all').css("display", "none");
            $('footer').css("display", "none");
            $('.am-diffusion .saint-hubert').css("display", "block");;
        });

        $( ".filter-exclusivites" ).click(function() {
            $('.am-diffusion .all').css("display", "none");
            $('footer').css("display", "none");
            $('.am-diffusion .exclusivites').css("display", "block");;
        });
    </script>