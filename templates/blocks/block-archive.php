<?php
$posttype = get_field('post_type');
$membertype = get_field('membership_type');
$brandtype = get_field('brand_type');
$format = get_field('display_format');

if ( $posttype == 'product' ) {
	
	$args = array(
	'post_type' => $posttype,
	'posts_per_page'=> -1,
	);
	
	include 'includes/block-loop-products.php';
}

elseif ( $posttype == 'team' && $membertype == 'core-team' || $membertype == 'scientific-advisory-board' || $membertype == 'management' || $membertype == 'sona-board' ) {

	$args = array(
	    'posts_per_page' => -1,
	    'post_type'      => $posttype,
	    'tax_query' => array (
			array(
			'taxonomy' => 'member_type',
			'field' => 'slug',
			'terms' => $membertype,
			)
		)
	);

	include 'includes/block-loop-team.php';
} 

elseif ( $posttype == 'team' ) {
	
	$args = array(
	    'posts_per_page' => -1,
	    'post_type'      => $posttype,
	);
	
	include 'includes/block-loop-team.php';
}

elseif ( $posttype == 'brand' && $format == 'grid' && $brandtype == 'resource' || $brandtype == 'partner' ) {
	
	$args = array(
	    'posts_per_page' => -1,
	    'post_type'      => $posttype,
	    'tax_query' => array (
			array(
			'taxonomy' => 'brand_type',
			'field' => 'slug',
			'terms' => $brandtype,
			)
		)
	);

	include 'includes/block-loop-brand_grid.php';
}

elseif ( $posttype == 'brand' && $format == 'carousel' && $brandtype == 'resource' || $brandtype == 'partner' ) {
	
	$args = array(
	    'posts_per_page' => -1,
	    'post_type'      => $posttype,
	    'tax_query' => array (
			array(
			'taxonomy' => 'brand_type',
			'field' => 'slug',
			'terms' => $brandtype,
			)
		)
	);

	include 'includes/block-loop-brand_carousel.php';
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