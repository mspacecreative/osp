<?php 
$numposts = get_field('number_of_posts') ? get_field('number_of_posts') : '5';
$related = get_posts( array( 
	'category' => 3, 
	'posts_per_page' => $numposts,
	) 
);

if ( $related ) { ?>
	
<div class="row gutterSpaceDefault cardGrid">
			
	<?php foreach( $related as $post ) {
	setup_postdata( $post ); ?>
			
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
	
	<?php } ?>
	
</div>	
<?php
} wp_reset_postdata(); ?>