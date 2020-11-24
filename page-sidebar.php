<?php
/* Template Name: Sidebar */
get_header();

$titlewidth = get_field('title_row_width');

switch ( $titlewidth ) {
	case '1080':
		$width = 'w1080';
		break;
	
	case '850':
		$width = 'w850';
		break;
	
	default:
		$width = '';
}

if ( have_posts() ) {
 	while ( have_posts() ) { 
	 	the_post();
	 	
	 	$title = get_the_title();
	 	echo '
	 	<div class="contentWrap">
	 	
	 		<div class="innerContainer section4 ' . $width . '">
	 		
	 			<h1 class="postTitle">' . $title . '</h1>
			
			</div>
			
			<div class="row">
				<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">' . 
					the_content() . '
				</div>
				<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">' .
					get_sidebar('sidebar-page') . '
				</div>
			</div>
		</div>';
	}
}

get_footer(); ?>
