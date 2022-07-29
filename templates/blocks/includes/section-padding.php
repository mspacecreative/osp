<?php
$sectionpadding = get_field('section_padding');
switch ($sectionpadding) {
    case 'top':
        $sectionpadding = ' no-top-padding';
        break;
    case 'bottom':
        $sectionpadding = ' no-bottom-padding';
        break;
    case 'both':
        $sectionpadding = ' no-top-bottom-padding';
        break;
    default:
        $sectionpadding = '';
        break;
}