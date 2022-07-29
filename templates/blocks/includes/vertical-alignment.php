<?php
$verticalalignment = get_field('vertical_alignment');
switch ($verticalalignment) {
    case 'top':
        $verticalalignment = '';
        break;
    case 'middle':
        $verticalalignment = ' middle-lg middle-md';
        break;
    case 'bottom':
        $verticalalignment = ' bottom-lg bottom-md';
        break;
    default:
        $verticalalignment = '';
        break;
}