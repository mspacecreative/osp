<?php
$rowheading = get_field('row_heading');
$rowsubheading = get_field('row_sub_heading');
$textcolor = get_field('text_colour');
$boxedcontent = get_field('boxed_content');
$blockanchor = get_field('block_anchor');
$narrow = get_field('narrow');
$centeredtext = get_field('center_align_text') ? ' text-align-center' : '';
$roundedcorners = get_field('rounded_corners') ? ' roundedCorners' : '';
$centeredheading = get_field('centered_heading') ? ' class="text-align-center"' : '';
$icon = get_sub_field('icon') ? ' icons-visible' : '';

include 'includes/column-ratios.php';
include 'includes/vertical-alignment.php';
include 'includes/section-padding.php';
include 'includes/section-width.php';
include 'includes/section-background-color.php';
include 'includes/section-id.php';
include 'includes/section-classname.php';
include 'includes/column-gutters.php'; ?>

<div<?php if ($id): echo ' id="' . $id . '"'; endif; ?> class="section<?php echo $sectionbgcolor, $sectionpadding, esc_attr($className); ?>">

 	<div class="innerContainer<?php echo $sectionwidth; ?>">
	
		<?php if ( $rowheading ) : ?>
		<h2<?php echo $centeredheading; ?>>
			<?php echo $rowheading; ?>
		</h2>
		<?php endif;

		if ($rowsubheading) : ?>
		<h3 class="bottomMargin50<?php echo $centeredtext; ?>">
			<?php $rowsubheading; ?>
		</h3>
		<?php endif;
		
		if( have_rows('columns_grid') ): ?>
		
		<div class="row<?php echo $gutters, $icon, $verticalalignment; ?>">
			
			<?php while( have_rows('columns_grid') ): the_row();
			
			$inlinelinks = get_sub_field('inline_links');
			$maxwidth = get_sub_field('max_width') ? ' class="has-max-width" style="max-width: ' . get_sub_field('max_width') . '"' : ''; ?>
			
			<div class="bottomMarginMobile<?php echo $columns; ?>col-sm-12 col-xs-12">
				
				<?php if ($boxedcontent): ?>
				<div class="boxed<?php echo $roundedcorners; if ($sectionbgcolor == 'dark'): echo ' light dark'; endif; ?>">
				<?php endif;
				
				if ($maxwidth) : ?>
				<div<?php echo $maxwidth; ?>>
				<?php endif;
				
					if ( $inlinelinks ) {
						include 'includes/content-inline.php';
					} else {
						include 'includes/content-stacked.php';
					}
					
				if ($maxwidth) : ?>
				</div>
				<?php endif; ?>
				
				<?php if ($boxedcontent): ?>
				</div>
				<?php endif; ?>
				
			</div>
			
			<?php endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>