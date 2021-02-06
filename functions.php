<?php

// ADD ACF PLUGIN TO THEME
// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/plugins/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/plugins/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// ADD FIELDS DEFINITION

if( function_exists('register_field_group') ) {

	register_field_group(array(
		'key' => 'group_5faf052e9ff63',
		'title' => 'Matches',
		'fields' => array(
			array(
				'key' => 'field_5fb3fc1a42b53',
				'label' => 'Host team',
				'name' => 'host_team',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5faf0535298ac',
				'label' => 'Host team logo',
				'name' => 'host_team_logo',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5fb3fc2242b54',
				'label' => 'Away team',
				'name' => 'away_team',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5faf0542298ad',
				'label' => 'Away team logo',
				'name' => 'away_team_logo',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5faf0550298ae',
				'label' => 'Host score',
				'name' => 'host_score',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faf0563298af',
				'label' => 'Away score',
				'name' => 'away_score',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faf0577298b0',
				'label' => 'Date and time',
				'name' => 'date_and_time',
				'type' => 'date_time_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y g:i a',
				'return_format' => 'd/m/Y g:i a',
				'first_day' => 1,
			),
			array(
				'key' => 'field_5faf0969f333e',
				'label' => 'Article link',
				'name' => 'article_link',
				'type' => 'url',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
			),
			array(
				'key' => 'field_5fb29963fe9b4',
				'label' => 'Place',
				'name' => 'place',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'matches',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	register_field_group(array(
		'key' => 'group_5faee13d90e5c',
		'title' => 'Players',
		'fields' => array(
			array(
				'key' => 'field_5faee1477b233',
				'label' => 'First name',
				'name' => 'first_name',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5faee1e27b234',
				'label' => 'Second name',
				'name' => 'second_name',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5faee1f17b235',
				'label' => 'Player image',
				'name' => 'player_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5faee83a7b236',
				'label' => 'Position',
				'name' => 'position',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5faee8497b237',
				'label' => 'Birthdate',
				'name' => 'birthdate',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
			array(
				'key' => 'field_5faee8627b238',
				'label' => 'Weight',
				'name' => 'weight',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faee8787b239',
				'label' => 'Height',
				'name' => 'height',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faee8867b23a',
				'label' => 'In team since',
				'name' => 'in_team_since',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
			array(
				'key' => 'field_5faee8957b23b',
				'label' => 'Goals',
				'name' => 'goals',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faee8a37b23c',
				'label' => 'Assists',
				'name' => 'assists',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faee8b17b23d',
				'label' => 'Yellow cards',
				'name' => 'yellow_cards',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faee8bf7b23e',
				'label' => 'Red cards',
				'name' => 'red_cards',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faee93af975f',
				'label' => 'Number',
				'name' => 'player_number',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => 99,
				'step' => '',
			),
			array(
				'key' => 'field_5faeeb63351d3',
				'label' => 'Games played',
				'name' => 'games_played',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faeeb73351d4',
				'label' => 'Minutes played',
				'name' => 'minutes_played',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faeeb82351d5',
				'label' => 'Starts',
				'name' => 'starts',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'players',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	register_field_group(array(
		'key' => 'group_5faf02f853901',
		'title' => 'Post',
		'fields' => array(
			array(
				'key' => 'field_5faf02fce0593',
				'label' => 'Big image',
				'name' => 'big_image',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'large',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	register_field_group(array(
		'key' => 'group_5faed3972b314',
		'title' => 'Teams',
		'fields' => array(
			array(
				'key' => 'field_5faed3a34ca24',
				'label' => 'Team name',
				'name' => 'team_name',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5faf04aa9f0ca',
				'label' => 'Team logo',
				'name' => 'team_logo',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5faf04b69f0cb',
				'label' => 'Team wins',
				'name' => 'team_wins',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faf04cc9f0cc',
				'label' => 'Team draws',
				'name' => 'team_draws',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faf04e09f0cd',
				'label' => 'Team losses',
				'name' => 'team_losses',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faf04ef9f0ce',
				'label' => 'Goals scored',
				'name' => 'goals_scored',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faf05039f0cf',
				'label' => 'Goals conceded',
				'name' => 'goals_conceded',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5faf05109f0d0',
				'label' => 'Team points',
				'name' => 'team_points',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'teams',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
}


// Add menus
function futbolia_add_menus() {
	$locations = array(
		'primary' => 'Primary menu in landing page',
  		'footer' => 'Menu in footer',
  		'mobile' => 'Menu displayed in landing page on mobiles'
	);
	register_nav_menus($locations);
}

add_action("init", "futbolia_add_menus");

// Theme support
function futbolia_theme_support() {
	// Add theme support
	add_theme_support("title-tag");
  	add_theme_support("custom-logo");
  	add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "futbolia_theme_support");

// Register stylesheets
function futbolia_enqueue_styles() {
	wp_enqueue_style("single", get_template_directory_uri() . "/single.css", array(), "1.3", "all");
	wp_enqueue_style("style", get_template_directory_uri() . "/style.css", array(), "2.5", "all");
  	wp_enqueue_style("page", get_template_directory_uri() . "/page.css", array(), "1.1", "all");
	wp_enqueue_style("style-mobile", get_template_directory_uri() . "/mobile.css", array(), "1.4", "all");
}

add_action("wp_enqueue_scripts", "futbolia_enqueue_styles");

// Register javascript
function futbolia_enqueue_scripts() {
  	wp_deregister_script('jquery');
  
	wp_enqueue_script("main-js", get_template_directory_uri() . "/main.js", array("gsap"), "1.3", true);
	wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js", array(), "1.0", true);
  	wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js", array(), null, true);
  	wp_enqueue_script('customjs', get_stylesheet_directory_uri() . '/custom.js', array( 'jquery' ), '1.4', true );
}

add_action("wp_enqueue_scripts", "futbolia_enqueue_scripts");

// Add match post type
function futbolia_add_match_post_type() {
	$supports = array(
		'title',
	);
	
	$labels = array(
		'name' => 'Matches'
	);

	$args = array(
		'labels'               => $labels,
		'supports'             => $supports,
		'public'               => true,
		'capability_type'      => 'post',
		'rewrite'              => array( 'slug' => 'events' ),
		'has_archive'          => true,
		'menu_position'        => 30,
		'menu_icon'            => 'dashicons-calendar-alt'
	);
	
	register_post_type("Matches", $args);
}

add_action("init", "futbolia_add_match_post_type");

// Add player post type
function futbolia_add_player_post_type() {
	$labels = array('name' => "Players");
	
	$args = array(
		'labels' => $labels,
		'supports' => array('title'),
		'public' => true,
		'menu_icon' => 'dashicons-universal-access'
	);
	
	register_post_type("Players", $args);
}

add_action("init", "futbolia_add_player_post_type");

// Add gallery post type
function futbolia_add_gallery_post_type() {
	$labels = array('name' => 'Gallery');
	
	$args = array(
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail'),
		'public' => true,
		'menu_icon' => 'dashicons-format-gallery'
	);
	
	register_post_type('gallery', $args);
}

add_action('init', 'futbolia_add_gallery_post_type');

// Add teams post type
function futbolia_add_teams_post_type() {
	$labels = array("name" => "Table");
	
	$args = array(
		'labels' => $labels,
		'supports' => array('title'),
		'public' => true,
		'menu_icon' => 'dashicons-menu-alt'
	);
	
	register_post_type("teams", $args);
}

add_action('init', 'futbolia_add_teams_post_type');

/* ----------------------------------------------------------------------------------------------------------- */

// Add options to customizer
function futbolia_additional_customizer_settings( $wp_customize ) {
	$wp_customize->add_panel( 'team_stats_panel', 
    array(
        'priority'       => 100,
        'title'            => __( 'Team stats', 'nd_dosth' ),
        'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'nd_dosth' ),
    ) 
);
	
	$wp_customize->add_section( 'nd_dosth_text_options', 
    array(
        'title'         => __( 'Team stats numbers', 'nd_dosth' ),
        'priority'      => 1,
        'panel'         => 'team_stats_panel'
    ) 
);
	
	// Games played
	
	$wp_customize->add_setting( 'games_played',
    array(
        'default'           => __( 'All rights reserved ', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
	$wp_customize->add_control( 'games_played', 
    array(
        'type'        => 'number',
        'priority'    => 10,
         'section'     => 'nd_dosth_text_options',
        'label'       => 'Games played',
        'description' => 'Games played by team this season',
    ) 
);
	
	// Goals scored
	
		$wp_customize->add_setting( 'goals_scored',
    array(
        'default'           => __( 'All rights reserved ', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'goals_scored', 
    array(
        'type'        => 'number',
        'priority'    => 10,
         'section'     => 'nd_dosth_text_options',
        'label'       => 'Goals scored',
        'description' => 'Goals scored by team this season',
    ) 
);
	
	// Goals conceded
	
	$wp_customize->add_setting( 'goals_conceded',
    array(
        'default'           => __( 'All rights reserved ', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'goals_conceded', 
    array(
        'type'        => 'number',
        'priority'    => 10,
         'section'     => 'nd_dosth_text_options',
        'label'       => 'Goals conceded',
        'description' => 'Goals conceded by team this season',
    )
);
	
	// Points
	
	$wp_customize->add_setting( 'points',
    array(
        'default'           => __( 'All rights reserved ', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'points', 
    array(
        'type'        => 'number',
        'priority'    => 10,
         'section'     => 'nd_dosth_text_options',
        'label'       => 'Points',
        'description' => 'Points in the league',
    ) 
);
  
  // SITE HEADERS
  
  // Panel 
  
  	$wp_customize->add_panel( 'site_headers_panel', 
    array(
        'priority'       => 100,
        'title'            => __( 'Site headers', 'nd_dosth' ),
        'description'      => __( 'Site headers description', 'nd_dosth' ),
    ) 
);
  
  // Sections
	
	$wp_customize->add_section( 'nd_dosth_main_headers', 
    array(
        'title'         => __( 'Main page', 'nd_dosth' ),
        'priority'      => 1,
        'panel'         => 'site_headers_panel'
    ) 
);
  
  $wp_customize->add_section( 'nd_dosth_team_headers', 
    array(
        'title'         => __( 'Team', 'nd_dosth' ),
        'priority'      => 2,
        'panel'         => 'site_headers_panel'
    ) 
);
  
  $wp_customize->add_section( 'nd_dosth_season_stats_headers', 
    array(
        'title'         => __( 'Season stats', 'nd_dosth' ),
        'priority'      => 3,
        'panel'         => 'site_headers_panel'
    ) 
);
  
  $wp_customize->add_section( 'nd_dosth_players_stats_headers', 
    array(
        'title'         => __( 'Player stats', 'nd_dosth' ),
        'priority'      => 4,
        'panel'         => 'site_headers_panel'
    ) 
);
  
  $wp_customize->add_section( 'nd_dosth_gallery_headers', 
    array(
        'title'         => __( 'Gallery', 'nd_dosth' ),
        'priority'      => 5,
        'panel'         => 'site_headers_panel'
    ) 
);
  
  $wp_customize->add_section( 'nd_dosth_footer_headers', 
    array(
        'title'         => __( 'Footer', 'nd_dosth' ),
        'priority'      => 6,
        'panel'         => 'site_headers_panel'
    ) 
);
  
  // Controls
  
  // Search
  
  $wp_customize->add_setting( 'search',
    array(
        'default'           => __( 'Search', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'search', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'nd_dosth_main_headers',
        'label'       => 'Search',
        'description' => 'Label displayed as placeholder in Search form at the top of the page',
    ) 
);
  
  // Previous news
	
	$wp_customize->add_setting( 'previous_news',
    array(
        'default'           => __( 'Previous news', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'previous_news', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'nd_dosth_main_headers',
        'label'       => 'Previous news',
        'description' => 'Header displayed above previous news',
    ) 
);
  
    // Read more
	
	$wp_customize->add_setting( 'read_more',
    array(
        'default'           => 'Read more',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'read_more', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'nd_dosth_main_headers',
        'label'       => 'Read more',
        'description' => 'Read more hint in news excerpt on front page',
    ) 
);
  
  
    // Table
	
	$wp_customize->add_setting( 'table',
    array(
        'default'           => __( 'Table', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'table', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'nd_dosth_main_headers',
        'label'       => 'Table',
        'description' => 'Header displayed above season table',
    ) 
);
  
      // Last match
	
	$wp_customize->add_setting( 'last_match',
    array(
        'default'           => __( 'Last match', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'last_match', 
    array(
        'type'        => 'text',
        'priority'    => 3,
         'section'     => 'nd_dosth_main_headers',
        'label'       => 'Last match',
        'description' => 'Header displayed above last match',
    ) 
);
  
      // Upcoming
	
	$wp_customize->add_setting( 'upcoming',
    array(
        'default'           => __( 'Upcoming', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'upcoming', 
    array(
        'type'        => 'text',
        'priority'    => 4,
         'section'     => 'nd_dosth_main_headers',
        'label'       => 'Upcoming',
        'description' => 'Header displayed above upcoming match',
    ) 
);
  
  // Review
	
	$wp_customize->add_setting( 'review',
    array(
        'default'           => __( 'More', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'review', 
    array(
        'type'        => 'text',
        'priority'    => 5,
         'section'     => 'nd_dosth_main_headers',
        'label'       => 'Review',
        'description' => 'Label displayed in button with link to review',
    ) 
);
  
  // Preview
	
	$wp_customize->add_setting( 'preview',
    array(
        'default'           => __( 'Preview', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'preview', 
    array(
        'type'        => 'text',
        'priority'    => 6,
         'section'     => 'nd_dosth_main_headers',
        'label'       => 'Preview',
        'description' => 'Label displayed in button with link to preview',
    ) 
);
  
      // Meet our team
	
	$wp_customize->add_setting( 'meet_our_team',
    array(
        'default'           => __( 'Meet our team', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'meet_our_team', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'nd_dosth_team_headers',
        'label'       => 'Our team',
        'description' => 'Header displayed above players',
    ) 
);
  
        // Season stats
	
	$wp_customize->add_setting( 'season_stats_label',
    array(
        'default'           => __( 'Season stats', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'season_stats_label', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'nd_dosth_season_stats_headers',
        'label'       => 'Season stats',
        'description' => 'Header displayed above season stats',
    ) 
);
  
          // Games played
	
	$wp_customize->add_setting( 'games_played_label',
    array(
        'default'           => __( 'Games played', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'games_played_label', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'nd_dosth_season_stats_headers',
        'label'       => 'Games played',
        'description' => 'Header displayed above first season stat',
    ) 
);
  
   // Goals scored
	
	$wp_customize->add_setting( 'goals_scored_label',
    array(
        'default'           => __( 'Goals scored', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'goals_scored_label', 
    array(
        'type'        => 'text',
        'priority'    => 3,
         'section'     => 'nd_dosth_season_stats_headers',
        'label'       => 'Goals scored',
        'description' => 'Header displayed above second season stat',
    ) 
);
  
   // Games conceded
	
	$wp_customize->add_setting( 'goals_conceded_label',
    array(
        'default'           => __( 'Goals conceded', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'goals_conceded_label', 
    array(
        'type'        => 'text',
        'priority'    => 4,
         'section'     => 'nd_dosth_season_stats_headers',
        'label'       => 'Goals conceded',
        'description' => 'Header displayed above third season stat',
    ) 
);
  
   // Points
	
	$wp_customize->add_setting( 'points_label',
    array(
        'default'           => __( 'Points', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'points_label', 
    array(
        'type'        => 'text',
        'priority'    => 5,
         'section'     => 'nd_dosth_season_stats_headers',
        'label'       => 'Points label',
        'description' => 'Header displayed above fourth season stat',
    ) 
);
  
  // PLAYERS STATS
  
     // Players stats header
	
	$wp_customize->add_setting( 'players_stats',
    array(
        'default'           => __( 'Players stats', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'players_stats', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Players stats',
        'description' => 'Header displayed above players stats',
    ) 
);
  
       // Players stats subheader
	
	$wp_customize->add_setting( 'players_stats_subheader',
    array(
        'default'           => __( 'Best of', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'players_stats_subheader', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Players stats subheader',
        'description' => 'Subheader displayed above players stats',
    )
);
  
  // Goalkeeper
	
	$wp_customize->add_setting( 'goalkeepers',
    array(
        'default'           => __( 'Goalkeepers', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'goalkeepers', 
    array(
        'type'        => 'text',
        'priority'    => 3,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Goalkeepers',
        'description' => 'Goalkeepers in your language',
    )
);
  
    // Defender
	
	$wp_customize->add_setting( 'defenders',
    array(
        'default'           => __( 'Defender', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'defenders', 
    array(
        'type'        => 'text',
        'priority'    => 4,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Defenders',
        'description' => 'Defenders in your language',
    )
);
  
  // Midfielder
	
	$wp_customize->add_setting( 'midfielders',
    array(
        'default'           => __( 'Midfielders', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'midfielders', 
    array(
        'type'        => 'text',
        'priority'    => 5,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Midfielders',
        'description' => 'Midfielders in your language',
    )
);
  
  // Forward
	
	$wp_customize->add_setting( 'forwards',
    array(
        'default'           => __( 'Forwards', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'forwards', 
    array(
        'type'        => 'text',
        'priority'    => 6,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Forwards',
        'description' => 'Forwards in your language',
    )
);
  
    // Stats - player name
	
	$wp_customize->add_setting( 'stats_player_name',
    array(
        'default'           => __( 'Player name', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'stats_player_name', 
    array(
        'type'        => 'text',
        'priority'    => 7,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Player name',
        'description' => 'Label displayed in table above player name',
    )
);
  
      // Stats - games played
	
	$wp_customize->add_setting( 'stats_games_played',
    array(
        'default'           => __( 'Matches', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'stats_games_played', 
    array(
        'type'        => 'text',
        'priority'    => 8,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Games played',
        'description' => 'Label displayed in table above player\'s  games',
    )
);
  
      // Stats - assists
	
	$wp_customize->add_setting( 'stats_assists',
    array(
        'default'           => __( 'Assists', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'stats_assists', 
    array(
        'type'        => 'text',
        'priority'    => 9,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Asissts',
        'description' => 'Label displayed in table above player\'s assists',
    )
);
  
      // Stats - goals
	
	$wp_customize->add_setting( 'stats_goals',
    array(
        'default'           => __( 'Goals', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'stats_goals', 
    array(
        'type'        => 'text',
        'priority'    => 10,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'Goals',
        'description' => 'Label displayed in table above player\'s goals',
    )
);
  
       // View full squad button
	
	$wp_customize->add_setting( 'view_full_squad',
    array(
        'default'           => __( 'View full squad', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'view_full_squad', 
    array(
        'type'        => 'text',
        'priority'    => 11,
         'section'     => 'nd_dosth_players_stats_headers',
        'label'       => 'View full squad',
        'description' => 'Label displayed in \'view full squad\' button',
    )
);
  
   // Gallery header
	
	$wp_customize->add_setting( 'gallery',
    array(
        'default'           => __( 'Gallery', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'gallery', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'nd_dosth_gallery_headers',
        'label'       => 'Gallery',
        'description' => 'Label displayed above gallery section',
    )
);
  
     // Footer - copyright label
	
	$wp_customize->add_setting( 'copyright_label',
    array(
        'default'           => __( '&copy; All rights reserved. Designed and created by Skylo.pl', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
	
		$wp_customize->add_control( 'copyright_label', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'nd_dosth_gallery_headers',
        'label'       => 'Copyright label',
        'description' => 'Label displayed at the bottom of the footer',
    )
);
	
	// --------- //
	
    $wp_customize->add_setting(
        'team_slogan',
        array(
            'default' => 'Your team slogan',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'team_slogan',
        array(
            'label'      => __( 'Team slogan', 'textdomain' ),
            'description' => __( 'Text displayed in header', 'textdomain' ),
            'settings'   => 'team_slogan',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text'
        )
    ) );
  
  $wp_customize->add_setting(
        'facebook_link',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'facebook_link',
        array(
            'label'      => __( 'Facebook link', 'textdomain' ),
            'description' => __( 'Link to your club\'s fanpage', 'textdomain' ),
            'settings'   => 'facebook_link',
            'priority'   => 10,
            'section'    => 'title_tagline',
            'type'       => 'text'
        )
    ) );
  
    $wp_customize->add_setting(
        'instagram_link',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options'
        ),
    );

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'instagram_link',
        array(
            'label'      => __( 'Instagram link', 'textdomain' ),
            'description' => __( 'Link to your club\'s instagram profile', 'textdomain' ),
            'settings'   => 'instagram_link',
            'priority'   => 11,
            'section'    => 'title_tagline',
            'type'       => 'text'
        )
    ) );
	
	$wp_customize->add_setting( 'landing_page' );
	$wp_customize->add_control( 
		new WP_Customize_Image_Control(
			$wp_customize,'landing_page', array(
				'label' => 'Landing page',
				'description' => 'Image displayed in header',
				'section' => 'title_tagline',
				'settings' => 'landing_page',
				'priority' => 1
			)
		)
	);
  
  // ADD CUSTOMIZE ICONS
  
  $wp_customize->selective_refresh->add_partial( 'team_slogan', array(
    'selector' => '#team-slogan'
	));
  $wp_customize->selective_refresh->add_partial( 'facebook_link', array(
    'selector' => '#facebook'
	));
  $wp_customize->selective_refresh->add_partial( 'instagram_link', array(
    'selector' => '#instagram'
	));
   $wp_customize->selective_refresh->add_partial( 'landing_page', array(
    'selector' => '#landing-page'
	));
  $wp_customize->selective_refresh->add_partial( 'team_slogan', array(
    'selector' => '#title-section'
	));
  $wp_customize->selective_refresh->add_partial( 'previous_news', array(
    'selector' => '#previous-news'
	));
  $wp_customize->selective_refresh->add_partial( 'table', array(
    'selector' => '#table'
	));
  $wp_customize->selective_refresh->add_partial( 'last_match', array(
    'selector' => '#last-match'
	));
  $wp_customize->selective_refresh->add_partial( 'upcoming', array(
    'selector' => '#upcoming'
	));
  $wp_customize->selective_refresh->add_partial( 'preview', array(
    'selector' => '#preview'
	));
  $wp_customize->selective_refresh->add_partial( 'review', array(
    'selector' => '#review'
	));
  $wp_customize->selective_refresh->add_partial( 'meet_our_team', array(
    'selector' => '#meet-our-team'
	));
  $wp_customize->selective_refresh->add_partial( 'season_stats_label', array(
    'selector' => '#season-stats-label'
	));
  $wp_customize->selective_refresh->add_partial( 'games_played_label', array(
    'selector' => '#games-played-label'
	));
  $wp_customize->selective_refresh->add_partial( 'goals_scored_label', array(
    'selector' => '#goals-scored-label'
	));
  $wp_customize->selective_refresh->add_partial( 'goals_conceded_label', array(
    'selector' => '#goals-conceded-label'
	));
  $wp_customize->selective_refresh->add_partial( 'players_stats', array(
    'selector' => '#players-stats'
	));
  $wp_customize->selective_refresh->add_partial( 'players_stats_subheader', array(
    'selector' => '#players-stats-subheader'
	));
  $wp_customize->selective_refresh->add_partial( 'points_label', array(
    'selector' => '#points-label'
	));
  $wp_customize->selective_refresh->add_partial( 'goalkpeers', array(
    'selector' => '#goalkeepers'
	));
  $wp_customize->selective_refresh->add_partial( 'defenders', array(
    'selector' => '#defenders'
	));
   $wp_customize->selective_refresh->add_partial( 'stats_player_name', array(
    'selector' => '#stats-player-name'
	));
   $wp_customize->selective_refresh->add_partial( 'stats_games_played', array(
    'selector' => '#stats-games-played'
	));
   $wp_customize->selective_refresh->add_partial( 'stats_assists', array(
    'selector' => '#stats-assists'
	));
   $wp_customize->selective_refresh->add_partial( 'stats_goals', array(
    'selector' => '#stats-goals'
	));
  $wp_customize->selective_refresh->add_partial( 'view_full_squad', array(
    'selector' => '#view-full-squad'
	));
  $wp_customize->selective_refresh->add_partial( 'gallery', array(
    'selector' => '#gallery'
	));
  $wp_customize->selective_refresh->add_partial( 'copyright_label', array(
    'selector' => '#copyright-label'
	));
  $wp_customize->selective_refresh->add_partial( 'read_more', array(
    'selector' => '#read-more'
	));
  $wp_customize->selective_refresh->add_partial( 'search', array(
    'selector' => '#search'
	));
  
/* PAGE HEADERS */
	/* PANEL */  
  $wp_customize->add_panel( 'page_headers_panel', 
    array(
        'priority'       => 100,
        'title'            => __( 'Page headers', 'nd_dosth' ),
        'description'      => __( 'Headers on particular pages', 'nd_dosth' ),
    ) 
);
	
  	/* SECTIONS */
	$wp_customize->add_section( 'schedule_headers', 
    array(
        'title'         => __( 'Schedule', 'nd_dosth' ),
        'priority'      => 1,
        'panel'         => 'page_headers_panel'
    ) 
);
  
  $wp_customize->add_section( 'results_headers', 
    array(
        'title'         => __( 'Results', 'nd_dosth' ),
        'priority'      => 2,
        'panel'         => 'page_headers_panel'
    ) 
);
  
   $wp_customize->add_section( 'standings_headers', 
    array(
        'title'         => __( 'Standings', 'nd_dosth' ),
        'priority'      => 3,
        'panel'         => 'page_headers_panel'
    ) 
);
  
   $wp_customize->add_section( 'team_headers', 
    array(
        'title'         => __( 'Team', 'nd_dosth' ),
        'priority'      => 4,
        'panel'         => 'page_headers_panel'
    ) 
);
  
   $wp_customize->add_section( 'gallery_headers', 
    array(
        'title'         => __( 'Gallery', 'nd_dosth' ),
        'priority'      => 5,
        'panel'         => 'page_headers_panel'
    ) 
);
  
   $wp_customize->add_section( 'archive_headers', 
    array(
        'title'         => __( 'Archive', 'nd_dosth' ),
        'priority'      => 6,
        'panel'         => 'page_headers_panel'
    ) 
);
  
  
  /* CONTROLS */
  /* Schedule */
  $wp_customize->add_setting( 'page_schedule',
    array(
        'default'           => __( 'Season schedule', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'page_schedule', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'schedule_headers',
        'label'       => 'Season schedule',
        'description' => 'Label displayed at the top of schedule page'
    )
);
  
  $wp_customize->add_setting( 'page_upcoming',
    array(
        'default'           => __( 'Upcoming', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'page_upcoming', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'schedule_headers',
        'label'       => 'Upcoming',
        'description' => 'Label displayed at the top of season schedule'
    )
);
  
  /* Results */
    $wp_customize->add_setting( 'page_results',
    array(
        'default'           => __( 'Season results', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'page_results', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'results_headers',
        'label'       => 'Season results',
        'description' => 'Label displayed at the top of results page'
    )
);
  
  $wp_customize->add_setting( 'page_last_match',
    array(
        'default'           => __( 'Last match', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'page_last_match', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'results_headers',
        'label'       => 'Last match',
        'description' => 'Label displayed at the top of season results'
    )
);
  
  /* Team */
  $wp_customize->add_setting( 'page_team',
    array(
        'default'           => __( 'Our team', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'page_team', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'team_headers',
        'label'       => 'Team header',
        'description' => 'Label displayed at the top of team page'
    )
);
  
  /* Gallery */
  $wp_customize->add_setting( 'page_gallery',
    array(
        'default'           => __( 'Gallery', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'page_gallery', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'gallery_headers',
        'label'       => 'Gallery header',
        'description' => 'Label displayed at the top of gallery page'
    )
);
  
    /* Standings */
  $wp_customize->add_setting( 'page_standings',
    array(
        'default'           => __( 'Standings', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'page_standings', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'standings_headers',
        'label'       => 'Standings header',
        'description' => 'Label displayed at the top of standings page'
    )
);
  
   /* Archive */
  $wp_customize->add_setting( 'page_archive',
    array(
        'default'           => __( 'Archive', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'page_archive', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'archive_headers',
        'label'       => 'Archive header',
        'description' => 'Label displayed at the top of archive page'
    )
);
  
/* PAGE HEADERS - REGISTER CUSTOMIZER ICONS */
    $wp_customize->selective_refresh->add_partial( 'page_schedule', array(
    'selector' => '#page-schedule'
	));
    $wp_customize->selective_refresh->add_partial( 'page_upcoming', array(
    'selector' => '#page-upcoming'
	));
    $wp_customize->selective_refresh->add_partial( 'page_results', array(
    'selector' => '#page-results'
	));
    $wp_customize->selective_refresh->add_partial( 'page_last_match', array(
    'selector' => '#page-last-match'
	));
  $wp_customize->selective_refresh->add_partial( 'page_team', array(
    'selector' => '#page-team'
	));
  $wp_customize->selective_refresh->add_partial( 'page_gallery', array(
    'selector' => '#page-gallery'
	));
  $wp_customize->selective_refresh->add_partial( 'page_standings', array(
    'selector' => '#page-standings'
	));
   $wp_customize->selective_refresh->add_partial( 'page_archive', array(
    'selector' => '#page-archive'
	));
  
/* SINGLE PLAYER PAGE */
  /* PANEL */
  $wp_customize->add_panel( 'single_player_panel', 
    array(
        'priority'       => 100,
        'title'            => __( 'Single player', 'nd_dosth' ),
        'description'      => __( 'Stats labels on single player page', 'nd_dosth' ),
    ) 
);
	
  	/* SECTIONS */
	$wp_customize->add_section( 'single_player_top', 
    array(
        'title'         => __( 'Top', 'nd_dosth' ),
        'priority'      => 1,
        'panel'         => 'single_player_panel'
    ) 
);
  
  $wp_customize->add_section( 'single_player_middle', 
    array(
        'title'         => __( 'Middle', 'nd_dosth' ),
        'priority'      => 2,
        'panel'         => 'single_player_panel'
    ) 
);
  
   $wp_customize->add_section( 'single_player_bottom', 
    array(
        'title'         => __( 'Bottom', 'nd_dosth' ),
        'priority'      => 3,
        'panel'         => 'single_player_panel'
    ) 
);
  
  /* CONTROLS */
  /* Top */
  $wp_customize->add_setting( 'single_games_played',
    array(
        'default'           => __( 'Games played', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_games_played', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'single_player_top',
        'label'       => 'Games played',
        'description' => 'Label for first stat at the top of single player page'
    )
);
  
   $wp_customize->add_setting( 'single_minutes_played',
    array(
        'default'           => __( 'Minutes', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_minutes_played', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'single_player_top',
        'label'       => 'Minutes',
        'description' => 'Label for second stat at the top of single player page'
    )
);
  
   $wp_customize->add_setting( 'single_starts',
    array(
        'default'           => __( 'Starts', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_starts', 
    array(
        'type'        => 'text',
        'priority'    => 3,
         'section'     => 'single_player_top',
        'label'       => 'Starts',
        'description' => 'Label for third stat at the top of single player page'
    )
);
  
  /* Middle */
  $wp_customize->add_setting( 'single_full_name',
    array(
        'default'           => __( 'Full name', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_full_name', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'single_player_middle',
        'label'       => 'Full name',
        'description' => 'Label for player\'s full name on single player page'
    )
);
  
    $wp_customize->add_setting( 'single_position',
    array(
        'default'           => __( 'Position', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_position', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'single_player_middle',
        'label'       => 'Position',
        'description' => 'Label for player\'s position on single player page'
    )
);
  
   $wp_customize->add_setting( 'single_date_of_birth',
    array(
        'default'           => __( 'Date of birth', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_date_of_birth', 
    array(
        'type'        => 'text',
        'priority'    => 3,
         'section'     => 'single_date_of_birth',
        'label'       => 'Date of birth',
        'description' => 'Label for player\'s date of birth on single player page'
    )
);
  
   $wp_customize->add_setting( 'single_weight_and_height',
    array(
        'default'           => __( 'Weight / Height', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_weight_and_height', 
    array(
        'type'        => 'text',
        'priority'    => 4,
         'section'     => 'single_player_middle',
        'label'       => 'Weight and height',
        'description' => 'Label for player\'s weight and height on single player page'
    )
);
  
   $wp_customize->add_setting( 'single_in_team_since',
    array(
        'default'           => __( 'In team since', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_in_team_since', 
    array(
        'type'        => 'text',
        'priority'    => 5,
         'section'     => 'single_player_middle',
        'label'       => 'In team since',
        'description' => 'Label for player\'s in team since field on single player page'
    )
);
  
  /* Bottom */
  $wp_customize->add_setting( 'single_goals',
    array(
        'default'           => __( 'Goals', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_goals', 
    array(
        'type'        => 'text',
        'priority'    => 1,
         'section'     => 'single_player_bottom',
        'label'       => 'Goals',
        'description' => 'Label for player\'s goals on single player page'
    )
);
  
  $wp_customize->add_setting( 'single_assists',
    array(
        'default'           => __( 'Assists', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_assists', 
    array(
        'type'        => 'text',
        'priority'    => 2,
         'section'     => 'single_player_bottom',
        'label'       => 'Assists',
        'description' => 'Label for player\'s assists on single player page'
    )
);
  
    $wp_customize->add_setting( 'single_yellow_cards',
    array(
        'default'           => __( 'Yellow cards', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_yellow_cards', 
    array(
        'type'        => 'text',
        'priority'    => 3,
         'section'     => 'single_player_bottom',
        'label'       => 'Yellow cards',
        'description' => 'Label for player\'s yellow cards on single player page'
    )
);
  
    $wp_customize->add_setting( 'single_red_cards',
    array(
        'default'           => __( 'Red cards', 'nd_dosth' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh'
    )
);
  
  $wp_customize->add_control( 'single_red_cards', 
    array(
        'type'        => 'text',
        'priority'    => 4,
         'section'     => 'single_player_bottom',
        'label'       => 'Red cards',
        'description' => 'Label for player\'s red cards on single player page'
    )
);
  
  /* SINGLE PLAYER - REGISTER CUSTOMIZER ICONS */
    $wp_customize->selective_refresh->add_partial( 'single_games_played', array(
    'selector' => '#single-games-played'
	));
    $wp_customize->selective_refresh->add_partial( 'single_minutes_played', array(
    'selector' => '#single-minutes-played'
	));
    $wp_customize->selective_refresh->add_partial( 'single_starts', array(
    'selector' => '#single-starts'
	));
  $wp_customize->selective_refresh->add_partial( 'single_full_name', array(
    'selector' => '#single-full-name'
	));
  $wp_customize->selective_refresh->add_partial( 'single_position', array(
    'selector' => '#single-position'
	));
  $wp_customize->selective_refresh->add_partial( 'single_date_of_birth', array(
    'selector' => '#single-date-of-birth'
	));
  $wp_customize->selective_refresh->add_partial( 'single_weight_and_height', array(
    'selector' => '#single-weight-and-height'
	));
  $wp_customize->selective_refresh->add_partial( 'single_in_team_since', array(
    'selector' => '#single-in-team-since'
	));
  $wp_customize->selective_refresh->add_partial( 'single_goals', array(
    'selector' => '#single-goals'
	));
  $wp_customize->selective_refresh->add_partial( 'single_assists', array(
    'selector' => '#single-assists'
	));
  $wp_customize->selective_refresh->add_partial( 'single_yellow_cards', array(
    'selector' => '#single-yellow-cards'
	));
  $wp_customize->selective_refresh->add_partial( 'single_red_cards', array(
    'selector' => '#single-red-cards'
	));
  
}
add_action( 'customize_register', 'futbolia_additional_customizer_settings' );

/* Add fields to comments form */

function futbolia_add_comment_form_fields($fields) {
  $fields['name'] = '<input name="name" id="name" type="text" />';
  return $fields;
}

add_action('comment_form_default_fields', 'futbolia_add_comment_form_fields');

/* AJAX request for best players stats */

add_action('wp_ajax_get_position', 'futbolia_get_position'); 
add_action('wp_ajax_nopriv_get_position', 'futbolia_get_position');

function futbolia_get_position() {
  $args;
  $pos = $_POST['position'];
  if($pos == 'ALL') {
    echo "jestem!!!!!";
  	  $args = array(
  	"post_type" => "Players",
  	"posts_per_page" => 3
  );
  }
  else {
  	$pos = substr($_POST['position'], 0, -1);
    
    $args = array(
  	"post_type" => "Players",
  	"posts_per_page" => 3,
  	'meta_key' => 'position',
  	'meta_value' => $pos,
    'orderby' => "goals",
    "order" => "ASC"
  );
  }
  
  $playersQuery = new WP_Query($args);
  
  if($playersQuery->have_posts()) {
    while($playersQuery->have_posts()) {
    	$playersQuery->the_post();
      	echo "
      	<tr>
                        <td>" . get_field('first_name') . ' ' . get_field('second_name') . "</td>
                        <td>" . get_field('games_played') . "</td>
                        <td>" . get_field('minutes_played') . "</td>
                        <td>" . get_field('goals') ."</td>
        </tr>
      ";
    }
  }
  else {
  	echo "<tr><td></td><td></td><td></td><td></td></tr>";
  }
}
