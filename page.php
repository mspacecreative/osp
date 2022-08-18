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
$title = get_the_title();
$titlealignment = get_field('title_alignment') ? ' text-align-center' : ''; ?>
<div id="main" class="contentWrap">
	 		
	<section>
	 			
	 	<div class="innerContainer section4<?php echo $titlewidth; ?>" style="padding-bottom: 1em;">
	 			
			<div class="container">
				<h1 class="postTitle<?php echo $titlealignment ?>"><?php echo $title ?></h1>
			</div>
					
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
