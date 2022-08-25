<?php get_header(); ?>

<div id="main" class="contentWrap">

	<?php
	$title = get_the_title(); ?>
	
	<div class="innerContainer section4">
	
		<div class="row">
			<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<h1 class="postTitle" style="margin-bottom: 20px;"><?php echo $title ?></h1>
				<h5 class="date bottomMargin50"><?php echo the_time( 'F j, Y' ); ?><?php esc_html_e(' &nbsp;| &nbsp;'); ?><?php the_category(', '); ?></h5>
			</div>
		</div>

		<?php if ( have_posts() ) : ?>
		<div class="row gutterSpaceWide featuredInlineImg">
		 	<?php while ( have_posts() ) : the_post();
		 	$featuredimg = get_the_post_thumbnail( get_the_ID(), 'medium' );
		 	$lgfeaturedimg = get_the_post_thumbnail( get_the_ID(), 'large' );
		 	$articlelink = get_field('url', $post->ID);
		 	$buttonlabel = get_field('button_label', $post->ID);
		 	
		 	if ( $articlelink ): ?>
			<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<a href="<?php echo esc_attr( $articlelink ); ?>" target="_blank">
					<?php echo $lgfeaturedimg ?>
				</a>
				<?php if ( $buttonlabel ): ?>
				<p><a class="readMore" href="<?php echo esc_attr( $articlelink ); ?>" target="_blank"><?php echo $buttonlabel ?></a></p>
				<?php else : ?>
				<p><a class="readMore" href="<?php echo esc_attr( $articlelink ); ?>" target="_blank"><?php esc_html_e('View article'); ?></a></p>
				<?php endif; ?>
				<?php the_content(); ?>
			</div>
			<?php else : ?>
			<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<?php echo $featuredimg ?>
				<?php the_content(); ?>
			</div>
			<?php endif; ?>
			
			<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-blog')) ?>
			</div>
			<?php endwhile; ?>
		</div>
		<?php
		endif; ?>
	</div>
</div>

<?php get_footer(); ?>