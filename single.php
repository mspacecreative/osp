<?php get_header(); ?>

<div class="contentWrap">

	<?php
	$title = get_the_title();
	$titlewidth = get_field('title_row_width');
	
	if ( $titlewidth === '1080' ) : ?>
	<div class="innerContainer w1080 section4">
	
	<?php elseif ( $titlewidth === '850' ) : ?>
	<div class="innerContainer w850 section4">
	
	<?php else : ?>
	<div class="innerContainer section4">
	<?php endif; ?>
	
		<h1 class="postTitle bottomMargin50"><?php the_title(); ?></h1>';
		<span class="date"><?php esc_html_e('Posted on ') date( 'Y-m-d' ); ?></span>

		<?php if ( have_posts() ) : ?>
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
		endif; ?>
	</div>
</div>

<?php get_footer(); ?>