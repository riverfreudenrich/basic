<?php

// Load javascripts the proper way!
function cg_load_scripts () {
	if ( !is_admin() ) {
		//js
	   	wp_deregister_script('jquery');
	   	wp_enqueue_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false);
			wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), time(), true);
			wp_enqueue_script('jarallax', "//unpkg.com/jarallax@1.10/dist/jarallax.min.js", array('jquery'), time(), true);
			wp_enqueue_script('jarallax-video', "//unpkg.com/jarallax@1.10/dist/jarallax-video.min.js", array('jquery'), time(), true);
			wp_enqueue_script('jarallax-scroll', "//unpkg.com/jarallax@1.10/dist/jarallax-element.min.js", array('jquery'), time(), true);
			wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), time(), true);
	   	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), time(), true);

		//css
		wp_enqueue_style( 'reset', get_template_directory_uri().'/css/reset.css', array(), 1.0, false );
		wp_enqueue_style( 'google-fonts', "//fonts.googleapis.com/css?family=Open+Sans:300,400,700", array(), 1.0, false );
		wp_enqueue_style( 'fonts', get_template_directory_uri().'/css/fonts.css', array(), 1.0, false );
		wp_enqueue_style( 'aos', get_template_directory_uri().'/css/aos.css', array(), 1.0, false );
		wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css', array(), 1.0, false );
		wp_enqueue_style( 'style', get_stylesheet_uri(), array(), time(), false );
		wp_enqueue_style( 'browser', get_template_directory_uri().'/css/browser.css', array(), 1.0, false );
		wp_enqueue_style( 'mobile', get_template_directory_uri().'/css/mobile.css', array(), time(), 'screen and (max-width:800px)' );
	}
}
add_action('wp_enqueue_scripts', 'cg_load_scripts');

// Declare menu areas
function cg_register_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
	register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
}
add_action( 'init', 'cg_register_menu' );

// Sitemap
function get_sitemap() {
	return("<nav class='primaryNav'><ul id='sitemap'>" . wp_list_pages('title_li=&child_of=0&depth=6&echo=0') . "</ul></nav>");
}
add_shortcode('get_sitemap','get_sitemap');

// Child Pages
function cg_get_top_parent_page_id() {
    global $post;
    $ancestors = $post->ancestors;
    // Check if page is a child page (any level)
    if ($ancestors) {
        //  Grab the ID of top-level page from the tree
        return end($ancestors);
    } else {
        // Page is the top level, so use  it's own id
        return $post->ID;
    }
}

?>
