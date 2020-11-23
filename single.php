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
	
		<div class="row">
			<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<h1 class="postTitle" style="margin-bottom: 20px;"><?php the_title(); ?></h1>
				<h4 class="date bottomMargin50"><?php echo the_time( 'F j, Y' ); ?><?php esc_html_e(' &nbsp;| &nbsp;'); ?><?php the_category(', '); ?></h4>
			</div>
		</div>

		<?php if ( have_posts() ) : ?>
		<div class="row gutterSpaceWide">
		 	<?php while ( have_posts() ) : the_post();
		 	$featuredimg = get_the_post_thumbnail( get_the_ID(), 'large' ); ?>
			<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<?php the_content(); ?>
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