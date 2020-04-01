<?php
/**
 * Description
 *
 * @package theme child name
 *
 */

/**
 *  Enqueue scripts and styles.
 */
function theme_child_scripts() {

	// Enqueue Parent Stylesheet
	wp_enqueue_style( 'theme-coder-parent-stylesheet', get_template_directory_uri() . '/style.css' );

} // theme_coder_child_scripts
add_action( 'wp_enqueue_scripts', 'theme_child_scripts' );


/* You can add your own php functions and code snippets below */