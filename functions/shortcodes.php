<?php

// LOOP FINANCIAL STATEMENTS
function loopFinancialStatements() {
	ob_start();
		get_template_part('includes/loops/loop-financial-statements');
	return ob_get_clean();
}
add_shortcode( 'financial_statements', 'loopFinancialStatements' );

// LOOP MD&As
function loopMda() {
	ob_start();
		get_template_part('includes/loops/loop-mda');
	return ob_get_clean();
}
add_shortcode( 'mda', 'loopMda' );

// LOOP THROUGH NEWS POSTS
function newsPosts() {
	ob_start();
		get_template_part('includes/archives/archive-news');
	return ob_get_clean();
}
add_shortcode( 'news_posts', 'newsPosts' );

// BLOG SIDEBAR RECENT POSTS
function recentPosts() {
	ob_start();
		get_template_part('includes/loops/loop-sidebar-blog');
	return ob_get_clean();
}
add_shortcode( 'sidebar_recent_posts', 'recentPosts' );

// LOOP THROUGH TESTIMONIALS
function testimonialsLoop() {
	ob_start();
		get_template_part('includes/loops/loop-testimonials');
	return ob_get_clean();
}
add_shortcode( 'testimonials', 'testimonialsLoop' );

// LOOP THROUGH PRODUCTS
function productLoop() {
	ob_start();
		get_template_part('includes/loops/loop-products');
	return ob_get_clean();
}
add_shortcode( 'products', 'productLoop' );

// LOOP THROUGH PRODUCTS IN SIDEBAR
function productSidebarLoop() {
	ob_start();
		get_template_part('includes/loops/loop-sidebar-products');
	return ob_get_clean();
}
add_shortcode( 'products_sidebar', 'productSidebarLoop' );

// LOOP THROUGH PARTNER BRANDS IN SIDEBAR
function partnerSidebarLoop() {
	ob_start();
		get_template_part('includes/loops/loop-sidebar-partners');
	return ob_get_clean();
}
add_shortcode( 'partners_sidebar', 'partnerSidebarLoop' );

// INFO PORTALS
function infoPortals() {
	ob_start();
		get_template_part('templates/info-portals');
	return ob_get_clean();
}
add_shortcode( 'info_portals', 'infoPortals' );

// SOCIAL MEDIA BUTTONS
function socialMediaButtons() {
	ob_start();
		get_template_part('templates/social-media-buttons');
	return ob_get_clean();
}
add_shortcode( 'social_media', 'socialMediaButtons' );

// EVENTBRITE EVENTS
function eventbriteEvents() {
	ob_start();
		get_template_part('templates/eventbrite');
	return ob_get_clean();
}
add_shortcode( 'eventbrite_events', 'eventbriteEvents' );

// BLOG SIDEBAR LOOP TEAM
function loopTeam($atts) {
	ob_start();
		$atts = shortcode_atts( array(
		'type' => ''
		), $atts );
			
		$args = array(
			'posts_per_page' => -1,
			'post_type'      => 'team',
			'post__not_in' => array( get_the_ID() )
		);
				    
		if ( $atts['type'] ) {
				
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'member_type',
					'field'    => 'slug',
					'terms'    => $atts
				),
			);
		}
		$arr_posts = new WP_Query( $args ); ?>
			
			<ul class="divided related-posts hide-on-mobile">
				<?php while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
				
				<div class="event-container row">
		        	<?php
		        	if ( has_post_thumbnail() ): ?>
		        	<span class="event-thumb col-lg-3 col-md-3 col-sm-4 col-xs-4">
		        		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'sidebar', 200, 200, array('center', 'top') ); ?></a>
		        	</span>
					
					<?php else : ?>
		        	<span class="event-thumb col-lg-3 col-md-3 col-sm-4 col-xs-4">
		        		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/placeholders/sona-placeholder-square.jpg" alt="Sona Nanotech" /></a>
		        	</span>
					<?php endif; ?>
					
		        	<div class="bucket-content col-lg-9 col-md-9 col-sm-8 col-xs-8">
		        		<h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
		        		<?php if ( get_field('position__title') ): ?>
						<p class="date-author"><?php the_field('position__title'); ?></p>
						<?php endif; ?>
		        	</div>
					
		        </div>
				
				<?php endwhile; ?>
				
			</ul>
			
		<?php wp_reset_query();
	return ob_get_clean();
}
add_shortcode( 'team_sona', 'loopTeam' );

// TEAM MEMBERS LOOP
function teamMembers($atts) {
	ob_start();
		$atts = shortcode_atts( array(
	    'type' => ''
	    ), $atts );
	
		$args = array(
		    'posts_per_page' => -1,
		    'post_type'      => 'team',
		);
		    
		if ( $atts['type'] ) {
		
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'member_type',
					'field'    => 'slug',
					'terms'    => $atts
				),
			);
		}
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : ?>
		<div class="row gutter_space_2 team-container clear">
			
			<div class="bioContainerUnderlay"></div>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post();
			$position = get_field('position__title'); ?>
			
			<div class="team-profile col col-lg-4 col-md-4 col-sm-6 col-xs-12 text-align-center">
						
				<div class="profile-img-wrap">
					<div class="plus-sign">
						<i class="fa fa-plus"></i>
					</div>
					<div class="profile-overlay"></div>
					<?php if ( has_post_thumbnail() ) {
						echo the_post_thumbnail( array(400,400) );
					} else {
					echo '<img src="' . get_template_directory_uri() . '/img/portrait_placeholder.jpg">';
					} ?>
				</div>
										
				<h4><?php the_title(); ?></h4>
				
				<?php if ( $position ) {
					echo '<p>' . $position . '</p>';
				} ?>
										
			</div>
			 
			<div class="team-bio-container">
				<div class="team-bio-inner">
					<span class="close-button desktop"></span>
					<?php
					$shortbio = get_field('short_bio');
					$link = get_permalink();
					if ( $shortbio ): ?>
						<div class="shortBio">
							<?php echo $shortbio ?>
							<a class="button light" href="<?php echo $link ?>">Read more</a>
						</div>
					<?php endif;
					
					$file = get_field('file');
					if ( $file ) : ?>
					    <p><a class="button light" style="margin-top: 15px;" href="<?php the_field('file'); ?>" download>Download high res head shot</a></p>
					<?php endif; ?>
			
				</div>
			</div>
			
			<?php endwhile; ?>
		
		</div>
		<?php endif; wp_reset_query();
	return ob_get_clean();
}
add_shortcode( 'sona_team', 'teamMembers' );