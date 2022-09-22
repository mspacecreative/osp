<?php
 
function load_page_by_ajax_callback() {
    check_ajax_referer('modal', 'security');
    $args = array(
        'post_type' => array(
            'company',
            'post',
            'page',
            'staff_member',
        ),
        'post_status' => 'publish',
        'p' => $_POST['id'],
    );

    $posts = new WP_Query( $args );
 
    $arr_response = array();
    if ($posts->have_posts()) {
 
        while($posts->have_posts()) {
 
            $posts->the_post();
            $modal_content = apply_filters( 'the_content', get_the_content() );
            
        	$arr_response = array(
                'image' => get_the_post_thumbnail_url($post->ID, 'medium-square'),
                'title' => get_the_title(),
                'hidetitle' => get_field('hide_page_title_in_modal'),
                'content' => $modal_content,
                'video' => get_field('youtube_vimeo_url'),
                'shortcode' => get_field('shortcode'),
            );
        }
        wp_reset_postdata();
    }
 
    echo json_encode($arr_response);
 
    wp_die();
}

add_action('wp_ajax_load_page_by_ajax', 'load_page_by_ajax_callback');
add_action('wp_ajax_nopriv_load_page_by_ajax', 'load_page_by_ajax_callback');