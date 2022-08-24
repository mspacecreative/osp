<?php
$bgimg = get_field('background_image') ? get_field('background_image') : '';
$bgcolor = get_field('background_color');
$bgimgoverlay = get_field('background_image_overlay');

switch ($bgimgoverlay) {
	case 'light':
		$bgimgoverlay = ' light-overlay';
		break;
	case 'dark':
		$bgimgoverlay = ' dark-overlay';
		break;
	default:
		$bgimgoverlay = '';
		break;
}
switch ($bgcolor) {
	case 'light':
		$bgcolor = ' lightGreyBg';
		break;
	case 'dark':
		$bgcolor = ' darkbg light';
		break;
	default:
		$bgcolor = '';
		break;
}

include 'includes/section-id.php';
include 'includes/section-classname.php';
include 'includes/section-width.php';
include 'includes/horizontal-alignment.php';
include 'includes/section-padding.php'; ?>

<section<?php if ($id): echo ' id="' . $id . '"'; endif; ?> class="content-section section<?php echo $bgimg, $sectionpadding, $bgcolor, esc_attr($className); ?>"<?php if ($bgimg): echo ' style="background-image: url(' . $bgimg . ');"'; endif; ?>>
	<div class="innerContainer">
		<div class="container<?php echo $sectionwidth, $horizontalalignment; ?>">
			<?php include 'includes/section-content-loop.php'; ?>
		</div>
	</div>
</section>