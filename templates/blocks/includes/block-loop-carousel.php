<?php
$spacing = get_field('vertical_spacing');
$blockanchor = get_field('block_anchor');
		
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

if ( $blockanchor ): ?>
<section id="<?php echo $blockanchor ?>" <?php echo $paddingClass ?>>
<?php else: ?>
<section <?php echo $paddingClass ?>>
<?php endif; ?>
	
	<div class="innerContainer<?php echo $sectionwidth; ?>">

		<div class="container">
	
			<?php include 'row-heading.php'; ?>
		
			<div class="carousel archive">
				
				<?php 
				$featured_posts = get_field('post_type');
				if( $featured_posts ): ?>
		
				<?php foreach( $featured_posts as $post ):
			
				setup_postdata($post);
				$author = get_the_title($post->ID) ? esc_html(get_the_title($post->ID)) : '';
				$quote = get_the_content();
				$title = get_field('position__title', $post->ID);
				$company = get_field('company', $post->ID);
				$featuredimg = get_field('image', $post->ID);
				$logo = get_field('logo', $post->ID);
				$size = 'medium'; ?>
				
				<div>
				
					<div class="testimonialContainer<?php if ($bgimg): echo ' has_bg_img'; endif; ?>">
							
						<div class="row">				
								
							<?php 
							if ( !empty( $featuredimg ) || !empty( $logo ) ): ?>
							<div class="col col-lg-8 col-md-8 col-sm-8 col-xs-12 quote_content">
							<?php else: ?>
							<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php endif; ?>
							
								<div class="testimonialContainerInner<?php echo $textcolor; if ($bgimg): echo ' has_bg_img'; endif; ?>"<?php echo $bgimg; ?>>
									<?php
									echo '<div class="quoteContent">' . $quote . '</div>';
									include 'testimonial-author.php';
									?>
								</div>
								
							</div>
							
							<?php 
							if ( !empty( $featuredimg ) || !empty( $logo ) ): ?>
							<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-12 object_fit no_padding_left">
								<?php 
								if ( $featuredimg ):
								echo wp_get_attachment_image( $featuredimg, $size );
								elseif ( $logo ): ?>
								<div class="testimonialLogoContainer">
									<?php echo wp_get_attachment_image( $logo, $size ); ?>
								</div>
								<?php endif; ?>
							</div> 
							<?php 
							endif; ?>
								
						</div>
						
					</div>
				
				</div>
				
				<?php endforeach;
				
				endif;
				wp_reset_postdata(); ?>
				
			</div>

		</div>
		
	</div>
	
</section>
	