<?php
//Custom Header Logo Img tag
add_filter( 'genesis_seo_title', 'logo_site_title', 10, 2 );

    function logo_site_title( $title, $inside ){
     
        $child_inside = sprintf( '<a href="%s" title="%s"><img src="'. get_stylesheet_directory_uri() .'/images/logo.png" title="%s" alt="%s"/></a>', trailingslashit( home_url() ), esc_attr( get_bloginfo( 'name' ) ), esc_attr( get_bloginfo( 'name' ) ), esc_attr( get_bloginfo( 'name' ) ) );
     
        $title = str_replace( $inside, $child_inside, $title );
     
        return $title;
}


// OR this Method

/** Remove Title & Description **/
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
remove_action( 'genesis_site_description', 'genesis_seo_site_description' );
/** Remove default site title and add custom site title **/
remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
function custom_site_title() { 
     echo '<a href="'.get_bloginfo('url').'" title="My Website"><img src="'.wp_get_attachment_url(254).'" alt="My Website"/></a>';
}
add_action( 'genesis_site_title', 'custom_site_title' );