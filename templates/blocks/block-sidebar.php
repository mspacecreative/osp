<?php
$sidebar = get_field('sidebar');

switch ( $sidebar ) {
	case 'eventbrite':
		$result = 'eventbrite-events';
		break;
	default:
		$result = 'eventbrite-events';
} ?>
<section>
	<div class="innerContainer">
		<?php 
		$intro = get_field('intro_content');
		$outro = get_field('outro_content');
		
		if ( $intro ) {
			echo $intro;
		}
		
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar( $result ))
		
		if ( $outro ) {
			echo $outro;
		} ?>
	</div>
</section>