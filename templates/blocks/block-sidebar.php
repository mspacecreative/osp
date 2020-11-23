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
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar( $result )) ?>
	</div>
</section>