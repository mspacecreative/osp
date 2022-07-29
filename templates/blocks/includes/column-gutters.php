<?php
$gutters = get_field('gutter_space');
switch ($gutters) {
    case 'wide':
        $gutters = ' gutterSpaceWider';
        break;
    case 'none':
        $gutters = '';
        break;
    default:
        $gutters = ' gutterSpaceWide';
        break;
}