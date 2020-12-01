<div class="contentWrap">

	<section>
		 <div class="innerContainer w1080 section4">
		 	<h1 class="postTitle"><?php esc_html_e('All audiences'); ?></h1>
		 </div>
	</section>
	
	<?php 
	$args = array(
		'post_type' => 'audience',
		'posts_per_page'=> -1,
	);
	$loop = new WP_Query( $args );
	
	if ( $loop->have_posts() ) : ?>
	<section class="section">
		<div class="offsetBg">
			<div class="innerContainer">
				<div class="container">
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
						</div>'; ?>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<?php endif;  wp_reset_query(); ?>

</div>