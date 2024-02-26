<?php get_header(); ?>

    <!-- Begin #carousel-section -->
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn">
            <div class="row">
                <div id="carousel-1" class="carousel slide">

                   
        
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                            <?php 

                            $office_post = null;
                            $office_post = new WP_Query(array(
                                    'post_type' => 'slider',
                                    'post_per_page' => -1
                                ));

                                if($office_post->have_posts()){

                                    $x = 0;
                                    while($office_post->have_posts()){
                                        $x++;
                                        $office_post->the_post();
                                        $slider_cap = get_post_meta(get_the_ID(), 'slider_cap', true); ?>



                        <!-- Begin Slide 1 -->
                        <div class="item <?php if($x==1){echo 'active';} ?>">
                            <?php the_post_thumbnail('slide_img'); ?>
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs"><?php the_title(); ?></h3>
                                <p class="carousel-body"><?php echo $slider_cap; ?></p>
                            </div>
                        </div>
                        <!-- End Slide 1 -->

                                        <?php 
                                    }

                                } else{
                                    echo 'No Post';
                                }wp_reset_postdata();

                            ?>
   
                    </div>


                     <!-- Indicators -->
                    <ol class="carousel-indicators visible-lg">

                    <?php 
                        for($i=0; $i<$x; $i++){ ?>

                            <li data-target="#carousel-1" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){ echo 'active';} ?>"></li>
                            <?php
                        }



                    ?>

                      
                       
                    </ol>




        
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->


    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Our Mission</h3>
                    <p class="services-header-body"><em> Things we provide in Office </em>  </p><hr>
                </div>
            </div>
      
            <!-- Begin Services Row 1 -->
            <div class="row services-row services-row-head services-row-1">

                 <?php 

                            $office_post = null;
                            $office_post = new WP_Query(array(
                                    'post_type' => 'service',
                                    'post_per_page' => -1
                                ));

                                if($office_post->have_posts()){

                                   
                                    while($office_post->have_posts()){
                                    
                                        $office_post->the_post();
                                        $servicer_icon = get_post_meta(get_the_ID(), 'service_icon', true); 
                                        $servicer_descri = get_post_meta(get_the_ID(), 'service_description', true); 
                                        $service_link_url = get_post_meta(get_the_ID(), 'service_link_url', true); 
                                        $service_text = get_post_meta(get_the_ID(), 'service_text', true); 
                                        $service_anima = get_post_meta(get_the_ID(), 'service_anima', true); 
                                        ?>



                        <!-- Begin Slide 1 -->
                     
     <div class="col-md-12">
                    <div class="services-group wow animated <?php echo $service_anima; ?>" data-wow-offset="40">
                        <p class="services-icon"><span class="fa <?php echo $servicer_icon ; ?> fa-5x"></span></p>
                        <h4 class="services-title"><?php the_title(); ?></h4>
                        <p class="services-body"><?php echo $servicer_descri; ?></p>
                        <p class="services-more"><a href="<?php echo $service_link_url; ?>"><?php echo $service_text; ?></a></p>
                    </div>


               
            <!-- End Serivces Row 2 -->
    
        </div>      


                        <!-- End Slide 1 -->

                                        <?php 
                                    }

                                } else{
                                    echo 'No Post';
                                }wp_reset_postdata();

                            ?>


              
    </section>
    <!-- End #services-section -->



<?php get_footer(); ?>