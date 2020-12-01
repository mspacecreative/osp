<?php
get_header(); ?>

<div id="main" class="contentWrap">

	<?php
	$title = get_the_title();
	$titlewidth = get_field('title_row_width');
	if ( $titlewidth === '1080' ) {
	echo '
	<div class="innerContainer w1080 section4">';
	 } elseif ( $titlewidth === '850' ) {
	echo '
	<div class="innerContainer w850 section4">';
	} else {
	echo '
	<div class="innerContainer section4">';
	}
	echo '<h1 class="postTitle bottomMargin50">' . $title . '</h1>';

		if ( have_posts() ) : ?>
		<div class="row gutterSpaceWide">
		 	<?php while ( have_posts() ) : the_post();
		 	$content = get_the_content();
			$featuredimg = get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
			<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<?php echo $content; ?>
			</div>
			<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<?php echo $featuredimg ?>
			</div>
			<?php endwhile; ?>
		</div>
		<?php
		endif;
	echo '
	</div
</div>';

get_footer(); ?>