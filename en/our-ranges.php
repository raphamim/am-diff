<?php include 'partial/header.php'; ?>
    <!--Project Section-->
    <section class="project-section ranges-section">
                <!--Filter-->
                <div class="filters text-center clearfix">
                	
                	<ul class="filter-tabs filter-btns clearfix">
                        <li class="filter" data-role="button"><a class="ranges" href="am-diffusion.php"> AM Diffusion exclusive distribution </a></li>
                        <li class="filter" data-role="button"><a class="ranges" href="private-label.php">Private Label production </a></li>
                    </ul>
                    
                </div>
    </section>
    <!--End Project Section-->
    <?php include 'partial/footer.php';?>
    <script>
    if  ($(document).height() < 668 ) {
        $('.ranges-section').css("top", "0");
    }
    </script>