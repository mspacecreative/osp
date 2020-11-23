<?php 
$args = array( 
	'post_type' => 'post',
	'posts_per_page'=> 5, 
	'post__not_in' => array( $post->ID )
);
$arr_posts = new WP_Query( $args ); ?>
	
<?php if ( $arr_posts->have_posts() ) : ?>

<div class="row gutterSpaceWide cardGrid">
			
		<?php while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
			
		<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
		
				<a class="readMore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'osp'); ?></a>
			</div>
		</div>
		
		<?php endwhile; ?>
	
</div>	
<?php endif; 
wp_reset_query(); ?>