<?php
$sidebar = get_field('sidebar');

switch ( $sidebar ) {
	case 'eventbrite-events':
		$sidebar = 'eventbrite-events';
		break;
	case 'eventbrite-all-events':
		$sidebar = 'eventbrite-all-events';
		break;
	case 'blog':
		$sidebar = 'news-posts';
		break;
	default:
		$sidebar = 'eventbrite-events';
}
include 'includes/section-padding.php';
include 'includes/section-width.php'; ?>

<section class="section<?php echo $sectionpadding ?>">
	<div class="innerContainer">
		<div class="container<?php echo $sectionwidth ?>">
			<?php 
			$intro = get_field('intro_content');
			$outro = get_field('outro_content');
			$showintro = get_field('add_content_before_feed');
			$showoutro = get_field('add_content_after_feed');
			
			if ( $intro && $showintro ) {
				echo $intro;
			}
			
			if(!function_exists('dynamic_sidebar') || !dynamic_sidebar( $sidebar ));
			
			if ( $outro && $showoutro ) {
				echo $outro;
			}
			
			include 'includes/cta-button-single.php'; ?>
		</div>
	</div>
</section>