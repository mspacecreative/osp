<?php
$format = get_field('display_format');
$bgimg = get_field('background_image') ? ' style="background-image: url(' . get_field('background_image') . ');"' : '';
$textcolor = (get_field('text_colour') == 'light') ? ' light' : '';

if ( $format === 'grid' ) {
	
	include 'includes/block-loop-grid.php';
}

elseif ( $format === 'carousel' ) {
	
	include 'includes/block-loop-carousel.php';
	
} ?>

<style>
	.product img {
		display: block;
		width: 100%;
	}
	.productButton {
		margin-top: 1em;
	}
</style>