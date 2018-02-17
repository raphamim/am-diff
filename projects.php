<?php include 'partial/header.php'; ?>
    <!--Project Section-->
    <section class="project-section">
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters text-center clearfix">
                	
                	<ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Toutes les collections</li>
                        <li class="filter" data-role="button" data-filter=".business"><img class="logo-projects" src="images/logo/diane-castel.png" alt="logo diane-castel"></li>
                        <li class="filter" data-role="button" data-filter=".coaching"><img class="logo-projects" src="images/logo/sthubert.png" alt="logo Saint-Hubert"></li>
                        <!-- <li class="filter" data-role="button" data-filter=".financial">AM-Diffusion</li>
                        <li class="filter" data-role="button" data-filter=".investment">Nouveautés</li> -->
                    </ul>
                    
                </div>
                
                <div class="filter-list row clearfix">
					<?php for ($i = 1; $i <= 27; $i++ ) { ?> 
                    <!--Gallery Block-->
                    <div class="gallery-block mix all coaching col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="images/gallery/st-hubert/sthubert_<?=$i;?>.jpg" alt="collection Saint-Hubert">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            <!-- <a href="projects-single.php" class="icon"><span class="fa fa-link"></span></a> -->
                                            <a href="images/gallery/st-hubert/sthubert_<?=$i;?>.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <?php } ?> 
                    
                    
                    
                </div>
            </div>
            <!-- <br>
            <div class="text-center">
            	<a href="#" class="theme-btn btn-style-three">view more</a>
            </div> -->
            
        </div>
    </section>
    <!--End Project Section-->
    <?php include 'partial/footer.php';?> 