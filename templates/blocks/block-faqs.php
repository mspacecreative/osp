<?php
$heading = get_field('heading');
$narrow = get_field('narrow_content_column');
$bgimg = get_field('background_image') ? get_field('background_image') : get_template_directory_uri() . '/assets/img/placeholders/ocean-bg.jpg';

include 'includes/section-width.php';
include 'includes/horizontal-alignment.php';

echo '
<section id="faqs" class="faqs section light" style="background-image: url(' . $bgimg . ');">';
	echo '
	<div class="innerContainer">';

		echo '<div class="container' . $sectionwidth, $horizontalalignment . '">';
	
		if ( $heading ) {
			echo '<h2>' . $heading . '</h2>';
		}
			
		if ( have_rows('faqs') ) {
			echo '
			<div class="topMargin50">';
			while ( have_rows('faqs') ) {
				the_row();
				$question = get_sub_field('question');
				$answer = get_sub_field('answer');
					
				if ( $narrow ) {
					echo '
				<div class="tabRow narrow_flushLeft"><a href="#">' . $question . '</a>
					<div class="tabAnswer">' .
						$answer .
					'</div>
				</div>';
				} else {
					echo '
				<div class="tabRow"><a href="#">' . $question . '</a>
					<div class="tabAnswer">' .
						$answer .
					'</div>
				</div>';
				}
			}
			echo '
			</div>
		</div>';
		}
 	echo '
 	</div>
</section';