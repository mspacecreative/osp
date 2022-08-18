<?php
$staticimg = get_sub_field('static_image');
$title = get_the_title($post->ID);
//$size = 'full';
if ( $staticimg ) {
    echo '<img src="' . $staticimg . '" class="full-width" alt="' . $title . '">';
}