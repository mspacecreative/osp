<?php if (have_posts()): ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="row gutterSpaceWide cardGrid">
		
			<?php while (have_posts()) : the_post(); ?>
			
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
			
				<div class="row">
					
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
					<div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
						</a>
					</div>
					<!-- /post thumbnail -->
					
					<div class="col col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<?php else : ?>
					<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php endif; ?>
					
						<div class="colInner cardContainer whiteBg">
			
							<!-- post title -->
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<h2><?php the_title(); ?></h2>
							</a>
							<!-- /post title -->
					
							<!-- post details -->
							<h4 class="date">
								<?php echo the_time( 'F j, Y' ); ?><?php esc_html_e(' &nbsp;| &nbsp;'); ?><?php the_category(', '); ?>
							</h4>
							<!-- /post details -->
					
							<p><?php osp_custom_excerpt('osp_index'); ?></p>
							
						</div>
					
					</div>
				
				</div>
				
			</div>
			
			<?php endwhile; ?>
		
		</div>

	</article>
	<!-- /article -->

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'osp' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
