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

if ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightGreyBg">

<?php elseif ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light">

<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>">

<?php elseif ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightGreyBg">

<?php elseif ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkGreyBg light">

<?php elseif ( $bgcolor == 'light' ): ?>
<div class="section lightGreyBg">

<?php elseif ( $bgcolor == 'dark' ): ?>
<div class="section darkGreyBg light">

<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>">

<?php else : ?>
<div class="section">

<?php endif;

 	if ( $narrow && $spacing === 'top' ): ?>
	<div class="innerContainer topPadding w1080">
	<?php elseif ( $narrow && $spacing === 'bottom' ): ?>
	<div class="innerContainer bottomPadding w1080">
	<?php elseif ( $narrow && $spacing === 'both' ): ?>
	<div class="innerContainer topBottomPadding w1080">
	<?php elseif ( $spacing === 'top' ): ?>
	<div class="innerContainer topPadding">
	<?php elseif ( $spacing === 'bottom' ): ?>
	<div class="innerContainer bottomPadding">
	<?php elseif ( $spacing === 'both' ): ?>
	<div class="innerContainer topBottomPadding">
	<?php elseif ( $narrow ): ?>
	<div class="innerContainer w1080">
		<div class="container">
	<?php else : ?>
	<div class="innerContainer">
		<div class="container">
	<?php endif; ?>
		
			<?php 
			if ( $rowheading && $headingalignment == 'center' ) {
				echo '<h2 class="text-align-center">' . $rowheading . '</h2>';
			} elseif ( $rowheading && $headingalignment == 'right' ) {
				echo '<h2 class="text-align-right">' . $rowheading . '</h2>';
			} elseif ( $rowheading ) {
				echo '<h2>' . $rowheading . '</h2>';
			}
			
			if ( $gutters == 'none' ): ?>
				
			<?php if ( $aligncolumns == 'top' && $reverse ): ?>
			<div class="row relativePositioning noGutters top-lg top-md reverse">
			<?php elseif ( $aligncolumns == 'middle' && $reverse ): ?>
			<div class="row relativePositioning noGutters middle-lg middle-md reverse">
			<?php elseif ( $aligncolumns == 'bottom' && $reverse ): ?>
			<div class="row relativePositioning noGutters bottom-lg bottom-md reverse">
			<?php elseif ( $aligncolumns == 'top' && $reverse ): ?>
			<div class="row relativePositioning noGutters top-lg top-md reverse">
			<?php elseif ( $aligncolumns == 'top' ): ?>
			<div class="row relativePositioning noGutters top-lg top-md">
			<?php elseif ( $aligncolumns == 'middle' ): ?>
			<div class="row relativePositioning noGutters middle-lg middle-md">
			<?php elseif ( $aligncolumns == 'bottom' ): ?>
			<div class="row relativePositioning noGutters bottom-lg bottom-md">
			<?php elseif ( $reverse ): ?>
			<div class="row relativePositioning noGutters reverse">
			<?php else : ?>
			<div class="row relativePositioning noGutters">
			<?php endif; ?>
			
			<?php elseif ( $gutters == 'default' ): ?>
			
			<?php if ( $aligncolumns == 'top' && $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWide top-lg top-md reverse">
			<?php elseif ( $aligncolumns == 'middle' && $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWide middle-lg middle-md reverse">
			<?php elseif ( $aligncolumns == 'bottom' && $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWide bottom-lg bottom-md reverse">
			<?php elseif ( $aligncolumns == 'top' && $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWide top-lg top-md reverse">
			<?php elseif ( $aligncolumns == 'top' ): ?>
			<div class="row relativePositioning gutterSpaceWide top-lg top-md">
			<?php elseif ( $aligncolumns == 'middle' ): ?>
			<div class="row relativePositioning gutterSpaceWide middle-lg middle-md">
			<?php elseif ( $aligncolumns == 'bottom' ): ?>
			<div class="row relativePositioning gutterSpaceWide bottom-lg bottom-md">
			<?php elseif ( $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWide reverse">
			<?php else : ?>
			<div class="row relativePositioning gutterSpaceWide">
			<?php endif; ?>
			
			<?php else : ?>
			
			<?php if ( $aligncolumns == 'top' && $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWider top-lg top-md reverse">
			<?php elseif ( $aligncolumns == 'middle' && $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWider middle-lg middle-md reverse">
			<?php elseif ( $aligncolumns == 'bottom' && $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWider bottom-lg bottom-md reverse">
			<?php elseif ( $aligncolumns == 'top' && $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWider top-lg top-md reverse">
			<?php elseif ( $aligncolumns == 'top' ): ?>
			<div class="row relativePositioning gutterSpaceWider top-lg top-md">
			<?php elseif ( $aligncolumns == 'middle' ): ?>
			<div class="row relativePositioning gutterSpaceWider middle-lg middle-md">
			<?php elseif ( $aligncolumns == 'bottom' ): ?>
			<div class="row relativePositioning gutterSpaceWider bottom-lg bottom-md">
			<?php elseif ( $reverse ): ?>
			<div class="row relativePositioning gutterSpaceWider reverse">
			<?php else : ?>
			<div class="row relativePositioning gutterSpaceWider">
			<?php endif; ?>
			
			<?php endif; ?>
				
				<?php if( have_rows('left_column') ):
		 		while( have_rows('left_column') ): the_row();
		 		$heading = get_sub_field('heading');
				$content = get_sub_field('content');
				$contenttype = get_sub_field('content_type');
		 		
		 		if ( $colratio == 'three-fifth-two-fifth' ): ?>
				<div class="col-lg-7 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'two-fifth-three-fifth' ): ?>
				<div class="col-lg-5 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'two-third-one-third' ): ?>
				<div class="col-lg-8 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'one-third-two-third' ): ?>
				<div class="col-lg-4 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'three-quarter-one-quarter' ): ?>
				<div class="col-lg-10 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'one-quarter-three-quarter' ): ?>
				<div class="col-lg-2 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php else : ?>
				<div class="col-lg-6 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
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
		 		$contenttype = get_sub_field('content_type');
		 		$heading = get_sub_field('heading_right_col');
		 		$contentrightcol = get_sub_field('content_right_col');
				
				if ( $colratio == 'three-fifth-two-fifth' ): ?>
				<div class="col-lg-5 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'two-fifth-three-fifth' ): ?>
				<div class="col-lg-7 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'two-third-one-third' ): ?>
				<div class="col-lg-4 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'one-third-two-third' ): ?>
				<div class="col-lg-8 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'three-quarter-one-quarter' ): ?>
				<div class="col-lg-2 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php elseif ( $colratio == 'one-quarter-three-quarter' ): ?>
				<div class="col-lg-10 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
				<?php else : ?>
				<div class="col-lg-6 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
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
</div>