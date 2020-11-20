<?php
$heading = get_field('heading');
$content = get_field('content');
?>
<!-- cta -->
<section class="section light">
	<div class="innerContainer w1080">
		<div class="cta textAlignCenter">
			<div class="radarLeft"></div>
			
			<div class="positionRelative">
			
			<?php 
			if ( $heading ) {
				echo '
				<h2>' . $heading . '</h2>';
			}
			if ( $content ) {
				echo 
				$content;
			}
			if ( have_rows('cta_button') ) {
				while ( have_rows('cta_button') ) {
					the_row();
					$internal = get_sub_field('internal_link');
					$external = get_sub_field('external_link');
					$label = get_sub_field('label');
					$linktype = get_sub_field('link_type');
					$anchor = get_sub_field('anchor_link');
					
					switch ( $linktype ) {
						case 'internal':
							$link = '<a href="' . $internal . '"';
							break;
						case 'external':
							$link = '<a href="' . $external . '" target="_blank"';
							break;
						case 'anchor':
							$link = '<a href="#' . $anchor . '"';
							break;
						default:
							$link = '<a href="' . $internal . '"';
					}
					echo $link . ' class="button dark blue">' . $label . '</a>';
				}
			} ?>
			
			</div>
			
		</div>
	</div>
</section>
<!-- / cta -->