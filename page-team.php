
<?php get_header(); ?>


<?php 
if(have_posts()){
    the_post();

$page_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full');
?>

    <div class="row container-kamn">  
        <img src="<?php echo $page_thumb[0]; ?>" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%"> 
    
    </div>



<?php
}
 
 ?>




    <!--End Header -->


    <!-- Main Container -->

                 <?php 

                            $office_post = null;
                            $office_post = new WP_Query(array(
                                    'post_type' => 'team',
                                    'post_per_page' => -1
                                ));

                                if($office_post->have_posts()){

                                   
                                    while($office_post->have_posts()){
                                    
                                        $office_post->the_post();
                                        $team_designation = get_post_meta(get_the_ID(), 'team_designation', true); 
                                        $team_mumber_color = get_post_meta(get_the_ID(), 'team_mumber_color', true); 
                                        $animation_class = get_post_meta(get_the_ID(), 'animation_class', true); 
                                       
                                        ?>



                        <!-- Begin Slide 1 -->
                     
 <div id="banners"></div>
                            <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="blockquote-box <?php echo $team_mumber_color; ?> animated wow <?php echo $animation_class; ?> clearfix">
                                                <div class="square pull-left">
                                                    <?php the_post_thumbnail('team_mumber'); ?>
                                                </div>
                                                <h4>
                                                    <?php the_title(); ?>
                                                </h4>
                                                <p>
                                                    <?php echo $team_designation; ?>
                                                </p>
                                            </div>
                                        </div>
                                      
                             
                                    </div>
                                </div>
    <!--End Main Container -->


               
            <!-- End Serivces Row 2 -->
    
        </div>      


                        <!-- End Slide 1 -->

                                        <?php 
                                    }

                                } else{
                                    echo 'No Post';
                                }wp_reset_postdata();

                            ?>





  
    


   <?php get_footer(); ?>