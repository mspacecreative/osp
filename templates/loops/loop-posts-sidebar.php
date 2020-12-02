<?php 
$cat = get_the_category( get_the_ID() );

$args = array( 
	'post_type' => 'post',
	'posts_per_page'=> 5, 
	'post__not_in' => array( $post->ID ),
	'category' => $cat,
);
$arr_posts = new WP_Query( $args ); ?>
	
<?php if ( $arr_posts->have_posts() ) : ?>

<div class="row gutterSpaceDefault cardGrid">
			
		<?php while ( $arr_posts->have_posts() ) : $arr_posts->the_post(); ?>
			
		<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="colInner cardContainer whiteBg">

				<!-- post title -->
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<h4 class="darkHeading"><?php the_title(); ?></h4>
				</a>
				<!-- /post title -->
		
				<!-- post details -->
				<h5 class="date">
					<?php echo the_time( 'F j, Y' ); ?><?php esc_html_e(' &nbsp;| &nbsp;'); ?><?php the_category(', '); ?>
				</h5>
				<!-- /post details -->
		
				<a class="readMore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'osp'); ?></a>
			</div>
		</div>
		
		<?php endwhile; ?>
	
</div>	
<?php endif; 
wp_reset_query(); ?>