<div class="heroContent">
	<div class="innerContainer w1080 textAlignCenter light">
		<div class="container">
			<h1>
			<?php
			$herotitle = get_field('hero_title');
			if ( $herotitle ) {
				echo $herotitle;
			} ?>
			
			</h1>
			<?php 
			if ( have_rows('cta') ) {
				while ( have_rows('cta') ) {
					the_row();
					$label = get_sub_field('label');
					$linktype = get_sub_field('link_type');
					$link = get_sub_field('link');
					$anchor = get_sub_field('anchor');
					$url = get_sub_field('url');
							
					if ( $linktype === 'anchor' ) {
						echo '<a class="btn light" href="#' . $anchor . '">' . $label .'</a>';
					} elseif ( $linktype === 'internal' ) {
						echo '<a class="btn light" href="' . $link . '">' . $label .'</a>';
					} elseif ( $linktype === 'external' ) {
						echo '<a class="btn light" href="' . $url . '" target="_blank">' . $label .'</a>';
					} else {
						echo '<a class="btn light" href="' . $link . '">' . $label .'</a>';
					}
				}
			}
			?>

		</div>
	</div>
	
	<!-- HERO CAROUSEL / HERO VIDEO -->
	<?php 
	$layout = get_field('layout');
	$images = get_field('gallery');
	$size = 'full';
	
	if ( $layout === 'video' ) :
	
	if ( have_rows('video') ): ?>
	<div class="videoContainer">
		<?php while ( have_rows('video') ): the_row();
		$poster = get_sub_field('poster');
		
		if ( have_rows('video_formats') ):
		while ( have_rows('video_formats') ): the_row();
		$link = get_sub_field('link');
		$linkOgg = get_sub_field('ogg_link');
		$linkWebM = get_sub_field('webm_link'); ?>
		
		<video data-object-fit="cover" src="<?php echo $link ?>" poster="<?php echo $poster ?>" playsinline muted loop autoplay>
			<?php if ( $link ): ?>
			<source src="<?php echo $link ?>" type="video/mp4" />
			<?php endif; ?>
			
			<?php if ( $lindOgg ): ?>
			<source src="<?php echo $linkOgg ?>" type="video/ogg" />
			<?php endif;
			
			if ( $linkWebM ): ?>
			<source src="<?php echo $linkWebM ?>" type="video/webm" />
			<?php endif; ?>
		</video>
		
		<?php 
		endwhile;
		endif; 
		
		endwhile; ?>
	</div>
	<?php
	endif;
	
	elseif ( $layout === 'carousel' ):
	
	if ( $images ) : ?>
		
	<div class="carouselContainer">
		<div class="carousel">
			  		
			<?php foreach( $images as $image_id ) : ?>
			<div>
				<?php echo wp_get_attachment_image( $image_id, $size ); ?>
			</div>
			<?php endforeach; ?>
			  	
		</div>
	</div>
	
	<?php endif;
	
	else :
	
	if ( $images ) : ?>
		
	<div class="carouselContainer">
		<div class="carousel">
			  		
			<?php foreach( $images as $image_id ) : ?>
			<div>
				<?php echo wp_get_attachment_image( $image_id, $size ); ?>
			</div>
			<?php endforeach; ?>
			  	
		</div>
	</div>
		
	<?php endif;
	
	endif; ?>
</div>

<style>
	<?php
	$colorpicker = get_field('colour_overlay');
	$overlayopacity = get_field('overlay_opacity');
	if ( $colorpicker && $overlayopacity ): ?>
	.heroContent::before {
		background-color: <?php echo $colorpicker ?>;
		opacity: <?php echo $overlayopacity ?>;
	} elseif ( $colourpicker ) {
		background-color: <?php echo $colorpicker ?>;
	} <?php else : ?>
	.heroContent::before {
		background-color: #38C3E1;
		opacity: 0.85;
	}
	<?php endif; ?>
</style>