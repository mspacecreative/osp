<?php
$sectiongutters = get_field('section_gutters');
switch ($sectiongutters) {
    case 'default':
        $sectiongutters = ' gutterSpaceWide';
        break;
    case 'narrow':
        $sectiongutters = ' gutterSpaceNarrow';
        break;
    case 'wide':
        $sectiongutters = ' gutterSpaceWider';
        break;
    case 'none':
        $sectiongutters = ' gutterSpaceNone';
        break;
    default:
        $sectiongutters = ' gutterSpaceWide';
        break;
}