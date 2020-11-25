<?php
$bgcolor = get_field('background_colour');
$contenttype = get_field('content_type');
$aligncolumns = get_field('align_columns');
$rowheading = get_field('row_heading');
$headingalignment = get_field('heading_alignment');
$textcolor = get_field('text_colour');
$headingcolor = get_field('heading_colour');
$blockanchor = get_field('block_anchor');
$reverse = get_field('reverse_columns');
$narrow = get_field('narrow_row');
$colratio = get_field('column_ratio');
$removeBulletSpacing = get_field('remove_spacing_between_bullet_points');
$gutters = get_field('gutter_space');
$spacing = get_field('vertical_spacing');
$offsetlayout = get_field('offset_layout');
$featuredimg = get_field('background_image');

switch ( $bgcolor ) {
	case 'light':
		$shade = 'section lightGreyBg';
		break;
	case 'dark': 
		$shade = 'section darkGreyBg light';
		break;
	default:
		$shade = '';
}

switch ( $aligncolumns ) {
	case 'top':
		$position = 'top-lg top-md';
		break;
	case 'middle':
		$position = 'middle-lg middle-md';
		break;
	case 'bottom':
		$position = 'bottom-lg bottom-md';
		break;
	default:
		$position = '';
}

switch ( $headingalignment ) {
	case 'center':
		$align = 'class="text-align-center"';
		break;
	case 'right':
		$align = 'class="text-align-right"';
		break;
	default:
		$align = '';
}

switch ( $spacing ) {
	case 'top':
		$padding = 'topPadding';
		break;
	case 'bottom':
		$padding = 'bottomPadding';
		break;
	case 'both':
		$padding = 'topBottomPadding';
		break;
	default:
		$padding = '';
}

if ( $blockanchor && $offsetlayout ): ?>
<section id="<?php echo $blockanchor ?>" class="positionRelative section3 offsetLayout">
	<?php 
	if( have_rows('right_column') ):
		while( have_rows('right_column') ): the_row();
			$img = get_sub_field('image');
			if ( $reverse ) :
				if ( !empty( $img ) ): ?>
				<div class="innerContainerOffset topBottomPadding left" style="background-image: url(<?php echo esc_url( $img['url'] ); ?>);">
				<?php
				endif;
			else :
				if ( !empty( $img ) ): ?>
				<div class="innerContainerOffset topBottomPadding right" style="background-image: url(<?php echo esc_url( $img['url'] ); ?>);">
				<?php
				endif;
			endif;
		endwhile;
	endif;
	
elseif ( $offsetlayout ): ?>
<section class="positionRelative section3 offsetLayout">
	<?php 
	if( have_rows('right_column') ):
		while( have_rows('right_column') ): the_row();
			$img = get_sub_field('image');
			if ( $reverse ) :
				if ( !empty( $img ) ): ?>
				<div class="innerContainerOffset topBottomPadding left" style="background-image: url(<?php echo esc_url( $img['url'] ); ?>);">
				<?php
				endif;
			else :
				if ( !empty( $img ) ): ?>
				<div class="innerContainerOffset topBottomPadding right" style="background-image: url(<?php echo esc_url( $img['url'] ); ?>);">
				<?php
				endif;
			endif;
		endwhile;
	endif;

elseif ( $blockanchor ): ?>
<section id="<?php echo $blockanchor ?>" class="<?php echo $shade ?>">

<?php else : ?>
<section class="positionRelative <?php echo $shade ?>">

