<?php
/**
 * Template Name: functions.php
 * Description: Add features to themes
 */

function add_styles() {

    // plugin style
    wp_enqueue_style('plugin-style', get_theme_file_uri('/assets/css/plugins.min.css'));

    // app full style
    wp_enqueue_style('app-style', get_theme_file_uri('/assets/css/app.min.css'));

	// main style
    wp_enqueue_style('nain-style', get_theme_file_uri('/style.css'));

    // jquery js
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', true);

    // plugin full scripts
    wp_enqueue_script('plugin-scripts', get_template_directory_uri() . '/assets/js/plugins.min.js', array(), '1.0', true);

    // app full scripts
    wp_enqueue_script('app-scripts', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts','add_styles');

add_theme_support( 'custom-header');
add_theme_support( 'menus' );
add_theme_support ('title-tag');

if ( ! function_exists( 'webhost_register_nav_menu' ) ) {

	function webhost_register_nav_menu(){
		register_nav_menus( array(
	    	'header_left_menu' => __( 'Header Left Menu', 'text_domain' ),
	    	'header_center_menu'  => __( 'Header Center Menu', 'text_domain' ),
            'header_right_menu'  => __( 'Header Right Menu', 'text_domain' ),
			'footer_left_menu' => __( 'Footer Left Menu', 'text_domain' ),
	    	'footer_center_menu'  => __( 'Footer Center Menu', 'text_domain' ),
			'footer_middle_menu'  => __( 'Footer Middle Menu', 'text_domain' ),
            'footer_right_menu'  => __( 'Footer Right Menu', 'text_domain' ),

		) );
	}
	add_action( 'after_setup_theme', 'webhost_register_nav_menu', 0 );
}

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 80,
		'width'                => 121,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);

	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function mytheme_widget_int() {
	register_sidebar(array(
		'name' => esc_html__('Footer-content', 'mytheme'),
		'id' => 'footer-content',
		'description' => esc_html__('Add widgets here for the content of footer-content', 'mytheme'),
		'before_widget' => '<p id="%1$s" class="%2$s">',
		'after_widget' => '</p>'
	));
	register_sidebar(array(
		'name' => esc_html__('Footer-copyright', 'mytheme'),
		'id' => 'footer-copyright',
		'description' => esc_html__('Add widgets here for the content of footer-copyright', 'mytheme'),
		'before_widget' => " ",
		'after_widget' => ' '
	));
}
add_action('widgets_init', 'mytheme_widget_int');


add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'custom_image_sizes' ) ) {
	function custom_image_sizes(){
	 array(
	    	add_image_size( 'homepage_thumb', 501, 504, true ),
			add_image_size( 'homepage_tab', 369, 371, true ),
			add_image_size( 'homepage_mobile', 340, 342, true ),
			add_image_size( 'brand_logo', 197, 57, true ),
			add_image_size( 'service_icon', 101, 100, true ),
			add_image_size( 'website_logo', 79, 50, true ),
			add_image_size( 'website_brand', 120, 70, true )
		);
	}
	add_action( 'after_setup_theme', 'custom_image_sizes');
}

function field() {
	return  "the_sub_field";
}

$field = field();

function imagetag($id, $size, $width, $height, $class){
	$image = get_sub_field($id);
	$picture = $image[ 'sizes'][$size];
	$alt =  $image['alt'];
	$image_tag = '<img data-src="'.$picture.' "alt="'.$alt.'" width="'.$width.'" height="'.$height.'" class="'.$class.'">';

	return $image_tag;
}

function picturetag($id, $desktop_size, $tab_size, $mobile_size, $width, $height, $class){
	$image = get_sub_field($id);
	$picture_desktop = $image[ 'sizes'][ $desktop_size]; 
	$picture_tab = $image[ 'sizes'][ $tab_size]; 
	$picture_mobile = $image[ 'sizes'][ $mobile_size]; 
	$alt =  $image['alt'];

	$picture_tag  = '<picture>';
	$picture_tag .= '<source media="(min-width: 786px)" srcset="'.$picture_desktop.'" type="image/webp">';
	$picture_tag .= '<source media="(min-width: 576px)" srcset="'.$picture_tab.'" type="image/webp">';
	$picture_tag .= '<source media="(min-width: 320px)" srcset="'.$picture_mobile.'" type="image/webp">';
	$picture_tag .= '<img src="'.$picture_desktop.'" width="'.$width.'" height="'.$height.'" alt="'.$alt.'" class="'.$class.'">';
	$picture_tag .= '</picture>';

	return $picture_tag;
}


?>

