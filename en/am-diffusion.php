<?php include 'partial/header.php'; 
$dianeCastel = array (
    'Highlight your charisma with this alloy of freshness and woody notes.',
    'A sensual fragrance wrapped with an extraordinary magnetism.', 
    ' A whirlwind of sensuality, nobility and modernity. 
    Be a lady, be chic! ', 
    'Escape to the infinite azure blue with the freshness and sensual notes of this fragrance.', 
    'Back to the basics with this fragrance between earth and sky. This citrus cocktail begins with pepper head notes for an explosive spicy freshness, softened by the geranium heart notes and the elegance and sophistication of the woody base.',
    'Dare the journey towards the 1001 nights with this noble and audacious fragrance.',
    'An elixir with chypre and gourmand notes, a real case for a divine feminity.',
    'Fresh and bright, joyful and playful, delicate and malicious fragrance.',
    'Sunny eau de parfum, with hot sand accents and vanilla notes.',
    'Air and woody fragrance composed of a floral breath of jasmine allied to the sweetness of the greedy notes.',
    'The heart of the fragrance is composed of a somptuous blossom flower refreshed by a sparkling lemon and wrapped by the musky vanilla base which brings a touch of mystery to this soft and sensual fragrance. 
    <br/><b>SO ATTRACTIVE, SO CHIC,… SO MUSK </b>');
    ?>

    <!--Project Section-->
    <section class="project-section am-diffusion">
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters text-center clearfix">
                	
                	<ul class="filter-tabs filter-btns clearfix">
                        <li class="filter filter-dianecastel" data-role="button" data-filter=".diane-castel"><img class="logo-projects" src="../images/logo/diane-castel.png" alt="logo diane-castel"></li>
                        <li class="filter filter-sainthubert" data-role="button" data-filter=".saint-hubert"><img class="logo-projects" src="../images/logo/sthubert.png" alt="logo Saint-Hubert"></li>
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
                            	<img src="../images/gallery/st-hubert/st-hubert_<?=$i;?>.jpg" alt="collection Saint-Hubert">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            
                                            <a href="../images/gallery/st-hubert/st-hubert_<?=$i;?>.jpg" class="icon image-link lightbox-image" data-fancybox-group="st-hubert" title=""><span class="fa fa-search"></span></a>
                                      
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
                            	<img src="../images/gallery/diane-castel/diane-castel_<?=$i;?>.jpg" alt="collection diane-castel">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            <p class="diane-castel-text text-overlay"><?= $dianeCastel[$i-1];?></p>
                                            
                                            <a href="../images/gallery/diane-castel/diane-castel_<?=$i;?>bis.jpg" class="icon image-link lightbox-image" data-fancybox-group="diane-castel" title=""><span class="fa fa-search"></span></a>

                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" data-toggle="modal" data-target="#<?=$i;?>">
                                            <a href="#" class="icon image-link " title=""><span class="fa"><img class="fa-pyramid" src="../images/icons/pyramid-pink.png" alt="pyramide oflactive"></span></a>

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
                            	<img src="../images/gallery/essentiels/essentiels_<?=$i;?>.jpg" alt="collection essentiels">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            
                                            <a href="../images/gallery/essentiels/essentiels_<?=$i;?>.jpg" class="icon image-link lightbox-image" data-fancybox-group="essentiels" title=""><span class="fa fa-search"></span></a>
                                      
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
                            	<img src="../images/gallery/exclusivites/exclusivites_<?=$i;?>.jpg" alt="collection exclusivites">
                                <div class="overlay-box">
                                	<div class="overlay-inner">
                                        <div class="content">
                                            
                                            <a href="../images/gallery/exclusivites/exclusivites_<?=$i;?>.jpg" class="icon image-link lightbox-image" data-fancybox-group="exclusivites" title=""><span class="fa fa-search"></span></a>
                                      
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
        <img src="../images/pyramide-olfactive/en/diane-castel/1.png" alt="pyramide olfactive diane castel">
      </div>
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
        <img src="../images/pyramide-olfactive/en/diane-castel/2.png" alt="pyramide olfactive diane castel">
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
        <img src="../images/pyramide-olfactive/en/diane-castel/3.png" alt="pyramide olfactive diane castel">
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
        <img src="../images/pyramide-olfactive/en/diane-castel/4.png" alt="pyramide olfactive diane castel">
      </div>
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
        <img src="../images/pyramide-olfactive/en/diane-castel/5.png" alt="pyramide olfactive diane castel">
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
        <img src="../images/pyramide-olfactive/en/diane-castel/6.png" alt="pyramide olfactive diane castel">
      </div>
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
        <img src="../images/pyramide-olfactive/en/diane-castel/7.png" alt="pyramide olfactive diane castel">
      </div>
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
        <img src="../images/pyramide-olfactive/en/diane-castel/8.png" alt="pyramide olfactive diane castel">
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
        <img src="../images/pyramide-olfactive/en/diane-castel/9.png" alt="pyramide olfactive diane castel">
      </div>
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
        <img src="../images/pyramide-olfactive/en/diane-castel/10.png" alt="pyramide olfactive diane castel">
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
        <img src="../images/pyramide-olfactive/en/diane-castel/11.png" alt="pyramide olfactive diane castel">
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