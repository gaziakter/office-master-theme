
<?php 

/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';




add_action( 'cmb2_admin_init', 'office_master_metabox' );


// Start with an underscore to hide fields from custom fields list
	$prefix = '_yourprefix_';

	/**
	 * Initiate the metabox
	 */
/**
 * Define the metabox and field configurations.
 */
function office_master_metabox(){
	$service_item = new_cmb2_box( array(
		'id'            => 'service_metabox',
		'title'         => __( 'Service Metabox', 'office_master' ),
		'object_types'  => array( 'service'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		
	) );


	// Regular text field
	$service_item->add_field( array(
		'name'       => __( 'Service Icon', 'office_master' ),
		'desc'       => __( 'Add here your font awesome icon. Example : fa-android', 'office_master' ),
		'id'         => $prefix . 'service_icon',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	
	) );


		// Regular textarea field
	$service_item->add_field( array(
		'name' => 'Driscription',
		'desc' => 'Write here your driscription',
		'id' => 'service_description',
		'type' => 'textarea'
	) );


		// Website URL
	$service_item->add_field( array(
	'name' => __( 'Website URL', 'office_master' ),
	'desc' => 'Write here your Website URL',
	'id'   => 'service_link_url',
	'type' => 'text_url',
	// 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
) );


	// Regular text field
	$service_item->add_field( array(
		'name'       => __( 'Service Text', 'office_master' ),
		'desc'       => __( 'Add here your URL text', 'office_master' ),
		'id'         => $prefix . 'service_text',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	
	) );



//team mumber


$team_mumber = new_cmb2_box( array(
		'id'            => 'team_metabox',
		'title'         => __( 'Team Metabox', 'office_master' ),
		'object_types'  => array( 'team'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		
	) );


	// Regular text field
	$team_mumber->add_field( array(
		'name'       => __( 'Designation', 'office_master' ),
		'desc'       => __( 'Add here your mumber designation' ),
		'id'         => $prefix . 'team_designation',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	
	) );

	// Regular text field
	$team_mumber->add_field( array(
		'name'       => __( 'Right Side color', 'office_master' ),
		'desc'       => __( 'Add here your Right side color' ),
		'id'         => $prefix . 'team_mumber_color',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	
	) );

	// Regular text field
	$team_mumber->add_field( array(
		'name'       => __( 'Animation Class', 'office_master' ),
		'desc'       => __( 'Add here your Animation Class' ),
		'id'         => $prefix . 'animation_class',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	
	) );






}