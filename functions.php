<?php
 
 
 remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

function my_deregister_styles()    { 
   //wp_deregister_style( 'amethyst-dashicons-style' ); 
   wp_deregister_style( 'dashicons' ); 


}

function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
remove_action ('wp_head', 'rsd_link');
function crunchify_remove_version() {
	return '';
}
add_filter('the_generator', 'crunchify_remove_version');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
add_filter('show_admin_bar', 'is_blog_admin');

add_filter( 'wp_sitemaps_add_provider', 'truemisha_remove_user_sitemap', 25, 2 );
 
function truemisha_remove_user_sitemap( $provider, $name ) {
 
   if ( 'users' === $name ) {
      return false;
   }
   return $provider;
 
}
 
 
 function rel2abs($rel, $base)
{
    /* return if already absolute URL */
    if (parse_url($rel, PHP_URL_SCHEME) != '') return $rel;

    /* queries and anchors */
    if ($rel[0]=='#' || $rel[0]=='?') return $base.$rel;

    /* parse base URL and convert to local variables:
       $scheme, $host, $path */
    extract(parse_url($base));

    /* remove non-directory element from path */
    $path = preg_replace('#/[^/]*$#', '', $path);

    /* destroy path if relative url points to root */
    if ($rel[0] == '/') $path = '';

    /* dirty absolute URL */
    $abs = "$host$path/$rel";

    /* replace '//' or '/./' or '/foo/../' with '/' */
    $re = array('#(/\.?/)#', '#/(?!\.\.)[^/]+/\.\./#');
    for($n=1; $n>0; $abs=preg_replace($re, '/', $abs, -1, $n)) {}

    /* absolute URL is ready! */
    return $scheme.'://'.$abs;
}


/*
   
add_action( 'wp_head', 'head_seo_meta_tags' );
function head_seo_meta_tags(){
	// description
	echo '<meta name="description" content="  ..." />';

	// keywords
	echo '<meta name="keywords" content="К " />';

	// robots
	echo '<meta name="robots" content="index,nofollow" />';

	// для мобильников.
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';

}*/
?>