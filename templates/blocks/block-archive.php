<?php
$format = get_field('display_format');

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