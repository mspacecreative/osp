<?php if (have_posts()): ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="row gutterSpaceWide feedGrid">
			
			<?php while ( have_posts() ) : the_post();
			$featuredimg = get_the_post_thumbnail( get_the_ID(), 'card-feature' );
			$title = get_the_title();
			$permalink = get_the_permalink( get_the_ID() );
			$excerpt = get_the_excerpt();
			$url = get_field('url', get_the_ID()); ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="cardContainer">
					<?php 
					if ( $url ): ?>
					<a href="<?php echo $url ?>" target="_blank">
						<?php echo $featuredimg ?>
					</a>
					<?php else : ?>
					<a href="<?php echo $permalink ?>">
						<?php echo $featuredimg ?>
					</a>
					<?php endif; ?>
					<div class="cardContent">
						<div class="colInner">
							<?php if ( $url ): ?>
							<a style="color: #333;" href="<?php echo $url ?>" target="_blank">
								<h3><?php echo $title ?></h3>
							</a>
							<?php else : ?>
							<a style="color: #333;" href="<?php echo $permalink ?>">
								<h3><?php echo $title ?></h3>
							</a>
							<?php endif;
							 
							if ( $url && $excerpt ) {
								echo '<p>' . $excerpt . '</p>';
								echo '<p style="margin-top: auto;"><a class="readMore" href="' . $url . '" target="_blank">' . __('View article') . '</a></p>';
							} elseif ( $url ) {
								echo '<a class="readMore" href="' . $url . '" target="_blank">' . __('View article') . '</a>';
							} elseif ( $excerpt ) {
								echo '<p class="displayFlex">' . $excerpt . '</p>';
							} else {
								echo '<p class="displayFlex">' . $excerpt . '</p>';
							} 
							?>
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
