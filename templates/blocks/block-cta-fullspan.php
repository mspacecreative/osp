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
					echo '<div class="radarLeft"></div>';
				} elseif ( $radarposition === 'right' ) {
					echo '<div class="radarRight"></div>';
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
					echo '<li><a class="button dark blue ' . $class . '" href="' . $link . '">' . $label . '</a></li>';
				} else {
					echo '<li><a class="button dark blue" href="' . $link . '">' . $label . '</a></li>';
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