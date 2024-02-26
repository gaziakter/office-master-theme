
<!doctype html>
<html lang="<?php language_attributes(); ?>">
    <head>

        <!-- meta data & title -->
        <meta charset="<?php bloginfo('charset'); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">



        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
        <?php wp_head(); ?>
    </head>
  <body>

    <!-- Header -->
        
    <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                
                 <a class="navbar-brand wow fadeInDownBig" href="<?php echo site_url(); ?>"><img src="<?php global $Office_master; echo $Office_master['site_logo']['url'];  ?>" width="100" alt="Office"></a>    
            </div>
            
                <?php wp_nav_menu(array(
                        'theme_location' => 'primary_menu',
                        'fallback_cb'     => 'office_master_manu',
                        'container' => 'nav',
                        'menu_class' => 'nav navbar-nav pull-right'
                )); ?>
         
        </div>
    </nav>

    <!-- End Header -->
