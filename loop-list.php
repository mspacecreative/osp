<?php if (have_posts()): ?>

<div class="searchContainer">
		
	<?php while (have_posts()) : the_post(); ?>
			
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="searchResult">
			
			<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
			<div class="row middle-lg middle-md middle-sm w800">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<!-- post thumbnail -->
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail( array( 400, 400 ) ); // Declare pixel size you need inside the array. ?>
					</a>
					<!-- /post thumbnail -->
				</div>
				
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<!-- post title -->
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<h2><?php the_title(); ?></h2>
					</a>
					<!-- /post title -->
					
					<p><?php osp_custom_excerpt('osp_index'); ?></p>
				</div>
			</div>
			
			<?php else : ?>
			<!-- post title -->
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<h2><?php the_title(); ?></h2>
			</a>
			<!-- /post title -->
					
			<p><?php osp_custom_excerpt('osp_index'); ?></p>
			<?php endif; ?>
				
		</div>
	</article>
	<!-- /article -->
	
	<?php endwhile; ?>

	<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'osp' ); ?></h2>
	</article>
	<!-- /article -->
	
</div>

<?php endif; ?>
