<?php
$padding = get_field('padding');
$maxwidth = get_field('max_width');
$rowheading = get_field('row_heading');
$bgcolor = get_field('background_colour');
$blockanchor = get_field('block_anchor');
$hide = get_field('hide_block');

if ( $hide ) : ?>
<div style="display: none;">
	<?php if ( $blockanchor && $bgcolor == 'lightblue' ): ?>
	<section id="<?php echo $blockanchor ?>" class="section light_blue_bg">
	<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' ): ?>
	<section id="<?php echo $blockanchor ?>" class="section light_grey_bg">
	<?php elseif ( $bgcolor == 'lightgrey' ): ?>
	<section class="section light_grey_bg">
	<?php elseif ( $bgcolor == 'lightblue' ): ?>
	<section class="section light_blue_bg">
	<?php elseif ( $blockanchor ): ?>
	<section id="<?php echo $blockanchor ?>" class="section">
	<?php else : ?>
	<section>
	<?php endif; ?>
	
		<div class="innerContainer w1080 no-top-bottom-padding">
		
			<?php if ( $rowheading ): ?>
			<div class="innerContainer w1080 no-top-bottom-padding centered-title-with-line-rules">
				<h2 class="bottom-margin-50"><?php echo $rowheading ?></h2>
			</div>
			<?php endif; ?>
			
			<?php if ( $padding == 'both' && $maxwidth ): ?>
			<div class="top-bottom-padding-50 row clear maxWidth600">
			<?php elseif ( $padding == 'top' && $maxwidth ): ?>
			<div class="top-padding row clear maxWidth600">
			<?php elseif ( $padding == 'bottom' && $maxwidth ): ?>
			<div class="bottom-padding row clear maxWidth600">
			<?php elseif ( $padding == 'both' ): ?>
			<div class="top-bottom-padding-50 innerContainer w1080 row clear">
			<?php elseif ( $padding == 'top' ): ?>
			<div class="top-padding innerContainer w1080 row clear">
			<?php elseif ( $padding == 'bottom' ): ?>
			<div class="bottom-padding row clear">
			<?php elseif ( $maxwidth ): ?>
			<div class="row clear maxWidth600">
			<?php else : ?>
			<div class="no-top-bottom-padding innerContainer w1080 row clear">
			<?php endif; ?>
			
				<div class="col-lg-12 col-md-12 col-md-12 col-sm-12 col-xs-12 col">
					<div class="carousel content-carousel">
									
						<?php
						$images = get_field('photo_gallery');
									
						if( $images ):
						foreach( $images as $image ): ?>
									
						<div>
							<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php if ( $image ): ?>
							<p><?php echo $image['title']; ?></p>
							<?php endif; ?>
						</div>
									
						<?php 
						endforeach;
						endif; ?>
									
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
</div>
			
<?php else : ?>
<?php if ( $blockanchor && $bgcolor == 'lightblue' ): ?>
	<section id="<?php echo $blockanchor ?>" class="section light_blue_bg">
	<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' ): ?>
	<section id="<?php echo $blockanchor ?>" class="section light_grey_bg">
	<?php elseif ( $bgcolor == 'lightgrey' ): ?>
	<section class="section light_grey_bg">
	<?php elseif ( $bgcolor == 'lightblue' ): ?>
	<section class="section light_blue_bg">
	<?php elseif ( $blockanchor ): ?>
	<section id="<?php echo $blockanchor ?>" class="section">
	<?php else : ?>
	<section>
	<?php endif; ?>
	
		<div class="innerContainer w1080 no-top-bottom-padding">
		
			<?php if ( $rowheading ): ?>
			<div class="innerContainer w1080 no-top-bottom-padding centered-title-with-line-rules">
				<h2 class="bottom-margin-50"><?php echo $rowheading ?></h2>
			</div>
			<?php endif; ?>
			
			<?php if ( $padding == 'both' && $maxwidth ): ?>
			<div class="top-bottom-padding-50 row clear w850">
			<?php elseif ( $padding == 'top' && $maxwidth ): ?>
			<div class="top-padding row clear w850">
			<?php elseif ( $padding == 'bottom' && $maxwidth ): ?>
			<div class="bottom-padding row clear w850">
			<?php elseif ( $padding == 'both' ): ?>
			<div class="top-bottom-padding-50 innerContainer w1080 row clear">
			<?php elseif ( $padding == 'top' ): ?>
			<div class="top-padding innerContainer w850 row clear">
			<?php elseif ( $padding == 'bottom' ): ?>
			<div class="bottom-padding row clear">
			<?php elseif ( $maxwidth ): ?>
			<div class="row clear w850">
			<?php else : ?>
			<div class="no-top-bottom-padding innerContainer w1080 row clear">
			<?php endif; ?>
			
				<div class="col-lg-12 col-md-12 col-md-12 col-sm-12 col-xs-12 col">
					<div class="carousel content-carousel">
									
						<?php
						$images = get_field('photo_gallery');
									
						if( $images ):
						foreach( $images as $image ): ?>
									
						<div>
							<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php if ( $image ): ?>
							<p><?php echo $image['caption']; ?></p>
							<?php endif; ?>
						</div>
									
						<?php 
						endforeach;
						endif; ?>
									
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
<?php endif; ?>