<?php
$staticimg = get_sub_field('static_image');
$size = 'large';
if( $staticimg ) {
    echo wp_get_attachment_image( $staticimg, $size );
}