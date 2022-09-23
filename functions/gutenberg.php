<?php

/* STYLE GUTENBERG */
function gutenberg_editor_styles() {
	add_theme_support('editor-styles');
	add_editor_style( 'assets/css/gutenberg.css' );
}

add_action('init','gutenberg_editor_styles');

/* ADD BACK EXCERPTS */
function wpse325327_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpse325327_add_excerpts_to_pages' );

// DISABLE GUTENBERG ON SPECIFIC CPTs
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'testimonal' || $post_type === 'post' || $post_type === 'staff_member') return false;
    return $current_status;
}