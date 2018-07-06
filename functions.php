<?php

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'mainstyle', get_template_directory_uri().'/style.css' );
	
	wp_enqueue_script( 'jquery-child', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/* Menu Support */
register_nav_menus( array(
			'menu-2' => esc_html__( 'Secondary', 'coretheme' ),
		) );

/* Widget Section */		
register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'coretheme' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'coretheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	

/**
 * navigation bootstrap
 */
require 'wp_bootstrap_navwalker.php';


/*

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

*/