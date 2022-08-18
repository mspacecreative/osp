<?php
$bgtype = get_field('background_type');
$bgcolor = get_field('background_colour');
$bgimg = get_field('background_image');
$bgimgalign = get_field('background_position');
$aligncolumns = get_field('align_columns');
$rowheading = get_field('row_heading');
$headingalignment = get_field('heading_alignment');
$textcolor = get_field('text_colour');
$reverse = get_field('reverse_columns') ? ' reverse' : '';
$colratio = get_field('column_ratio');
$offsetlayout = get_field('offset_layout') ? ' offsetLayout' : '';
$overlayopacity = get_field('overlay_opacity') ? get_field('overlay_opacity') : '.75'; 

include 'includes/section-id.php';
include 'includes/section-classname.php';
include 'includes/section-width.php';
include 'includes/section-padding.php';
include 'includes/column-gutters.php';

switch ( $bgimgalign ) {
	case 'center':
		$bgimgalign = ' center';
		break;
	case 'top':
		$bgimgalign = ' top center';
		break;
	case 'bottom':
		$bgimgalign = ' bottom center';
		break;
	default:
		$bgimgalign = ' center';
}
switch ( $bgcolor ) {
	case 'light':
		$bgcolor = ' lightGreyBg';
		break;
	case 'dark': 
		$bgcolor = ' darkGreyBg light';
		break;
	default:
		$bgcolor = '';
}

switch ( $aligncolumns ) {
	case 'top':
		$aligncolumns = '';
		break;
	case 'middle':
		$aligncolumns = ' middle-lg middle-md';
		break;
	case 'bottom':
		$aligncolumns = ' bottom-lg bottom-md';
		break;
	default:
		$aligncolumns = '';
}

switch ( $headingalignment ) {
	case 'center':
		$headingalignment = ' class="text-align-center"';
		break;
	case 'right':
		$headingalignment = ' class="text-align-right"';
		break;
	default:
		$headingalignment = '';
} ?>

<section<?php if ($id): echo ' id="' . $id . '"'; endif; ?> class="section<?php echo $offsetlayout, $sectionpadding, esc_attr($className), $bgcolor; if ($bgtype === 'image' && $bgimg): echo ' section_has_bg_img'; endif; ?>"<?php if ($bgimg && $bgimgalign): echo ' style="background-image: url(' . $bgimg . '); background-position: ' . $bgimgalign . '"'; endif; ?>>
	
	<?php if ($bgimg): ?>
	<div class="section_has_bg_img_overlay" style="background-color: rgba(<?php if ( $textcolor == 'dark' ): echo '255,255,255,'; elseif ( $textcolor == 'light'): echo '0,0,25,'; endif; echo $overlayopacity; ?>);"></div>
	<?php endif; ?>

	<div class="innerContainer<?php if ($textcolor == 'light'): echo ' light'; endif; ?>">
		<div class="container<?php echo $sectionwidth ?>">
			
			<?php 
			if ( $rowheading ) {
				echo '<h2' . $headingalignment . '>' . $rowheading . '</h2>';
			} ?>
			
			<div class="row relativePositioning<?php echo $reverse, $aligncolumns, $sectiongutters; ?>">
			
				<?php
				if( have_rows('left_column') ):
		 		while( have_rows('left_column') ): the_row();
		 		
				$anchor = get_sub_field('anchor') ? ' id="#' . get_sub_field('anchor') . '"' : '';
		 		$icon = get_sub_field('icon');
		 		$iconsize = 'thumbnail';
		 		$heading = get_sub_field('heading') ? '<h3>' . get_sub_field('heading') . '</h3>' : '';
				$content = get_sub_field('content');
				$mobile = get_sub_field('mobile_spacing') ? ' keepSpacing' : '';
		 		
		 		switch ( $colratio ) {
					case 'three-fifth-two-fifth':
						$colwidth = ' col-lg-7 col-md-7';
						break;
					case 'two-fifth-three-fifth':
						$colwidth = ' col-lg-5 col-md-5';
						break;
					case 'two-third-one-third':
						$colwidth = ' col-lg-8 col-md-8';
						break;
					case 'one-third-two-third':
						$colwidth = ' col-lg-4 col-md-4';
						break;
					case 'three-quarter-one-quarter':
						$colwidth = ' col-lg-10 col-md-10';
						break;
					case 'one-quarter-three-quarter':
						$colwidth = ' col-lg-2 col-md-2';
						break;
					default:
						$colwidth = ' col-lg-6 col-md-6';
						break;
				} ?>

				<div<?php echo $anchor; ?> class="col<?php echo $colwidth; ?> col-sm-6 col-xs-12 bottomMarginMobile<?php if ($offsetlayout): echo ' offsetContentContainer'; endif; echo $mobile; ?>">
				
				<?php
					echo $heading;
					echo $content;
					include 'includes/cta-button-single.php';
				?>
				</div>
				
				<?php 
				endwhile;
				endif; ?>
				
				<?php 
				if( have_rows('right_column') ):
		 		while( have_rows('right_column') ): the_row();
		 		
				$anchor = get_sub_field('anchor') ? ' id="#' . get_sub_field('anchor') . '"' : '';
		 		$icon = get_sub_field('icon');
		 		$iconsize = 'thumbnail';
		 		$contenttype = get_sub_field('content_type');
		 		$heading = get_sub_field('heading_right_col') ? '<h3>' . get_sub_field('heading_right_col') . '</h3>' : '';
		 		$contentrightcol = get_sub_field('content_right_col');
				$mobile = get_sub_field('mobile_spacing') ? ' keepSpacing' : '';
				
				switch ( $colratio ) {
					case 'three-fifth-two-fifth':
						$colwidth = ' col-lg-5 col-md-5';
						break;
					case 'two-fifth-three-fifth':
						$colwidth = ' col-lg-7 col-md-7';
						break;
					case 'two-third-one-third':
						$colwidth = ' col-lg-4 col-md-4';
						break;
					case 'one-third-two-third':
						$colwidth = ' col-lg-8 col-md-8';
						break;
					case 'three-quarter-one-quarter':
						$colwidth = ' col-lg-2 col-md-2';
						break;
					case 'one-quarter-three-quarter':
						$colwidth = ' col-lg-10 col-md-10';
						break;
					default:
						$colwidth = ' col-lg-6 col-md-6';
						break;
				} ?>
				
				<div<?php echo $anchor; ?> class="col<?php echo $colwidth; ?> col-sm-6 col-xs-12 bottomMarginMobile<?php if ($offsetlayout): echo ' offsetContentContainer'; endif; echo $mobile; ?>">
				
				<?php 
				if ( $contenttype == 'carousel' ) {
					include 'includes/carousel.php';
				} elseif ( $contenttype == 'grid' ) {
					include 'includes/grid.php';
				} elseif ( $contenttype == 'image' ) {
					include 'includes/image.php';
				} elseif ( $contenttype == 'content' ) {
					include 'includes/content.php';
				} ?>

				</div>
				
				<?php 
				endwhile;
				endif; ?>
				
			</div>
		</div>
	</div>
</section>