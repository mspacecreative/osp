<?php 
$heading = get_field('heading');
$category = get_field('group');

if ( $category ) {

	$args = array(
		'posts_per_page'=> 3,
		'category_name' => $category->slug,
	);

	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) : ?>
	
	<section class="section">
		<div class="offsetBg"></div>
		
		<div class="innerContainer w1080 clearfix">
			<?php 
			if ( $heading ) {
				echo '<h2 class="light">' . $heading . '</h2>';
			} else {
				echo '<h2 class="light">' . __('What&#8217;s new') . '</h2>';
			} ?>
			
			<div class="row gutterSpaceWide feedGrid">
				
				<?php while ( $loop->have_posts() ) : $loop->the_post();
				$featuredimg = get_the_post_thumbnail( get_the_ID(), 'card-feature' );
				$title = get_the_title();
				$permalink = get_the_permalink( get_the_ID() );
				$excerpt = get_the_excerpt(); ?>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="cardContainer">
						<a href="<?php echo $permalink ?>">
							<?php echo $featuredimg ?>
						</a>
						<div class="cardContent">
							<div class="colInner">
								<a style="color: #333;" href="<?php echo $permalink ?>">
									<h3><?php echo $title ?></h3>
								</a>
								<?php 
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
			
		</div>
		
	</section>
	<?php endif;  wp_reset_query();
} ?>