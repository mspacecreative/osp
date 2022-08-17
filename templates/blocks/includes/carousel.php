<div class="carousel who_we_are">
							
<?php
$images = get_sub_field('photo_gallery');
$size = 'large';
    
if( $images ):
foreach( $images as $image ): ?>
    
<div>
    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
</div>
    
<?php 
endforeach;
endif; ?>

</div>