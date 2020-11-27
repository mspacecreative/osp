<?php
get_header();

$titlewidth = get_field('title_row_width');

if ( have_posts() ) {
 	while ( have_posts() ) { 
	 	the_post();
	 	if ( $titlewidth === 'narrow' ) {
		 		
		 	}
	 	$title = get_the_title();
	 	echo '
	 	<div class="contentWrap">';
	 		if ( $titlewidth === '1080' ) {
	 		echo '
	 		<section>
	 			<div class="innerContainer w1080 section4">';
	 		} elseif ( $titlewidth === '850' ) {
	 		echo '
	 			<div class="innerContainer w850 section4">';
	 		} else {
		 	echo '
	 			<div class="innerContainer section4">';
		 	}
			echo '<h1 class="postTitle">' . $title . '</h1>
				</div>
			</section>';
			echo the_content(); 
		echo '
		</div>';
	}
}

get_footer();
?>
