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
		$fullcolbottom = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit"';
		break;
				
	case 'three' :
		$flex = 'class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 three_col"';
		$fullcoltop = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		$fullcolbottom = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit"';
		break;
				
	case 'four' :
		$flex = 'class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 four_col"';
		$fullcoltop = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		$fullcolbottom = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit"';
		break;
				
	default :
		$flex = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 one_col"';
		$fullcoltop = 'class="col col-lg-9 col-md-9 col-sm-8 col-xs-12 quote_content"';
		$fullcolbottom = 'class="col col-lg-3 col-md-3 col-sm-4 col-xs-12 object_fit no_padding_left"';
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
			echo '<h1 class="text-align-center" style="margin-bottom: 1.5em;">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1 style="margin-bottom: 1.5em;">' . $rowheading . '</h1>';
		} ?>
	
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
						
					<div class="row">				
							
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
	
	<?php 
	endif;
	wp_reset_postdata(); ?>
	
</section>