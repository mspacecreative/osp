<?php
if ( have_rows('cta_link') ):
	while ( have_rows('cta_link') ): the_row();
	$linklabel = get_sub_field('label') ? get_sub_field('label') : 'Learn more';
	//$exturl = get_sub_field('url');
	//$pagelink = get_sub_field('page');
	//$pdf = get_sub_field('pdf');
	$linktype = get_sub_field('link_type');
	$btnstyle = get_sub_field('button_style');
	switch ($btnstyle) {
		case 'dark':
			$btnstyle = ' dark';
			break;
		case 'ghost':
			$btnstyle = ' light';
			break;
		case 'blue':
			$btnstyle = ' blue';
			break;
		default:
			$btnstyle = ' blue';
			break;
	}
	switch ($linktype) {
		case 'internal':
			$linktype = get_sub_field('page_link');
			break;
		case 'external':
			$linktype = get_sub_field('external_url');
			break;
		case 'pdf':
			$linktype = get_sub_field('pdf_download');
			break;
		default:
			$linktype = get_sub_field('page_link');
	}

	if ( get_sub_field('page_link') || get_sub_field('external_url') || get_sub_field('page_link') ) {
		echo '<a class="btn'; echo $btnstyle . '"'; if ($linktype == 'pdf'): echo ' pdf_dl'; endif; echo 'href="' . $linktype . '"'; if ($linktype == 'external' || $linktype == 'pdf'): echo ' target="_blank"'; endif; echo '>' . $linklabel . '</a>';
	}
		
	endwhile;
endif;