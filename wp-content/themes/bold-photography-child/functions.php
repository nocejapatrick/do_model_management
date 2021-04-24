<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/my-js/script.js', array(), '', true );
}

add_filter( 'get_the_archive_title', function ( $title ) {

   if( is_category() ) {

      $title = single_cat_title( '', false );

   }

   return $title;

});

function homepage_posts($query)
{
    if ($query->is_category() && $query->query["category_name"] != "blogs")
    {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_action('pre_get_posts', 'homepage_posts');