<?php include 'partial/header.php'; 
$dianeCastel = array (
    'Affirmez votre charisme avec cet alliage de fraicheur et de notes boisées.',
    'Un parfum sensuel enveloppé d\'un extraordinaire magnétisme.', 
    ' Un tourbillon de sensualité, de noblesse et de modernité. Be a lady, be chic!', 
    'Évadez-vous vers l’infinité du bleu azur avec ce parfum aux notes fraîches et sensuelles.', 
    'Retour aux essentiels avec cette fragrance entre terre et ciel.
    Ce cocktail d’agrumes s’élance en tête avec une note de poivre pour une fraicheur épicée explosive, adoucie par le géranium en cœur et par l’élégance et la sophistication du fond boisé.',
    'Osez le voyage vers les 1001 nuits avec cette fragrance noble et audacieuse.',
    'Un élixir aux notes chyprées et gourmandes, véritable écrin pour une divine féminité.',
    'Fragrance fraîche et lumineuse, joyeuse et joueuse, délicate et malicieuse. ',
    'Eau de parfum ensoleillée, aux accents de sable chaud et de notes vanillées.',
    'Fragrance aérienne et boisée composée d\'un souffle floral de jasmin allié à la douceur des notes gourmandes.',
    'Le cœur de ce parfum est composé d’une somptueuse fleur d’oranger rafraîchie par un citron pétillant et enveloppée par le fond vanillé musqué qui apporte une touche de mystère à cette fragrance douce et sensuelle.
    <br/><b>SO ATTRACTIVE, SO CHIC,… SO MUSK </b>');
    ?>

    <!--Project Section-->
    <section class="project-section am-diffusion">
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters text-center clearfix">
                	
                	<ul class="filter-tabs filter-btns clearfix">
                        <li class="filter filter-dianecastel" data-role="button" data-filter=".diane-castel"><img class="logo-projects" src="images/logo/diane-castel.png" alt="logo diane-castel"></li>
                        <li class="filter filter-sainthubert" data-role="button" data-filter=".saint-hubert"><img class="logo-projects" src="images/logo/sthubert.png" alt="logo Saint-Hubert"></li>
                        <li class="filter filter-essentiels" data-role="button" data-filter=".essentiels">Essentiels</li>
                        <li class="filter filter-exclusivites" data-role="button" data-filter=".exclusivites">Exclusivités</li>
                    </ul>
                    
                </div>

                <!-- SAINT HUBERT -->
                <div class="filter-list row clearfix">
					<?php for ($i = 1; $i <= 22; $i++ ) { ?> 
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
                                            <p class="diane-castel-text text-overlay"><?= $dianeCastel[$i-1];?></p>
                                            <!-- <a href="projects-single.php" class="icon"><span class="fa fa-link"></span></a> -->
                                            <a href="images/gallery/diane-castel/diane-castel_<?=$i;?>bis.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>

                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" data-toggle="modal" data-target="#<?=$i;?>">
                                            <a href="#" class="icon image-link " title=""><span class="fa"><img class="fa-pyramid" src="images/icons/pyramid-pink.png" alt="pyramide oflactive"></span></a>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <?php } ?> 
                </div>
                <!-- FIN DIANE CASTEL -->

                <!-- ESSENTIELS AM DIFFUSION -->
                <div class="filter-list row clearfix">
					<?php for ($i = 1; $i <= 5; $i++ ) { ?> 
                    <!--Gallery Block-->
                    <div class="gallery-block mix all essentiels col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="images/gallery/essentiels/essentiels_<?=$i;?>.jpg" alt="collection essentiels">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            <!-- <a href="projects-single.php" class="icon"><span class="fa fa-link"></span></a> -->
                                            <a href="images/gallery/essentiels/essentiels_<?=$i;?>.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                            <!-- <a href="#" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-flask"></span></a> -->
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <?php } ?> 
                </div>
                <!-- FIN ESSENTIELS AM DIFFUSION -->

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
            <!-- <br>
            <div class="text-center">
            	<a href="#" class="theme-btn btn-style-three">voir plus</a>
            </div> -->
   
        </div>
    </section>
    <!--End Project Section-->





 <!-- ************* DEBUT LISTE PYRAMIDE DIANE CASTEL ************* -->
    <!-- Modal -->
<div class="modal fade pyramide" id="1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rock Sense</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/1.png" alt="pyramide olfactive diane castel">
      </div>
      <!-- <div class="modal-footer">
        <p>Fougère, Hespéridé, Aquatique, Aromatique, Boisé, Ambré</p>
      </div> -->
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">So spirit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/2.png" alt="pyramide olfactive diane castel">
      </div>
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lady D.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/3.png" alt="pyramide olfactive diane castel">
      </div>
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chorus for men</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/4.png" alt="pyramide olfactive diane castel">
      </div>
      <!-- <div class="modal-footer">
        <p>Boisé, Hespéridé, Epicé, Aromatique, Musqué</p>
      </div> -->
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Offense for men</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/5.png" alt="pyramide olfactive diane castel">
      </div>
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Very Oud</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/6.png" alt="pyramide olfactive diane castel">
      </div>
      <!-- <div class="modal-footer">
        <p>Oriental, Vanillé, Oud, Fruité, Musqué</p>
      </div> -->
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">My Divine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/7.png" alt="pyramide olfactive diane castel">
      </div>
      <!-- <div class="modal-footer">
        <p>Chypre, Floral, Fruité, Gourmand, Musqué</p>
      </div> -->
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kiss'N'Bye</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/8.png" alt="pyramide olfactive diane castel">
      </div>
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sweet Sunshine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/9.png" alt="pyramide olfactive diane castel">
      </div>
      <!-- <div class="modal-footer">
        <p>Floriental, Fruité, Musqué, Solaire, Ambré</p>
      </div> -->
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Secret girl</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/10.png" alt="pyramide olfactive diane castel">
      </div>
    </div>
  </div>
</div>

<div class="modal fade pyramide" id="11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">So musk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <img src="images/pyramide-olfactive/diane-castel/11.png" alt="pyramide olfactive diane castel">
      </div>
    </div>
  </div>
</div>

<!-- ************* FIN LISTE PYRAMIDE ************* -->



    <?php include 'partial/footer.php';?> 
    <script>

    $('.preloader').delay(1800).fadeOut();

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

        $( ".filter-essentiels" ).click(function() {
            $('.am-diffusion .all').css("display", "none");
            $('footer').css("display", "none");
            $('.am-diffusion .essentiels').css("display", "block");;
        });
    </script>