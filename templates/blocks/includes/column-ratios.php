<?php
$columns = get_field('columns');
switch ($columns) {
	case 'one':
		$columns = ' col col-lg-12 col-md-12 ';
		break;
	case 'two':
		$columns = ' col col-lg-6 col-md-6 ';
		break;
	case 'three':
		$columns = ' col col-lg-4 col-md-4 ';
		break;
	case 'four':
		$columns = ' col col-lg-3 col-md-3 ';
		break;
	default:
		$columns = ' col col-lg-12 col-md-12 ';
		break;
}