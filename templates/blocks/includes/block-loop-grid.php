<?php
include 'section-padding.php';
include 'section-id.php';
include 'section-classname.php';

$cols = get_field('column_count');
$reversecol = get_field('reverse_columns') ? ' reverse-odd-rows' : '';

switch ( $cols ) {
	case 'one' :
		$flex = ' class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 two_col"';
		$fullcoltop = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		$fullcolbottom = 'class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit"';
		break;

	case 'two' :
		$flex = ' class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 two_col"';
		$fullcoltopwithlogo = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 quote_content"';
		$fullcolbottomwithlogo = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit has-logo"';
		$fullcoltop = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		$fullcolbottom = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit"';
		break;
				
	case 'three' :
		$flex = ' class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 three_col"';
		$fullcoltopwithlogo = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 quote_content"';
		$fullcolbottomwithlogo = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit has-logo"';
		$fullcoltop = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		$fullcolbottom = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit"';
		break;
				
	case 'four' :
		$flex = ' class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 four_col"';
		$fullcoltop = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12"';
		$fullcolbottom = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit"';
		break;
				
	default :
		$flex = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 one_col"';
		$fullcoltopwithlogo = ' class="col col-lg-8 col-md-8 col-sm-12 col-xs-12 quote_content"';
		$fullcolbottomwithlogo = ' class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 object_fit no_padding_left has-logo"';
		$fullcoltop = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 quote_content"';
		$fullcolbottom = ' class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 object_fit no_padding_left"';
} ?>

<section<?php if ($id): echo ' id="' . $id . '"'; endif; ?> class="section<?php echo $sectionpadding, esc_attr($className); ?>">
	
	<div class="innerContainer<?php echo $sectionwidth; ?>">
	
	<?php include 'row-heading.php'; ?>
	
		<div class="row gutter_space_wide archive_grid">
	
			<?php 
			$featured_posts = get_field('post_type');
			if( $featured_posts ):
			foreach( $featured_posts as $post ):
			
			setup_postdata($post);
			$author = get_the_title($post->ID);
			$quote = get_the_content();
			$title = get_field('position__title', $post->ID);
			//$company = get_field('company', $post->ID);
      		$external_link = get_field('external_link', $post->ID);
      		$company = $external_link ? '<a href="' . $external_link . '" target="_blank">' . get_field('company', $post->ID) . '</a>' : get_field('company', $post->ID);
			$featuredimg = get_field('image', $post->ID);
			$logo = get_field('logo', $post->ID);
			$size = 'medium'; ?>
			
			<div<?php echo $flex ?>>
			
				<div class="testimonialContainer<?php if ( !empty($featuredimg) || !empty($logo) ): echo ' has_logo'; endif; echo $reversecol; ?>">
						
					<?php if ( !empty($featuredimg) || !empty($logo) ): ?>
					<div class="row gutter_space_wide">
					<?php else: ?>
					<div class="row gutter_space_wide no_image_logo">	
					<?php endif; ?>
							
						<?php if ( !empty($featuredimg) || !empty($logo) ): ?>
						<div<?php echo $fullcoltopwithlogo; ?>>
						<?php else : ?>
						<div<?php echo $fullcoltop ?>>
						<?php endif; ?>

							<div class="testimonialContainerInner">
								<?php
								echo '<div class="quoteContent">' . $quote . '</div>';
								include 'testimonial-author.php';
								?>
							</div>

						</div>
							
						<?php 
						if ( !empty( $featuredimg ) || !empty( $logo ) ): ?>
						<div<?php echo $fullcolbottomwithlogo; ?>>
						<?php endif; ?>

							<?php 
							if ( $featuredimg ):
							echo wp_get_attachment_image( $featuredimg, $size );
							elseif ( $logo ): ?>
							<div class="testimonialLogoContainer">
								<?php echo wp_get_attachment_image( $logo, $size ); ?>
							</div>
							<?php endif;
						
						if ( !empty( $featuredimg ) || !empty( $logo ) ): ?>
						</div>
						<?php endif; ?>
							
					</div>
					
				</div>
				
			</div>
			
			<?php endforeach; 
			endif; wp_reset_postdata(); ?>
		
		</div>
	
	</div>
	
</section>