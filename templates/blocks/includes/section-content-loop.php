<?php 
$padding = get_field('section_padding');
$content = get_field('content_editor');
$txtalign = get_field('text_alignment');
	
if ( $txtalign == 'left' ):
	if ( $padding == 'both' ): ?>
	<div class="topBottomPadding clear">
	
	<?php elseif ( $padding == 'top'): ?>
	<div class="topPadding clear">
	
	<?php elseif ( $padding == 'bottom'): ?>
	<div class="bottomPadding clear">
	
	<?php else : ?>
	<div class="topBottomPadding clear">
	<?php endif;
	
		if ( $content && $bgcolor = 'light' ) {
			echo $content;
			include 'content-cta-button-light.php';
		} elseif ( $content && $bgcolor = 'dark' ) {
			echo $content;
			include 'content-cta-button-dark.php';
		} else {
			echo $content;
			include 'content-cta-button-light.php';
		} ?>
			
	</div>
	
<?php elseif ( $txtalign == 'center' ):
	if ( $padding == 'both' ): ?>
	<div class="topBottomPadding clear text-align-center">
	
	<?php elseif ( $padding == 'top'): ?>
	<div class="topPadding clear text-align-center">
	
	<?php elseif ( $padding == 'bottom'): ?>
	<div class="bottomPadding clear text-align-center">
	
	<?php else : ?>
	<div class="topBottomPadding clear text-align-center">
	<?php endif;
	
		if ( $content && $bgcolor = 'light' ) {
			echo $content;
			include 'content-cta-button-light.php';
		} elseif ( $content && $bgcolor = 'dark' ) {
			echo $content;
			include 'content-cta-button-dark.php';
		} else {
			echo $content;
			include 'content-cta-button-light.php';
		} ?>
			
	</div>
	
<?php elseif ( $txtalign == 'right' ):
	if ( $padding == 'both' ): ?>
	<div class="topBottomPadding clear text-align-right">
	
	<?php elseif ( $padding == 'top'): ?>
	<div class="topPadding clear text-align-right">
	
	<?php elseif ( $padding == 'bottom'): ?>
	<div class="bottomPadding clear text-align-right">
	
	<?php else : ?>
	<div class="topBottomPadding clear text-align-right">
	<?php endif;
	
		if ( $content && $bgcolor = 'light' ) {
			echo $content;
			include 'content-cta-button-light.php';
		} elseif ( $content && $bgcolor = 'dark' ) {
			echo $content;
			include 'content-cta-button-dark.php';
		} else {
			echo $content;
			include 'content-cta-button-light.php';
		} ?>
			
	</div>
	
<?php else :
	if ( $padding == 'both' ): ?>
	<div class="topBottomPadding clear">
	
	<?php elseif ( $padding == 'top'): ?>
	<div class="topPadding clear">
	
	<?php elseif ( $padding == 'bottom'): ?>
	<div class="bottomPadding clear">
	
	<?php else : ?>
	<div class="clear">
	<?php endif;
	
		if ( $content && $bgcolor = 'light' ) {
			echo $content;
			include 'content-cta-button-light.php';
		} elseif ( $content && $bgcolor = 'dark' ) {
			echo $content;
			include 'content-cta-button-dark.php';
		} else {
			echo $content;
			include 'content-cta-button-light.php';
		} ?>
			
	</div>
	
<?php endif; ?>