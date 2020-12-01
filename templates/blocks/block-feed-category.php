<?php 
$heading = get_field('heading');
$term = get_field('group');

if ( $term ) {

	$args = array(
		'post_type' => 'posts',
		'posts_per_page'=> 3,
		'category_name' => $term,
	);

	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) : ?>
	
	<section class="section">
		<div class="offsetBg"></div>
		
		<div class="innerContainer w1080 clearfix">
			<?php 
			if ( $heading ) {
				echo '<h2 class="light">' . $heading . '</h2>';
			} ?>
			
			<div class="row gutterSpaceWide feedGrid">
				
				<?php while ( $loop->have_posts() ) : $loop->the_post();
				$featuredimg = get_the_post_thumbnail( get_the_ID(), 'card-feature' );
				$title = get_the_title();
				$excerpt = get_the_excerpt(); ?>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="cardContainer">
						<?php 
						echo '<a href="' . get_the_permalink() . '">' . $featuredimg . '</a>
						<div class="cardContent">
							<div class="colInner">
								<a style="color: #333;" href="' . get_the_permalink() . '"><h3>' . $title . '</h3></a>'; 
								if ( $excerpt ) {
									echo '<p>' . $excerpt . '</p>';
								} else {
									echo '<p>' . $excerpt . '</p>';
								} 
								?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				
			</div>
			<?php $catlink = get_category_link( $term );
			
			if ( $postcount >= 3 ): ?>
			<a class="button dark blue floatRight" href="<?php echo esc_url( $catlink ); ?>"><?php esc_html_e('View all'); ?></a>
			<?php endif; ?>
		</div>
		
	</section>
	<?php endif;  wp_reset_query();
} ?>