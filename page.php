<?php
get_header();

$titlewidth = get_field('title_row_width');
$title = get_the_title(); ?>
<div id="main" class="contentWrap">
	 		
	<section>
	 			
	 	<?php if ( $titlewidth === '1080' ): ?>
	 	<div class="innerContainer w1080 section4">
	 			
	 	<?php elseif ( $titlewidth === '850' ): ?>
	 	<div class="innerContainer w850 section4">
	 			
	 	<?php else : ?>
	 	<div class="innerContainer section4">
	 	<?php endif; ?>
	 			
			<h1 class="postTitle"><?php echo $title ?></h1>
					
		</div>
			
	</section>
			
	<?php
	if ( have_posts() ) {
	 	while ( have_posts() ) {
			the_post();
			the_content();
		}
	} ?>
			
</div>

<?php get_footer();
