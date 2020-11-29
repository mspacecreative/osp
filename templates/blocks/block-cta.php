<?php
$heading = get_field('heading');
$content = get_field('content');
$radar = get_field('display_radar_animation');
$positioning = get_field('positioning');

switch ( $positioning ) {
	case 'left':
		$class = 'radarLeft';
		break;
	case 'right':
		$class = 'radarRight';
		break;
	default:
		$class = 'radarLeft';
}
?>
<!-- cta -->
<section class="section light">
	<div class="innerContainer w1080">
		<div class="cta textAlignCenter">
			
			<?php if ( $radar ): ?>
			<div class="<?php echo $class ?>">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 250.5 501" style="enable-background:new 0 0 250.5 501;" xml:space="preserve">
					<path class="st st0" d="M250.5,0.5c-138.1,0-250,111.9-250,250s111.9,250,250,250" />
					
					<path class="st st1" d="M250.5,31.9c-120.7,0-218.6,97.9-218.6,218.6s97.9,218.6,218.6,218.6" />
					
					<path class="st st2" d="M250.5,65.3c-102.3,0-185.2,82.9-185.2,185.2s82.9,185.2,185.2,185.2" />
					
					<path class="st st3" d="M250.5,101.2c-82.5,0-149.3,66.9-149.3,149.3S168,399.8,250.5,399.8" />
					
					<path class="st st4" d="M250.5,147.7c-56.8,0-102.8,46-102.8,102.8c0,56.8,46,102.8,102.8,102.8" />
					
					<path class="st st5" d="M250.5,190.7c-33,0-59.8,26.8-59.8,59.8c0,33,26.8,59.8,59.8,59.8V190.7z" />
				</svg>
			</div>
			<?php endif; ?>
			
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