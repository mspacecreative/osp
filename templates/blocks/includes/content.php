<?php
if ( $icon ) {
    echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
}

echo $heading;

echo '<div>' . $contentrightcol . '</div>';

if ( have_rows('call_to_action') ) {
    while ( have_rows('call_to_action') ) { 
        the_row();
        $link = get_sub_field('link');
        $label = get_sub_field('label');
        if ( $bgcolor == 'dark' && $link && $label ) {
            echo '<a href="' . $link . '" class="btn light">' . $label . '</a>';
        } elseif ( $bgcolor == 'dark' && $link ) {
            echo '<a href="' . $link . '" class="btn light">Learn more</a>';
        } elseif ( $bgcolor == 'light' && $link && $label ) {
            echo '<a href="' . $link . '" class="btn blue">' . $label . '</a>';
        } elseif ( $bgcolor == 'light' && $link ) {
            echo '<a href="' . $link . '" class="btn blue">Learn more</a>';
        } elseif ( $link && $label ) {
            echo '<a href="' . $link . '" class="btn blue">' . $label . '</a>';
        } elseif ( $link ) {
            echo '<a href="' . $link . '" class="btn blue">Learn more</a>';
        }
    }
} 