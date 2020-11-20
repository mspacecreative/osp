<?php if ( have_rows('social_media', 'options') ) {
	echo '
	<p style="font-weight: 700; margin-bottom: 10px;">Follow us on</p>
	<ul class="social" style="margin-bottom: 2em;">';
	while ( have_rows('social_media', 'options') ) {
		the_row();
		$link = get_sub_field('link', 'options');
		$icon = get_sub_field('icon', 'options');
							
	echo '
			<li><a href="' . $link . '" target="_blank"><i class="fa ' . $icon . '"></i></a></li>';
	}
	echo '
	</ul>';
}
else {
	echo '<p>Social Media Buttons will appear here when they are registered and activated!</p>';
}