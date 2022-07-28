<?php
get_header();

$titlewidth = get_field('title_row_width');
switch ($titlewidth) {
	case '1080':
		$titlewidth = ' w1080';
		break;
	case '850':
		$titlewidth = ' w800';
		break;
	default:
		$titlewidth = '';
		break;
}
$title = get_the_title(); ?>
<div id="main" class="contentWrap">
	 		
	<section>
	 			
	 	<div class="innerContainer section4<?php echo $titlewidth; ?>" style="padding-bottom: 1em;">
	 			
			<h1 class="postTitle"><?php echo $title ?></h1>
					
		</div>
			
	</section>
			
	<?php
	if ( have_posts() ) {
	 	while ( have_posts() ) {
			the_post();
			the_content();
		}
	} ?>
			
</div>

<?php get_footer();
