<?php
// CUSTOM ID
$id = '';
if ( !empty($block['anchor']) ) {
	$id = $block['anchor'];
    echo ' id="' . $id . '"';
}