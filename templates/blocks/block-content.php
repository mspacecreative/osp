<?php
$bgimg = get_field('background_image');
$bgcolor = get_field('background_color');
$blockanchor = get_field('block_anchor');
$bgimgoverlay = get_field('background_image_overlay');
$width = get_field('content_width');
	
if ( $bgimg ):

	if ( $blockanchor && $bgimgoverlay == 'dark' ): ?>
	<section id="<?php echo $blockanchor ?>" class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	
	<?php elseif ( $blockanchor && $bgimgoverlay == 'light' ): ?>
	<section id="<?php echo $blockanchor ?>" class="bg-img-cover light-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	
	<?php elseif ( $bgimgoverlay == 'dark' ): ?>
	<section class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	
	<?php elseif ( $bgimgoverlay == 'light' ): ?>
	<section class="bg-img-cover light-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	
	<?php elseif ( $blockanchor ): ?>
	<section id="<?php echo $blockanchor ?>" class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	
	<?php else : ?>
	<section class="bg-img-cover content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	<?php endif;
	
elseif ( $bgcolor == 'light' ):
	
	if ( $blockanchor ) : ?>
	<section id="<?php echo $blockanchor ?>" class="lightGreyBg content-section">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	
	<?php else : ?>
	<section class="lightGreyBg content-section">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	<?php endif;
	
elseif ( $bgcolor == 'dark' ):
	
	if ( $blockanchor ) : ?>
	<section id="<?php echo $blockanchor ?>" class="darkbg content-section light">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	
	<?php else : ?>
	<section class="darkbg content-section light">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	<?php endif;
	
else : 
	
	if ( $blockanchor ) : ?>
	<section id="<?php echo $blockanchor ?>" class="content-section">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	
	<?php else : ?>
	<section class="content-section">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</section>
	<?php endif;

endif; ?>