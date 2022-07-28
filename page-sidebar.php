<?php
/* Template Name: Sidebar */
get_header();

$titlewidth = get_field('title_row_width');

switch ( $titlewidth ) {
	case '1080':
		$titlewidth = 'w1080';
		break;
	
	case '850':
		$titlewidth = 'w800';
		break;
	
	default:
		$titlewidth = '';
} ?>

<div id="main" class="contentWrap">

<?php 
$title = get_the_title();
echo '
	<section class="innerPadding">
		<div class="innerContainer section4 ' . $titlewidth . '" style="padding-bottom: 1em;">
		 		
		 	<h1 class="postTitle">' . $title . '</h1>
				
		</div>
	</section>';

if ( have_posts() ) {
 	while ( have_posts() ) { 
	the_post();
	 	
	echo '
	<section class="innerPadding">
		<div class="innerContainer">
			<div class="row gutterSpaceWide">
				<div class="col col-lg-9 col-md-9 col-sm-12 col-xs-12">'; 
					echo the_content();
				echo '
				</div>
				<div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">';
					echo get_sidebar('page');
				echo '
				</div>
			</div>
		</div>
	</section>';
	}
} ?>

</div>

<?php get_footer(); ?>
