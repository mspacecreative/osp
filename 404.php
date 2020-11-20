<?php get_header(); ?>
<div class="contentWrap">
	<div class="innerContainer w1080 topPadding4">
		<h1 class="postTitle"><?php echo esc_html_e( 'Page not found' ); ?></h1>
		<h2>
		 	<a href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html_e( 'Return home?' ); ?></a>
		</h2>
	</div>
</div>

<?php get_footer(); ?>
