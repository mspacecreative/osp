<?php
$bgimg = get_field('background_image') ? get_field('background_image') : '';
$bgcolor = get_field('background_colour');
$bgimgoverlay = get_field('background_image_overlay');
$textcolor = get_field('text_colour');
$overlayopacity = get_field('overlay_opacity') ? get_field('overlay_opacity') : '.75'; 

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

<section<?php if ($id): echo ' id="' . $id . '"'; endif; ?> class="content-section section<?php if ($bgimg): echo ' has_bg_img'; endif; echo $sectionpadding, $bgcolor, esc_attr($className); ?>"<?php if ($bgimg): echo ' style="background-image: url(' . $bgimg . ');"'; endif; ?>>
	
	<?php if ($bgimg): ?>	
	<div class="section_has_bg_img_overlay" style="background-color: rgba(<?php if ( $textcolor == 'dark' ): echo '255,255,255,'; elseif ( $textcolor == 'light'): echo '0,0,25,'; endif; echo $overlayopacity; ?>);"></div>
	<?php endif; ?>

	<div class="innerContainer<?php if ($textcolor == 'light'): echo ' light'; endif; ?>">
		<div class="container<?php echo $sectionwidth, $horizontalalignment; ?>">
			<?php include 'includes/section-content-loop.php'; ?>
		</div>
	</div>
</section>