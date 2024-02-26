<?php global $Office_master; ?>

    <!-- Footer -->
    <footer> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="<?php echo  $Office_master['left_area_icon']; ?>"></i> Contact:</h3>
                    <p class="footer-contact"><?php echo  $Office_master['left_area_text']; ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><i class="<?php echo  $Office_master['mid_area_icon']; ?>"></i> <?php echo  $Office_master['mid_area_text']; ?></h3>
                    <p><?php echo  $Office_master['mid_area_link']; ?></p> 
                </div>
              <div class="col-md-4">
                <h3><i class="<?php echo  $Office_master['right_area_icon']; ?>"></i> <?php echo  $Office_master['right_area_title-text']; ?></h3>
                
                <div id="social-icons">
                    <?php 
                        foreach($Office_master['right_area_slide'] as $singleValue ){ 
                    ?>

                     <a href="<?php echo $singleValue['url'] ?>" class="btn-group google-plus">
                        <i class="<?php echo $singleValue['title'] ?>"></i>


                    <?php
                        }

                     ?>
         




                </div>
              </div>    
        </div>
      </div>
    </footer>

    
    <div class="copyright text center">
        <p><?php echo $Office_master['copyright_text']; ?></p>
    </div>

    

 
  
    <?php wp_footer(); ?>
  </body>
</html>
