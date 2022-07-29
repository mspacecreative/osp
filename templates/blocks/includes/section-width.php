<?php
$sectionwidth = get_field('section_width');
switch ($sectionwidth) {
	case '1280':
		$sectionwidth = '';
		break;
	case '1080':
		$sectionwidth = ' w1080';
		break;
	case '800':
		$sectionwidth = ' w800';
		break;
	default:
		$sectionwidth = '';
		break;
}