<?php 
$heading = get_field('heading');

$args = array(
	'post_type' => 'researchers-students',
	'posts_per_page'=> 3,
);

$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>
<section class="section">
	<div class="offsetBg">
		<div class="innerContainer">
			<div class="container">
				<?php if ( $heading ) {
					echo '<h2 class="light">' . $heading . '</h2>';
				} ?>
				<div class="row">
				<?php while ( $loop->have_posts() ) : $loop->the_post();
				$featuredimg = get_the_post_thumbnail( 'medium' );
				$title = get_the_title();
				$excerpt = get_the_excerpt(); ?>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 cardContainer">
					<?php 
					echo $featuredimg . '
					<div class="cardContent">
						<h2>' . $title . '</h2>' . '
						<p>' . $excerpt . '</p>
					</div>';
				endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif;  wp_reset_query(); ?>