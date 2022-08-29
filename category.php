<?php get_header();
include 'templates/blocks/includes/section-width.php';
include 'templates/blocks/includes/horizontal-alignment.php'; ?>

<div id="main" class="contentWrap">

	<section>
		<?php
		$title = get_the_title();
		$textalignment = (get_field('text_alignment') == 'center') ? ' text-align-center' : ''; ?>
		<div class="innerContainer section4<?php echo $sectionwidth ?>">
			<h1 class="postTitle<?php echo $textalignment ?>"><span class="grey"><?php esc_html_e( 'Category ', 'osp' ); ?></span><?php single_cat_title(); ?></h1>
		</div>
	</section>
	
	<section>
		<div class="innerContainer bottomPadding">
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
