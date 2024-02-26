<?php 

function office_master_theme_support(){

		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_image_size('slide_img', 1500, 500, true);
		add_image_size('team_mumber', 100, 80, true);
		add_image_size('post_thum', 850, 490, true);
		register_nav_menus(array(
				'primary_menu' => 'Primary Menu'			

			));

} add_action('after_setup_theme', 'office_master_theme_support');


function office_master_css_js(){
	wp_enqueue_style('google-font-1','//fonts.googleapis.com/css?family=Open+Sans:400,300', null, '1.0', 'all');
	wp_enqueue_style('google-font-2','//fonts.googleapis.com/css?family=PT+Sans', null, '1.0', 'all');
	wp_enqueue_style('google-font-3','//fonts.googleapis.com/css?family=Raleway', null, '1.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css', null, '3.1.1', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', null, '4.1.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', null, '1.0', 'all');
	wp_enqueue_style('Animate', get_template_directory_uri().'/assets/css/animate.min.css', null, '1.0', 'all');
	wp_enqueue_style('Style-projects',get_template_directory_uri().'/assets/css/style-projects.cs', null, '1.0', 'all');
	wp_enqueue_style('google-font-1','//fonts.googleapis.com/css?family=Open+Sans:400,300', null, '1.0', 'all');
	wp_enqueue_style('google-font-1','//fonts.googleapis.com/css?family=Open+Sans:400,300', null, '1.0', 'all');
	wp_enqueue_style('Style', get_stylesheet_uri());

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', 'jquery', '1.3.3', true);
	wp_enqueue_script('wow-js', get_template_directory_uri().'/js/wow.min.js','jquery', '1.3.3', true);

} add_action('wp_enqueue_scripts','office_master_css_js');


function footer_extra_script(){ ?>
	  <script>
      new WOW().init();
    </script>
    <?php
} add_action('wp_footer', 'footer_extra_script', 30);


function office_master_manu(){
	?>

 <ul class="nav navbar-nav pull-right">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Team</a>
                    </li>
                    <li>
                        <a href="#"><span>Contact</span></a>
                    </li>
                </ul>



	<?php
}


function office_master_custom_post(){
	register_post_type('slider', array(
		'labels' => array(
			'name' => 'Slider',
			'add_new' => 'Add New Slider',
			'add_new_item' => 'Add New Slider' ),
		'public' => true,
		'supports' => array(
			'title', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'
			)

		));


		register_post_type('service', array(
		'labels' => array(
			'name' => 'Service',
			'add_new' => 'Add New Service',
			'add_new_item' => 'Add New Service' ),
		'public' => true,
		'supports' => array(
			'title', 'revisions', 'custom-fields', 'page-attributes'
			)

		));


			register_post_type('team', array(
		'labels' => array(
			'name' => 'Team',
			'add_new' => 'Add New Mumber',
			'add_new_item' => 'Add New Mumber Name' ),
		'public' => true,
		'supports' => array(
			'title', 'revisions',  'page-attributes', 'thumbnail'
			)

		));

} add_action('init', 'office_master_custom_post');


// This CMB2 plugin
include_once('inc/cmb2-custom-field.php');

// Resux Pluigin
require_once('inc/redux-framework-master/redux-framework.php');
require_once('inc/redux_offices.php');
