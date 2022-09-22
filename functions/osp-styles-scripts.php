<?php

function sona_styles()
{
    wp_register_script('conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array('jquery'), '4.3.0'); // Conditionizr
    wp_enqueue_script('conditionizr');

    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr.js', array('jquery'), '2.7.1'); // Modernizr
    wp_enqueue_script('modernizr');

    wp_register_script('osp-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true); // Custom scripts
    wp_enqueue_script('osp-scripts');
    
    wp_register_style('osp-styles', get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all');
    wp_enqueue_style('osp-styles');
    
    wp_register_style('google-font', 'https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;600;700&display=swap', array(), null, 'all');
    wp_enqueue_style('google-font');
    
    wp_register_style('typekit', 'https://use.typekit.net/nqa2hgd.css', array(), null, 'all');
    wp_enqueue_style('typekit');
    
    wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
	
	wp_register_style('aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), null, 'all');
    wp_enqueue_style('aos-css');
    
    wp_register_script('aos-script', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery'), null, true);
	wp_enqueue_script('aos-script');
	
	wp_register_script('of-js', get_template_directory_uri() . '/assets/js/vendor/objectFitPolyfill.min.js', array('jquery'), null, true);
    wp_enqueue_script('of-js');
	    
    wp_register_script('slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('slick-script');

    // MODAL SCRIPT
	wp_register_script('modal-script', get_template_directory_uri() . '/assets/js/modal.js', array('jquery'), false, true);
    // Localize the script with new data
    $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'modal' ),
    );
    wp_localize_script( 'modal-script', 'perennia', $script_data_array );
    wp_enqueue_script('modal-script');
}
add_action('wp_enqueue_scripts', 'sona_styles');