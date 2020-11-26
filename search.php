<?php
get_header();

if ( have_posts() ): ?>
<div class="contentWrap">';
	<div class="innerContainer w1080 section4">
	 	<h1><?php echo sprintf( __( '%s Search Results for ', 'osp' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
 	
		<?php while ( have_posts() ): the_post(); ?>
	 	<?php get_template_part( 'loop' ); ?>
	 	<?php get_template_part( 'pagination' ); ?>
	 	<?php endwhile; ?>
	</div>
</div>
<?php endif; wp_reset_query(); ?>

