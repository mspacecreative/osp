<?php 
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
} 

echo $content;
include 'cta-button-single.php';