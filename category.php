<?php get_header(); ?>

<div id="main" class="contentWrap">

	<?php
	$title = get_the_title();
	$titlewidth = get_field('title_row_width');
	
	if ( $titlewidth === '1080' ) : ?>
	<div class="innerContainer w1080 section4">
	
	<?php elseif ( $titlewidth === '850' ) : ?>
	<div class="innerContainer w850 section4">
	
	<?php else : ?>
	<div class="innerContainer section4">
	<?php endif; ?>
	
		<h1 class="postTitle"><span class="grey"><?php esc_html_e( 'Category ', 'osp' ); ?></span><?php single_cat_title(); ?></h1>
		
		<?php get_template_part( 'templates/loops/loop-category' );
		get_template_part( 'pagination' ); ?>
		
	</div>
</div>

<?php get_footer(); ?>
