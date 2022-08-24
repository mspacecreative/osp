<?php 
include 'section-padding.php';
include 'section-width.php';
$content = get_field('content_editor');
$txtalign = get_field('text_alignment');

switch ( $txtalign ) {
	case 'left':
		$txtalign = '';
		break;
	case 'center':
		$txtalign = ' text-align-center';
		break;
	case 'right':
		$txtalign = ' text-align-right';
		break;
	default:
		$txtalign = '';
} ?>

<section class="section<?php echo $sectionpadding ?>">
	<div class="innerContainer">
		<div class="container<?php echo $txtalign, $sectionwidth ?>">
			<?php 
			echo $content;
			include 'cta-button-single.php'; 
			?>
		</div>
	</div>
</section>