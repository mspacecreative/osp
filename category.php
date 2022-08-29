<?php get_header();
include 'templates/blocks/includes/section-width.php';
include 'templates/blocks/includes/horizontal-alignment.php'; ?>

<div id="main" class="contentWrap">

	<section class="section4">
		<?php
		$title = get_the_title();
		$textalignment = (get_field('text_alignment', 'options') == 'center') ? ' text-align-center' : '';
		$horizontalalignment = (get_field('text_alignment', 'options') == 'center') ? '' : ' horizontal-align-left'; ?>

		<div class="innerContainer<?php echo $sectionwidth ?>">
			<div class="container<?php echo $horizontalalignment ?>">
				<h1 class="postTitle<?php echo $textalignment ?>"><span class="grey"><?php esc_html_e( 'Category ', 'osp' ); ?></span><?php single_cat_title(); ?></h1>
			</div>
		</div>
	</section>
	
	<section class="section no-top-padding">
		<div class="innerContainer">
			<div class="container<?php echo $sectionwidth ?>">
				<?php 
				get_template_part( 'templates/loops/loop-category' );
				get_template_part( 'pagination' ); 
				?>
			</div>
		</div>
	</section>

</div>

<?php get_footer(); ?>
