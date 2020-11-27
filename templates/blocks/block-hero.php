<div class="heroContent">
	<div class="innerContainer w1080 textAlignCenter light">
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
					echo '<a class="button light" href="#' . $anchor . '">' . $label .'</a>';
				} elseif ( $linktype === 'internal' ) {
					echo '<a class="button light" href="' . $link . '">' . $label .'</a>';
				} elseif ( $linktype === 'external' ) {
					echo '<a class="button light" href="' . $url . '" target="_blank">' . $label .'</a>';
				} else {
					echo '<a class="button light" href="' . $link . '">' . $label .'</a>';
				}
			}
		}
		?>
	</div>
</div>
	
<!-- HERO CAROUSEL / HERO VIDEO -->
<?php 
$layout = get_field('layout');
$link = get_sub_field('link');
$linkOgg = get_sub_field('ogg_link');
$linkWebM = get_sub_field('webm_link');
$images = get_field('gallery');
$size = 'full';

if ( $layout === 'video' ) : ?>
<div class="videoContainer">
	<video src="<?php echo $link ?>" poster="<?php echo $poster ?>" playsinline muted loop autoplay>
		<source src="<?php echo $link ?>" type="video/mp4" />
		<source src="<?php echo $linkOgg ?>" type="video/ogg" />
		<source src="<?php echo $linkWebM ?>" type="video/webm" />
	</video>
</div>
<?php

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