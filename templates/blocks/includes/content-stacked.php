<?php
$heading = get_sub_field('heading');
$iconsizing = get_sub_field('icon_sizing');
$icon = get_sub_field('icon');
$size = 'medium';
$content = get_sub_field('content');
$alignment = get_sub_field('alignment');
					
if ( $alignment === 'center' ) {

	if ( $icon && $iconsizing && $content ) {
		echo '
		<div class="icon row larger center-lg center-md center-sm center-xs" style="flex-direction: column">
			<div class="iconContainer alt">' . wp_get_attachment_image( $icon, $size ) . '</div>';
			if ( $heading ) {
				echo '<h3 class="gold">' . $heading . '</h3>';
			}
		echo '<span class="icon-text">' . $content . '</span>
		</div>';
	} elseif ( $icon && $content ) {
		echo '
		<div class="icon row center-lg center-md center-sm center-xs" style="flex-direction: column">
			<div class="iconContainer">' . wp_get_attachment_image( $icon, $size ) . '</div>';
			if ( $heading ) {
				echo '<h3 class="gold">' . $heading . '</h3>';
			}
		echo '<span class="icon-text">' . $content . '</span>
		</div>';
	} elseif ( $icon && $iconsizing ) {
		echo '
		<div class="icon row center-lg center-md center-sm center-xs" style="flex-direction: column">
			<div class="iconContainer alt">' . wp_get_attachment_image( $icon, $size ) . '</div>';
			if ( $heading ) {
				echo '<h3 class="gold">' . $heading . '</h3>';
			}
		echo '
		</div>';
	} elseif ( $icon ) {
		echo '
		<div class="icon row center-lg center-md center-sm center-xs" style="flex-direction: column">
			<div class="iconContainer">' . wp_get_attachment_image( $icon, $size ) . '</div>';
			if ( $heading ) {
				echo '<h3 class="gold">' . $heading . '</h3>';
			}
		echo '
		</div>';
	} elseif ( $content ) {
		echo $content;
	}
						
	include 'cta-button-stacked.php';
	
} else {
	if ( $icon && $iconsizing && $content ) {
		echo '
		<div class="icon row larger" style="flex-direction: column">
			<div class="iconContainer alt">' . wp_get_attachment_image( $icon, $size ) . '</div>';
			if ( $heading ) {
				echo '<h3 class="gold">' . $heading . '</h3>';
			}
		echo '<span class="icon-text">' . $content . '</span>
		</div>';
	} elseif ( $icon && $content ) {
		echo '
		<div class="icon row" style="flex-direction: column">
			<div class="iconContainer">' . wp_get_attachment_image( $icon, $size ) . '</div>';
			if ( $heading ) {
				echo '<h3 class="gold">' . $heading . '</h3>';
			}
		echo '<span class="icon-text">' . $content . '</span>
		</div>';
	} elseif ( $icon && $iconsizing ) {
		echo '
		<div class="icon row" style="flex-direction: column">
			<div class="iconContainer alt">' . wp_get_attachment_image( $icon, $size ) . '</div>';
			if ( $heading ) {
				echo '<h3 class="gold">' . $heading . '</h3>';
			}
		echo '
		</div>';
	} elseif ( $icon ) {
		echo '
		<div class="icon row" style="flex-direction: column">
			<div class="iconContainer">' . wp_get_attachment_image( $icon, $size ) . '</div>';
			if ( $heading ) {
				echo '<h3 class="gold">' . $heading . '</h3>';
			}
		echo '
		</div>';
	} elseif ( $content ) {
		echo $content;
	}
						
	include 'cta-button-stacked.php';
}