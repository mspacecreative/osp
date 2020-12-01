<?php get_header();

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

<div class="contentWrap">
	
	<section>
		 <div class="innerContainer w1080 section4">
		 	<h1 class="postTitle"><span class="grey"><?php esc_html_e( 'Archive ', 'osp' ); ?></span><?php echo $term->name ?></h1>
		 </div>
	</section>
	
	<?php get_template_part('templates/loops/loop-group'); ?>
	
</div>

<?php get_footer(); ?>