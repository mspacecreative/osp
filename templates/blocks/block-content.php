<?php
$bgimg = get_field('background_image');
$bgcolor = get_field('background_color');
$blockanchor = get_field('block_anchor');
$bgimgoverlay = get_field('background_image_overlay');
$width = get_field('content_width');
	
if ( $bgimg ):

	if ( $blockanchor && $bgimgoverlay == 'dark' ): ?>
	<div id="<?php echo $blockanchor ?>" class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor && $bgimgoverlay == 'light' ): ?>
	<div id="<?php echo $blockanchor ?>" class="bg-img-cover light-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $bgimgoverlay == 'dark' ): ?>
	<div class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $bgimgoverlay == 'light' ): ?>
	<div class="bg-img-cover light-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php elseif ( $blockanchor ): ?>
	<div id="<?php echo $blockanchor ?>" class="bg-img-cover dark-overlay content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="bg-img-cover content-section" style="background-image: url(<?php echo $bgimg ?>);">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif;
	
elseif ( $bgcolor == 'light' ):
	
	if ( $blockanchor ) : ?>
	<div id="<?php echo $blockanchor ?>" class="lightGreyBg content-section">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="lightGreyBg content-section">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif;
	
elseif ( $bgcolor == 'dark' ):
	
	if ( $blockanchor ) : ?>
	<div id="<?php echo $blockanchor ?>" class="darkbg content-section light">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="darkbg content-section light">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif;
	
else : 
	
	if ( $blockanchor ) : ?>
	<div id="<?php echo $blockanchor ?>" class="content-section">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	
	<?php else : ?>
	<div class="content-section">
		<?php if ( $width ) : ?>
		<div class="bullet-points innerContainer w1080">
		<?php else : ?>
		<div class="bullet-points innerContainer">
		<?php endif;
			include('includes/section-content-loop.php'); ?>
		</div>
	</div>
	<?php endif;

endif; ?>