<?php
$sidebar = get_field('sidebar');

switch ( $sidebar ) {
	case 'eventbrite-events':
		$result = 'eventbrite-events';
		break;
	case 'eventbrite-all-events':
		$result = 'eventbrite-all-events';
		break;
	case 'blog':
		$result = 'sidebar-blog';
		break;
	default:
		$result = 'eventbrite-events';
} ?>
<section>
	<div class="innerContainer">
		<?php 
		$intro = get_field('intro_content');
		$outro = get_field('outro_content');
		$showintro = get_field('add_content_before_feed');
		$showoutro = get_field('add_content_after_feed');
		
		if ( $intro && $showintro ) {
			echo $intro;
		}
		
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar( $result ));
		
		if ( $outro && $showoutro ) {
			echo $outro;
		} ?>
	</div>
</section>