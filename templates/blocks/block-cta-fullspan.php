<?php
$radar = get_field('radar');
$heading = get_field('heading');
$subheading = get_field('subheading');
$showsocial = get_field('show_social_media_icons');
?>
<!-- cta -->
<section class="section fullSpanCTA lightGreyBg waveTexture overflowHidden textAlignCenter">
	<?php if ( $radar ) {
		if ( have_rows('radar_options') ) {
			while ( have_rows('radar_options') ) {
				the_row();
				$radarposition = get_sub_field('position');
				if ( $radarposition === 'left' ) {
					echo '
					<div class="radarLeft">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 250.5 501" style="enable-background:new 0 0 250.5 501;" xml:space="preserve">
							<path class="st st0" d="M250.5,0.5c-138.1,0-250,111.9-250,250s111.9,250,250,250" />
							
							<path class="st st1" d="M250.5,31.9c-120.7,0-218.6,97.9-218.6,218.6s97.9,218.6,218.6,218.6" />
							
							<path class="st st2" d="M250.5,65.3c-102.3,0-185.2,82.9-185.2,185.2s82.9,185.2,185.2,185.2" />
							
							<path class="st st3" d="M250.5,101.2c-82.5,0-149.3,66.9-149.3,149.3S168,399.8,250.5,399.8" />
							
							<path class="st st4" d="M250.5,147.7c-56.8,0-102.8,46-102.8,102.8c0,56.8,46,102.8,102.8,102.8" />
							
							<path class="st st5" d="M250.5,190.7c-33,0-59.8,26.8-59.8,59.8c0,33,26.8,59.8,59.8,59.8V190.7z" />
						</svg>
					</div>';
				} elseif ( $radarposition === 'right' ) {
					echo '
					<div class="radarRight">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 250.5 501" style="enable-background:new 0 0 250.5 501;" xml:space="preserve">
							<path class="st st0" d="M250.5,0.5c-138.1,0-250,111.9-250,250s111.9,250,250,250" />
							
							<path class="st st1" d="M250.5,31.9c-120.7,0-218.6,97.9-218.6,218.6s97.9,218.6,218.6,218.6" />
							
							<path class="st st2" d="M250.5,65.3c-102.3,0-185.2,82.9-185.2,185.2s82.9,185.2,185.2,185.2" />
							
							<path class="st st3" d="M250.5,101.2c-82.5,0-149.3,66.9-149.3,149.3S168,399.8,250.5,399.8" />
							
							<path class="st st4" d="M250.5,147.7c-56.8,0-102.8,46-102.8,102.8c0,56.8,46,102.8,102.8,102.8" />
							
							<path class="st st5" d="M250.5,190.7c-33,0-59.8,26.8-59.8,59.8c0,33,26.8,59.8,59.8,59.8V190.7z" />
						</svg>
					</div>';
				}
			}
		}
	} ?>
	
	<div class="innerContainer">
		<h2><?php echo $heading ?></h2>
		
		<?php 
		if ( have_rows('cta_buttons') ) {
			echo '<ul class="inlineButtons">';
			while ( have_rows('cta_buttons') ) {
				the_row();
				$link = get_sub_field('link');
				$label = get_sub_field('label');
				$class= get_sub_field('class');
				
				if ( $class ) {
					echo '<li><a class="button dark blue ' . $class . '" href="' . $link . '" target="_blank">' . $label . '</a></li>';
				} else {
					echo '<li><a class="button dark blue" href="' . $link . '" target="_blank">' . $label . '</a></li>';
				}
			}
			echo '</ul>';
		}
		
		if ( $subheading ) {
			echo '<h3 class="topMargin50">' . $subheading . '</h3>';
		}
		
		if ( $showsocial ) {
			if ( have_rows('social_media', 'options') ) {
				echo '<ul class="social">';
				while ( have_rows('social_media', 'options') ) {
					the_row();
					$link = get_sub_field('link', 'options');
					$icon = get_sub_field('icon', 'options');
					
					echo '<li><a href="' . $link . '"><i class="fa ' . $icon . '"></i></a></li>';
				}
				echo '</ul>';
			}
		} ?>
		
	</div>
</section>
<!-- / cta -->