<?php
$sectionbgcolor = get_field('background_colour');
switch ($sectionbgcolor) {
    case 'light':
        $sectionbgcolor = ' lightbg';
        break;
    case 'dark':
        $sectionbgcolor = ' darkbg light';
        break;
    default:
        $sectionbgcolor = '';
        break;
}