<?php get_header(); ?>
<div class="contentWrap">
	<div class="innerContainer w1080 topPadding4">
		<div class="container">
			<div class="row gutterSpaceWide middle-lg middle-md">
				<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2 class="postTitle" style="margin-bottom: 25px;"><?php echo esc_html_e( 'Looks like a rip current tried to pull you to a page that doesn&#8217;t exist.' ); ?></h2>
					<h3>
					 	<?php echo esc_html_e( 'Need help navigating your way to the right page?' ); ?>
					</h3>
					<ul style="margin-bottom: 0;">
						<li><a href="<?php echo get_page_link( get_page_by_path( 'services-activities' ) ); ?>"><?php echo esc_html_e('Services and programs'); ?></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'news-and-events' ) ); ?>"><?php echo esc_html_e('News and events'); ?></a></li>
						<li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e('Home'); ?></a></li>
						<li><a href="#searchForm"><?php esc_html_e('Search'); ?></a></li>
						<li><a href="<?php echo get_page_link( get_page_by_path( 'contact-us' ) ); ?>"><?php esc_html_e('Contact us'); ?></a></li>
					</ul>
				</div>
				<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholders/westpoint_lighthouse.jpg">
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
