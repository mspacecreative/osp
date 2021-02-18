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
}

$cols = get_field('column_count');

switch ( $cols ) {
	case 'two' :
		$flex = 'class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 two_col"';
		$fullcoltop = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		$fullcolbottom = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		break;
				
	case 'three' :
		$flex = 'class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 three_col"';
		$fullcoltop = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		break;
				
	case 'four' :
		$flex = 'class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 four_col"';
		$fullcoltop = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		break;
				
	default :
		$flex = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		$fullcoltop = 'class="col col-lg-9 col-md-9 col-sm-8 col-xs-12"';
		$fullcolbottom = 'class="col col-lg-3 col-md-3 col-sm-4 col-xs-12"';
} ?>

<section <?php echo $paddingClass ?>>
	
	<?php 
	$featured_posts = get_field('post_type');
	if( $featured_posts ): ?>
	
	<div class="innerContainer w1080">
	
		<div class="row gutter_space_wide">
	
			<?php foreach( $featured_posts as $post ):
			
			setup_postdata($post);
			$author = get_the_title($post->ID);
			$quote = get_the_content();
			$title = get_field('position__title', $post->ID);
			$company = get_field('company', $post->ID);
			$featuredimg = get_field('image', $post->ID);
			$logo = get_field('logo', $post->ID);
			$size = 'medium'; ?>
			
			<div <?php echo $flex ?>>
			
				<div class="container testimonialContainer">
						
					<div class="row middle-lg middle-md middle-sm">				
							
						<div <?php echo $fullcoltop ?>>
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
							
						<div <?php echo $fullcolbottom ?>>
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
			
		<?php endforeach; ?>
		
		</div>
	
	</div>
	
	<?php wp_reset_postdata(); 
	endif; ?>
	
</section>