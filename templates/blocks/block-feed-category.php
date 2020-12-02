<?php 
$heading = get_field('heading');
$category = get_field('group');
$cannedimg = get_field('image_selection', get_the_ID() );

switch ( $cannedimg ) {
	case 'pan-atl-partner':
		$img = '
		<div class="cannedImgContainer">
			<img src="' . get_template_directory_uri() . '/assets/img/placeholders/osp-ocean-bg-feature.jpg">
			<div class="cannedImgOverlay">
				<h2>' . __('Pan-Atlantic Partner News') . '</h2>
			</div>
		</div>';
		break;
	case 'partner':
		$img = '
		<div class="cannedImgContainer">
			<img src="' . get_template_directory_uri() . '/assets/img/placeholders/osp-ocean-bg-feature.jpg">
			<div class="cannedImgOverlay">
				<h2>' . __('Partner News') . '</h2>
			</div>
		</div>';
		break;
	default:
		$img = '
		<div class="cannedImgContainer">
			<img src="' . get_template_directory_uri() . '/assets/img/placeholders/osp-ocean-bg-feature.jpg">
			<div class="cannedImgOverlay">
				<h2>' . __('Partner News') . '</h2>
			</div>
		</div>';
}

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
				$excerpt = get_the_excerpt();
				$url = get_field('url', get_the_ID()); ?>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="cardContainer">
						<?php 
						if ( $url && $cannedimg ): ?>
						<a href="<?php echo $url ?>" target="_blank">
							<?php echo $img ?>
						</a>
						<?php elseif ( $url && $featuredimg ): ?>
						<a href="<?php echo $url ?>" target="_blank">
							<?php echo $featuredimg ?>
						</a>
						<?php elseif ( $url ): ?>
						<a href="<?php echo $url ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholders/osp-ocean-bg-feature.jpg">
						</a>
						<?php else : ?>
						<a href="<?php echo $permalink ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholders/osp-ocean-bg-feature.jpg">
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
			
			<?php 
			$catid = get_cat_ID( $category->name );
			$catlink = get_category_link( $catid );
			if ( $catlink ) {
				echo '<a class="button dark blue floatRight" href="' . $catlink . '">' . __('View all') . '</a>';
			} ?>
			
		</div>
		
	</section>
	<?php endif;  wp_reset_query();
} ?>