<?php endif;

	if ( $narrow ): ?>
	<div class="innerContainer w1080 <?php echo $padding ?>">
		<div class="container">
	<?php else : ?>
	<div class="innerContainer <?php echo $padding ?>">
		<div class="container">
	<?php endif;
			
			if ( $rowheading ) {
				echo '<h2 ' . $align . '>' . $rowheading . '</h2>';
			}
			
			if ( $gutters == 'none' ):
			
			if ( $reverse ): ?>
			<div class="row relativePositioning noGutters reverse <?php echo $position ?>">
			<?php else : ?>
			<div class="row relativePositioning noGutters <?php echo $position ?>">
			<?php endif;
			
			elseif ( $gutters == 'default' ):
			
			if ( $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWide reverse <?php echo $position ?>">
			<?php else : ?>
			<div class="row relativePositioning gutterSpaceWide <?php echo $position ?>">
			<?php endif;
			
			else :
			
			if ( $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWider reverse <?php echo $position ?>">
			<?php else : ?>
			<div class="row relativePositioning gutterSpaceWide <?php echo $position ?>">
			<?php endif;
			
			endif;
			
				if( have_rows('left_column') ):
		 		while( have_rows('left_column') ): the_row();
		 		$anchor = get_sub_field('anchor');
		 		$icon = get_sub_field('icon');
		 		$iconsize = 'thumbnail';
		 		$heading = get_sub_field('heading');
				$content = get_sub_field('content');
				$contenttype = get_sub_field('content_type');
		 		
		 		switch ( $colratio ) {
					case 'three-fifth-two-fifth':
						$colwidth = 'col-lg-7';
						break;
					case 'two-fifth-three-fifth':
						$colwidth = 'col-lg-5';
						break;
					case 'two-third-one-third':
						$colwidth = 'col-lg-8';
						break;
					case 'one-third-two-third':
						$colwidth = 'col-lg-4';
						break;
					case 'three-quarter-one-quarter':
						$colwidth = 'col-lg-10';
						break;
					case 'one-quarter-three-quarter':
						$colwidth = 'col-lg-2';
						break;
					default:
						$colwidth = 'col-lg-6';
				}
		 		
		 		if ( $offsetlayout ): ?>
				<div class="col-lg-6 bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col offsetContentContainer">
				<?php elseif ( $anchor ): ?>
				<div id="<?php echo $anchor ?>" class="col-lg-6 bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col offsetContentContainer">
				<?php else : ?>
				<div class="<?php echo $colwidth ?> col-md-6 col-sm-12 col-xs-12 col bottomMarginMobile offsetContentContainer">
				<?php endif;
				
					if ( $contenttype == 'carousel' ): ?>
					
					<div class="carousel who_we_are">
							
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
							
						if( $images ):
						foreach( $images as $image ): ?>
							
						<div>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
							
						<?php 
						endforeach;
						endif; ?>
						
					</div>
					
					<?php elseif ( $contenttype == 'grid' ): ?>
					
					<ul class="photoGrid">
							
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
							
						if( $images ):
						foreach( $images as $image ):
						$url = get_field('external_url', $image['id']);
						$shrink = get_field('shrink_image', $image['id']); ?>
							
						<li>
							<?php if ( $url && $shrink ) {
								echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
							} elseif ( $url ) {
								echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
							} else {
								echo wp_get_attachment_image( $image['ID'], $size );
							} ?>
						</li>
							
						<?php 
						endforeach;
						endif; ?>
					</ul>
					
					<?php elseif ( $contenttype == 'image' ):
					
					$img = get_sub_field('image');
					if( !empty( $img ) ): ?>
					<img data-aos="fade-right" class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
					<?php endif; ?>
					
					<?php else :
					
					if ( $icon ) {
						echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
					}
					
					if ( $heading ) {
						echo '<h3>' . $heading . '</h3>';
					}
					if ( $content ) {
						if ( $removeBulletSpacing ) {
							echo '<div class="bullet-points removeSpacing">' . $content . '</div>';
						} else {
							echo '<div class="bullet-points">' . $content . '</div>';
						}
					}
					if ( have_rows('call_to_action') ) {
						while ( have_rows('call_to_action') ) { 
							the_row();
							$link = get_sub_field('link');
							$label = get_sub_field('label');
							if ( $bgcolor == 'dark' && $link && $label ) {
								echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
							} elseif ( $bgcolor == 'dark' && $link ) {
								echo '<a href="' . $link . '" class="button light">Learn more</a>';
							} elseif ( $bgcolor == 'light' && $link && $label ) {
								echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
							} elseif ( $bgcolor == 'light' && $link ) {
								echo '<a href="' . $link . '" class="button dark">Learn more</a>';
							} elseif ( $link && $label ) {
								echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
							} elseif ( $link ) {
								echo '<a href="' . $link . '" class="button dark">Learn more</a>';
							}
						}
					} 
					
					endif; ?>
				</div>
				
				<?php endwhile;
				endif; ?>
				
				<?php if( have_rows('right_column') ):
		 		while( have_rows('right_column') ): the_row();
		 		$anchor = get_sub_field('anchor');
		 		$icon = get_sub_field('icon');
		 		$iconsize = 'thumbnail';
		 		$contenttype = get_sub_field('content_type');
		 		$heading = get_sub_field('heading_right_col');
		 		$contentrightcol = get_sub_field('content_right_col');
				
				switch ( $colratio ) {
					case 'three-fifth-two-fifth':
						$colwidth = 'col-lg-5';
						break;
					case 'two-fifth-three-fifth':
						$colwidth = 'col-lg-7';
						break;
					case 'two-third-one-third':
						$colwidth = 'col-lg-4';
						break;
					case 'one-third-two-third':
						$colwidth = 'col-lg-8';
						break;
					case 'three-quarter-one-quarter':
						$colwidth = 'col-lg-2';
						break;
					case 'one-quarter-three-quarter':
						$colwidth = 'col-lg-10';
						break;
					default:
						$colwidth = 'col-lg-6';
				}
				
				if ( $offsetlayout ): ?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col bottomMarginMobile offsetContentContainer">
				<?php elseif ( $anchor ): ?>
				<div id="<?php echo $anchor ?>" class="col-lg-6 bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col offsetContentContainer">
				<?php else : ?>
				<div class="<?php echo $colwidth ?> col-md-6 col-sm-12 col-xs-12 col bottomMarginMobile offsetContentContainer">
				<?php endif;
				
					if ( $contenttype == 'carousel' ): ?>
					
					<div class="carousel who_we_are">
							
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
							
						if( $images ):
						foreach( $images as $image ): ?>
							
						<div>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</div>
							
						<?php 
						endforeach;
						endif; ?>
						
					</div>
					
					<?php elseif ( $contenttype == 'grid' ): ?>
					
					<ul class="photoGrid">
							
						<?php
						$images = get_sub_field('photo_gallery');
						$size = 'large';
							
						if( $images ):
						foreach( $images as $image ):
						$url = get_field('external_url', $image['id']);
						$shrink = get_field('shrink_image', $image['id']); ?>
							
						<li>
							<?php if ( $url && $shrink ) {
								echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
							} elseif ( $url ) {
								echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
							} else {
								echo wp_get_attachment_image( $image['ID'], $size );
							} ?>
						</li>
							
						<?php 
						endforeach;
						endif; ?>
					</ul>
					
					<?php elseif ( $contenttype == 'image' ):
					
					$img = get_sub_field('image');
					if( !empty( $img ) ): ?>
					<img class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
					<?php endif; ?>
					
					<?php elseif ( $contenttype == 'content' ):
					
					if ( $icon ) {
						echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
					}
					
					if ( $heading ) {
						echo '<h3>' . $heading . '</h3>';
					}
					if ( $contentrightcol ) {
						if ( $removeBulletSpacing ) {
							echo '<div class="bullet-points removeSpacing">' . $contentrightcol . '</div>';
						} else {
							echo '<div class="bullet-points">' . $contentrightcol . '</div>';
						}
					}
					if ( have_rows('call_to_action') ) {
						while ( have_rows('call_to_action') ) { 
							the_row();
							$link = get_sub_field('link');
							$label = get_sub_field('label');
							if ( $bgcolor == 'dark' && $link && $label ) {
								echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
							} elseif ( $bgcolor == 'dark' && $link ) {
								echo '<a href="' . $link . '" class="button light">Learn more</a>';
							} elseif ( $bgcolor == 'light' && $link && $label ) {
								echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
							} elseif ( $bgcolor == 'light' && $link ) {
								echo '<a href="' . $link . '" class="button dark">Learn more</a>';
							} elseif ( $link && $label ) {
								echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
							} elseif ( $link ) {
								echo '<a href="' . $link . '" class="button dark">Learn more</a>';
							}
						}
					} 
					
					endif; ?>
				</div>
				
				<?php endwhile;
				endif; ?>
				
			</div>
		</div>
	</div>
</section>