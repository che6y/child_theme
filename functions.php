<?php

if (! function_exists('child_theme_enqueue_scripts')){
    function child_theme_enqueue_scripts() {
        wp_enqueue_style(
            'hello-elementor-child-css',
            get_stylesheet_directory_uri() . '/style.css',
            array('hello-elementor-theme-style'),
            '1.0.0'
        );
    }
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_scripts', 10 );


if (! function_exists('abbak_remove_title_on_home_page')){
    function abbak_remove_title_on_home_page($show){
        global $post;

        if ($post->post_type == 'page' || is_home()){
            $show = false;
        }
        return $show;
    }
}
add_filter( 'hello_elementor_page_title', 'abbak_remove_title_on_home_page', 10, 1 );
