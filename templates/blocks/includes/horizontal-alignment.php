<?php
$horizontalalignment = get_field('horizontal_alignment');
switch ($horizontalalignment) {
    case 'left':
        $horizontalalignment = ' horizontal-align-left';
        break;
    case 'center':
        $horizontalalignment = '';
        break;
    case 'right':
        $horizontalalignment = ' horizontal-align-right';
        break;
    default:
        $horizontalalignment = ' horizontal-align-left';
        break;
}