<?php

// CUSTOM STYLES ADDED TO FORMATS DROPDOWN
function my_custom_styles( $init_array ) {  

    $style_formats = array(  
        // These are the custom styles
        array(  
            'title' => 'CTA Button',  
            'inline' => 'a',  
            'classes' => 'btn blue',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Light CTA Button',  
            'inline' => 'a',  
            'classes' => 'btn light',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Small Text',  
            'block' => 'div',  
            'classes' => 'small-text',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Top Margin 30px',  
            'block' => 'span',  
            'classes' => 'top-margin--30',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Bottom Margin 30px',  
            'block' => 'span',  
            'classes' => 'bottom-margin--30',
            'wrapper' => true,
        )
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );

function custom_editor_styles() {
	add_editor_style('/assets/css/editor-styles.css');
}

add_action('init', 'custom_editor_styles');