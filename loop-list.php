<?php if (have_posts()): ?>

<div class="searchContainer">
		
	<?php while (have_posts()) : the_post(); ?>
			
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="searchResult">
			
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
			</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
				
			<!-- post title -->
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<h2><?php the_title(); ?></h2>
			</a>
			<!-- /post title -->
					
			<!-- post details -->
			<h5 class="date">
				<?php echo the_time( 'F j, Y' ); ?><?php esc_html_e(' &nbsp;| &nbsp;'); ?><?php the_category(', '); ?>
			</h5>
			<!-- /post details -->
					
			<p><?php osp_custom_excerpt('osp_index'); ?></p>
				
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
