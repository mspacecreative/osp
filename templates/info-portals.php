<?php
$heading = get_field('heading', 'options');
$fit = get_field('cta_box', 'options');
?>

<!-- info portals -->
<section id="infoPortals" class="section textAlignCenter contentPortals">
	<div class="innerContainer">
		<h2><?php echo $heading ?></h2>
		
		<div class="container">
			<div class="row">
				<?php 
				if ( have_rows('researcher_student', 'options') ):
				while ( have_rows('researcher_student', 'options') ): the_row();
				$link = get_sub_field('link', 'options');
				$image = get_sub_field('image', 'options');
				$size = 'large';
				$text = get_sub_field('text', 'options'); ?>
				
				<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="contentPortal light"><a href="<?php echo $link ?>"></a>
						<?php
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
						
						<h3 class="overlaidText"><?php echo $text ?></h3>
					</div>
				</div>
				
				<?php 
				endwhile;
				endif;
				
				if ( have_rows('mentor_professional', 'options') ):
				while ( have_rows('mentor_professional', 'options') ): the_row();
				$link = get_sub_field('link', 'options');
				$image = get_sub_field('image', 'options');
				$size = 'large';
				$text = get_sub_field('text', 'options'); ?>
				<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="contentPortal light"><a href="<?php echo $link ?>"></a>
						<?php
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
						
						<h3 class="overlaidText"><?php echo $text ?></h3>
					</div>
				</div>
				<?php 
				endwhile;
				endif; ?>
			</div>
			
			<div class="row center-xs">
				<?php 
				if ( have_rows('entrepreneur_innovator', 'options') ):
				while ( have_rows('entrepreneur_innovator', 'options') ): the_row();
				$link = get_sub_field('link', 'options');
				$image = get_sub_field('image', 'options');
				$size = 'large';
				$text = get_sub_field('text', 'options'); ?>
				
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="contentPortal light"><a href="<?php echo $link ?>"></a>
						<?php
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
						
						<h3 class="overlaidText"><?php echo $text ?></h3>
					</div>
				</div>
				
				<?php 
				endwhile;
				endif;
				
				if ( have_rows('cta_box', 'options') ):
				while ( have_rows('cta_box', 'options') ): the_row();
				$heading = get_sub_field('heading', 'options'); ?>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="fitPortal light">
						<h3><?php echo $heading ?></h3>
						<?php
						if ( have_rows('cta_button', 'options') ):
						while ( have_rows('cta_button', 'options') ): the_row();
						$link = get_sub_field('link', 'options');
						$label = get_sub_field('label', 'options'); ?>
						<a href="<?php echo $link ?>" class="button light"><?php echo $label ?></a>
						<?php 
						endwhile;
						endif;
						?>
					</div>
				</div>
				<?php 
				endwhile;
				endif;
				
				if ( have_rows('partner_supporter', 'options') ):
				while ( have_rows('partner_supporter', 'options') ): the_row();
				$link = get_sub_field('link', 'options');
				$image = get_sub_field('image', 'options');
				$size = 'large';
				$text = get_sub_field('text', 'options'); ?>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="contentPortal light"><a href="<?php echo $link ?>"></a>
						<?php
						if ( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
						?>
						
						<h3 class="overlaidText"><?php echo $text ?></h3>
					</div>
				</div>
				
				<?php 
				endwhile;
				endif; ?>
				
			</div>
		</div>
	</div>
</section>
<!-- / info portals -->