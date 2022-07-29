<?php 
$author = get_field('author');
$quote = get_field('quote');
$title = get_field('company__title');
$spacing = get_field('vertical_spacing');
$featuredimg = get_field('image');
$logo = get_field('logo');
$size = 'medium';

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
	<div class="innerContainer w1080">
		<div class="testimonialContainer single-testimonial">
			<?php if ( $featuredimg || $logo ) : ?>
			<div class="row">
				<div class="col col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<div class="testimonialContainerInner">
						<?php
						echo '<span class="quoteContent">' . $quote . '</span>';
							
						if ( $author && $title ) {
							echo '<p class="testimonialAuthor">' . $author . ', ' . $title . '</p>';
						} elseif ( $author ) {
							echo '<p class="testimonialAuthor">' . $author . '</p>';
						}
						?>
					</div>
				</div>
				<div class="col col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<?php if ( $featuredimg ) {
						echo $featuredimg;
					} elseif ( $logo ) {
						echo '
						<div class="testimonialLogoContainer has_logo">' . 
							wp_get_attachment_image( $logo, $size ); '
						</div>';
					} ?>
				</div>
			</div>
			<?php else : ?>
			<div class="testimonialContainerInner">
				<?php
				echo '<span class="quoteContent">' . $quote . '</span>';
							
				if ( $author && $title ) {
					echo '<p class="testimonialAuthor">' . $author . ', ' . $title . '</p>';
				} elseif ( $author ) {
					echo '<p class="testimonialAuthor">' . $author . '</p>';
				}
				?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</section>