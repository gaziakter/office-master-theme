<?php get_header(); ?>
 

                            <?php 

                            $office_post = null;
                            $office_post = new WP_Query(array(
                                    'post_type' => 'page',
                                    'post_per_page' => -1
                                ));

                                if($office_post->have_posts()){

                                   
                                    while($office_post->have_posts()){
                                    
                                        $office_post->the_post();
                                        if(get_the_id()==17){
                                              $page_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full');

                                        ?>

                                        <div class="row container-kamn">
                                            <img src="<?php echo $page_thumb[0];  ?>" class="blog-post" alt="Feature-img" align="right" width="100%"> 
                                        </div>



                                        <?php 

                                        }
                                     
                        
                                    }

                                } else{
                                    echo 'No Post';
                                }wp_reset_postdata();

                            ?>






    <!-- Main Container -->
 <div id="banners"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9"> 




                            <?php 

                                if(have_posts()){
                                    while(have_posts()){
                                        the_post();

                                        $team_designation = get_post_meta(get_the_ID(), 'office_master', true); 
                                        ?>


                     <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa fa-file-text"></i>
                           <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                        </h1>
                        <br>
                        <?php the_post_thumbnail('post_thum'); ?>
                        <br>
                        <?php the_excerpt(); ?>
                        <div>
                            <span class="badge">Posted <?php echo get_the_date('Y-m-d H:i:s'); ?></span>
                            <div class="pull-right">
                                <?php the_tags('<span class="label label-default">', '</span> 
                                <span class="label label-default">') ?>
                            </div>         
                        </div>
                    </div>
                    <hr>



                                        <?php 
                                    }

                                    the_posts_pagination( array(
                                        'mid_size' => 1,
                                        'prev_text' => __( '«' ),
                                        'next_text' => __( '»' ),
                                    ) ); 




                                } else{
                                    echo 'No Post';
                                }

                            ?>


           



                </div>

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Sign in </strong></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo site_url(); ?>/wp_login.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username or Email</label>
                                    <input type="email" class="form-control" style="border-radius:0px" id="exampleInputEmail1" placeholder="Enter email" name="log">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password <a href="<?php site_url();?>/wp-login.php?action=lostpassword">(forgot password)</a></label>
                                    <input type="text" class="form-control" style="border-radius:0px" id="exampleInputPassword1" placeholder="Password" name="pwd">
                                </div>
                                <button type="submit" class="btn btn-sm btn-default" name="wp_submit">Sign in</button>
                            </form>
                        </div>
                    </div>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/292/16a085/FFF&text=CSS3" alt="" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/292/d35400/FFF&text=HTML5" alt="" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/292/2980b9/FFF&text=RESPONSIVE" alt="" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/292/8e44ad/FFF&text=BOOTSTRAP3" alt="" class="img-responsive" />
                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
        <!--End Main Container -->

<?php get_footer(); ?>