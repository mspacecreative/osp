<?php get_header(); ?>

<div id="main" class="contentWrap">';
	
	<div class="innerContainer w1080 section4">
	 	<h1><?php echo sprintf( __( '%s Search Results for ', 'osp' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
	</div>
	
	<div class="innerContainer w1080 bottomPadding">
		<?php get_template_part( 'loop-list' ); ?>
	 	<?php get_template_part( 'pagination' ); ?>
	</div>
	
</div>

<?php get_footer(); ?>

