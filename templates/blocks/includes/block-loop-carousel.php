<?php
$spacing = get_field('vertical_spacing');
		
switch ( $spacing ) {
	case 'top' :
		$paddingClass = 'class="topPadding"';
		break;
				
	case 'bottom' :
		$paddingClass = 'class="bottomPadding"';
		break;
				
	case 'both' :
		$paddingClass = 'class="section"';
		break;
				
	default :
		$paddingClass = '';
} ?>

<section <?php echo $paddingClass ?>>
	
	<?php 
	$featured_posts = get_field('post_type');
	if( $featured_posts ): ?>
	
	<div class="innerContainer w1080">
	
		<?php 
		$rowheading = get_field('row_heading');
		$rowheadingalignment = get_field('row_heading_alignment');
			
		if ( $rowheading && $rowheadingalignment ) {
			echo '<h1 class="text-align-center">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1>' . $rowheading . '</h1>';
		} ?>
	
		<div class="carousel archive">
	
			<?php foreach( $featured_posts as $post ):
		
			setup_postdata($post);
			$author = get_the_title($post->ID);
			$quote = get_the_content();
			$title = get_field('position__title', $post->ID);
			$company = get_field('company', $post->ID);
			$featuredimg = get_field('image', $post->ID);
			$logo = get_field('logo', $post->ID);
			$size = 'medium'; ?>
			
			<div>
			
				<div class="container testimonialContainer">
						
					<div class="row">				
							
						<div class="col col-lg-8 col-md-8 col-sm-8 col-xs-12 quote_content">
							<div class="testimonialContainerInner">
								<?php
								echo '<div class="quoteContent">' . $quote . '</div>';
										
								if ( $author && $title && $company ) {
									echo '<p class="testimonialAuthor">' . $author . ', ' . $title . ', ' . $company . '</p>';
								} elseif ( $author && $title ) {
									echo '<p class="testimonialAuthor">' . $author . ', ' . $title . '</p>';
								} elseif ( $author && $company ) {
									echo '<p class="testimonialAuthor">' . $author . ', ' . $company . '</p>';
								} elseif ( $author ) {
									echo '<p class="testimonialAuthor">' . $author . '</p>';
								}
								?>
							</div>
						</div>
							
						<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12 object_fit no_padding_left">
							<?php 
							if ( $featuredimg ) {
								echo wp_get_attachment_image( $featuredimg, $size ); 
							} elseif ( $logo ) {
								echo '
								<div class="testimonialLogoContainer">' . 
									wp_get_attachment_image( $logo, $size ); '
								</div>';
							} ?>
						</div>
							
					</div>
					
				</div>
			
			</div>
				
			<?php endforeach; wp_reset_postdata(); ?>
			
		</div>
		
	</div>
	
	<?php 
	endif; ?>
	
</section>
	