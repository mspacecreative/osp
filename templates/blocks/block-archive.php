<?php
$format = get_field('display_format');
$bgimg = get_field('background_image') ? ' style="background-image: url(' . get_field('background_image') . ');"' : '';
$textcolor = (get_field('text_colour') == 'light') ? ' light' : '';
$sectionwidth = get_field('section_width');
switch ($sectionwidth) {
	case '1280':
		$sectionwidth = '';
		break;
	case '1080':
		$sectionwidth = ' w1080';
		break;
	case '850':
		$sectionwidth = ' w1850';
		break;
	default:
		$sectionwidth = '';
		break;
}

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