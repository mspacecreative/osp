<?php
$images = get_field('gallery');
$size = 'photo-strip';

if ( $images ): ?>
<section class="section3 container" style="max-width: 100%;">
	<div class="stripOuter">
		<div class="stripInner">
			<div class="row imageStripContainer">
				<?php foreach( $images as $image_id ): ?>
				<div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="imageStripInner">
						<?php echo wp_get_attachment_image( $image_id, $size ); ?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>