<?php

$args = array(
	'post_type' => 'audience',
	'posts_per_page'=> -1,
	'tax_query' => array (
		array(
			'taxonomy' => 'group',
			'field' => 'slug',
			'terms' => $term,
		)
	)
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>

<section class="section">
	
	<div class="offsetBg"></div>
	
	<div class="innerContainer w1080">
		<div class="row gutterSpaceWide feedGrid">
			
			<?php while ( $loop->have_posts() ) : $loop->the_post();
			$featuredimg = get_the_post_thumbnail( get_the_ID(), 'card-feature' );
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			$permalink = get_the_permalink( get_the_ID() ); ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="cardContainer">
					<a href="<?php echo $permalink ?>">
						<?php echo $featuredimg ?>
					</a>
					<div class="cardContent">
						<div class="colInner">
							<a style="color: #333;" href="<?php get_the_permalink(); ?>">
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

<?php endif;  wp_reset_query(); ?>