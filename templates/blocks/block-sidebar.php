<?php
$sidebar = get_field('sidebar');
$spacing = get_field('vertical_spacing');

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
}
switch ( $spacing ) {
	case 'top':
		$padding = 'topPadding';
		break;
	case 'bottom':
		$padding = 'bottomPadding';
		break;
	case 'both':
		$padding = 'topBottomPadding';
		break;
	default:
		$padding = '';
} ?>
<section>
	<?php if ( $padding ): ?>
	<div class="innerContainer <?php echo $padding ?>">
	<?php else : ?>
	<div class="innerContainer">
	<?php endif; ?>
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