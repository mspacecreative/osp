		</div>
		<!-- /wrapper -->
		
		<!-- footer -->
		<footer class="section">
			<div class="innerContainer">
				
				<!-- logos -->
				<div class="container topMargin25">
					<?php $footercopy = get_field('footer_copy', 'options');
					
					if ( $footercopy ): ?>
					<p><?php echo $footercopy ?></p>
					<?php endif; ?>
					<div class="row middle-lg middle-md">
						<div class="col col-lg-7 col-md-7 col-sm-12 col-xs-12 borderRight">
							<div class="container">
								<?php
								$images = get_field('logos', 'options');
								$size = 'medium';
									
								if( $images ): ?>
								
								<div class="row middle-lg middle-md middle-sm middle-xs footerLogos">
									
									<?php 
									foreach( $images as $image ):
									$url = get_field('external_url', $image);
									$shrink = get_field('shrink_image', $image); ?>
									
									<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-6">
										<?php 
										if ( $url && $shrink ) {
											echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image, $size ) . '</a></div>';
										} elseif ( $url ) {
											echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image, $size ) . '</a>';
										} else {
											echo wp_get_attachment_image( $image, $size );
										} 
										?>
									</div>
									
									<?php endforeach; ?>
									
								</div>
								
								<?php endif; ?>
							</div>
						</div>
						
						<?php 
						if ( have_rows('right_column_logos', 'options') ):
						while ( have_rows('right_column_logos', 'options') ): the_row();
						$logo = get_sub_field('cos_logo', 'options');
						$acoa = get_sub_field('acoa_logo', 'options');
						$url = get_field('external_url', $logo);
						$acoaurl = get_field('external_url', $acoa);
						$shrink = get_field('shrink_image', $logo);
						$size = 'medium';
									
						if( $logo && $acoa ): ?>
						
						<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 rightColumn">
							<div class="row middle-lg middle-md middle-sm middle-xs cosLogo">
							<?php 
							if ( $url && $shrink ): ?>
								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
									<div class="shrinkLogo">
										<a href="<?php echo $url ?>" target="_blank"><?php echo wp_get_attachment_image( $logo, $size ); ?></a>
									</div>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
									<div class="shrinkLogo">
										<a href="<?php echo $acoaurl ?>" target="_blank"><?php echo wp_get_attachment_image( $acoa, $size ); ?></a>
									</div>
								</div>
							
							<?php elseif ( $url ): ?>
								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
									<a href="<?php echo $url ?>" target="_blank"><?php echo wp_get_attachment_image( $logo, $size ); ?></a>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
									<a href="<?php echo $acoaurl ?>" target="_blank"><?php echo wp_get_attachment_image( $acoa, $size ); ?></a>
								</div>
								
							<?php else : ?>
								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
									<?php echo wp_get_attachment_image( $logo, $size ); ?>
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-6">
									<?php echo wp_get_attachment_image( $acoa, $size ); ?>
								</div>
							<?php endif; ?>
							</div>
						</div>
						
						<?php endif;
						
						endwhile;
						endif; ?>
					</div>
					<!-- foot note -->
					<?php 
					$footnote = get_field('foot_note', 'options');
					if ( $footnote ) {
						echo '<p style="margin-top:25px; max-width: 450px;">' . $footnote . '</p>';
					} ?>
				</div>
				<!-- / logos -->
				
			</div>
			
			<!-- credits -->
			<section class="credits" role="contentinfo">
	
				<div class="innerContainer">
					<div class="row between-lg between-md nolColBottomPadding bottomPadding25 middle-lg middle-md middle-sm">
						<!-- credits -->
						<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div>
								<p><?php _e('&copy; '); echo date('Y'); _e(' '); bloginfo('name'); _e('. All rights reserved.'); ?> <a class="copyRightLink" href="<?php echo home_url( 'privacy-statement' ) ?>"><?php echo __('Privacy Statement'); ?></a></p>
							</div>
						</div>
						<!-- / credits -->
						<!-- copyright -->
						<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 social_footer">
							<?php 
							if ( have_rows('social_media', 'options') ) {
								echo '<ul class="social">';
								while ( have_rows('social_media', 'options') ) {
									the_row();
									$link = get_sub_field('link', 'options');
									$icon = get_sub_field('icon', 'options');
									
									echo '<li><a href="' . $link . '" target="_blank"><i class="fa ' . $icon . '"></i></a></li>';
								}
								echo '</ul>';
							} ?>
						</div>
						<!-- /copyright -->
					</div>
				</div>
				
			</section>
			<!-- / credits -->
		
		</footer>
		<!-- / footer -->

		<?php 
		get_template_part('templates/modal');
		wp_footer(); ?>

	</body>
</html>
