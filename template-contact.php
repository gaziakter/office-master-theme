<?php

/*
Template Name: Contact Template
*/

 get_header();?>

        <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
                <div>
                    <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3618.727010735933!2d91.837871!3d24.907291700000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1404919738144"></iframe>
                    <br />
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <h4>Find us at:</h4>
                    <p class="block-author"> Johns, Smith & Associates</p>
                    <p>Via Ludovisi 39-45, Rome, 54267, Italy</p>
                    <p>Phone: 1.800.245.356</p>
                    <p>Fax: 1.800.245.357</p>
                    <em class="block-author">Email: hello@LawOffice.org </em> <br>
                    <br>
                    <p class="lead">Social Link</p><hr>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#"><img src="assets/img/social-icons/btn_skype.png" alt="Skype"></a>
                        Call us
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#"><img src="assets/img/social-icons/btn_facebook.png" alt="Facebook"></a>
                        Like us
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                        <a href="#"><img src="assets/img/social-icons/btn_twitter.png" alt="Twitter"></a>
                        Follow us
                    </div>
                    <br>
                </div>
                <div class="col-lg-5">
                    <div class="feedback-form">
          
                        <div id="contact-response"></div>
            
                        <form action="http://templates.designorbital.com/baleen/contact.php" method="post" id="contact-form">
                            <fieldset>
                                <div class="form-group form-group-fullname">
                                    <label class="control-label" for="fullname">NAME *</label>
                                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group form-group-email">
                                    <label class="control-label" for="email">E-MAIL *</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your E-Mail">
                                </div>
                                <div class="form-group form-group-message">
                                    <label class="control-label" for="message">MESSAGE *</label>
                                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                </div>           
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div> 
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->
<?php get_footer(); ?>