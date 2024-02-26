
<?php 
/*
Template Name: For About Page

*/


get_header(); ?>


<?php 
if(have_posts()){
    the_post();

$page_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()), 'full');
$content = get_the_content();

?>

    <div class="row container-kamn">  
        <img src="<?php echo $page_thumb[0]; ?>" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%"> 
    
    </div>



<?php
}
 
 ?>



    <!-- Main Container -->

    
    <div id="banners"></div>
    <div class="container">   
        <div class="row">
            <div class="side-left col-sm-4 col-md-4">

                <h3 class="lead">  About our Firm : </h3><hr>

                <p>Curabitur vulputate, ligula lacinia scelris que tempor, lacus lacus ornare ante, ac egeistas est urna sit amet arcu. Class apte nt taeraciti sociosqu ad litora torquent.</p>
                <a href="#anchor1"> Our Firm's History</a><br>
                <a href="#anchor2"> Philosophy</a><br>
                <a href="#anchor3">Media / In the Press</a><br>
                <br>
                <h4>2002 - LOREM IPSUM DOLOR :</h4><hr>
                Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus. Nunc eu ullamcor per orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus.
            </div>
            <div class="col-sm-8 col-md-8">
               <?php echo $content; ?>
            </div>  
        </div>    
    </div>  

    <!--End Main Container -->
<?php get_footer(); ?>