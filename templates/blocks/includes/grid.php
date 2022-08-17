<ul class="photoGrid">
							
<?php
$images = get_sub_field('photo_gallery');
$size = 'large';
    
if( $images ):
foreach( $images as $image ):
$url = get_field('external_url', $image['id']);
$shrink = get_field('shrink_image', $image['id']); ?>
    
<li>
    <?php if ( $url && $shrink ) {
        echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
    } elseif ( $url ) {
        echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
    } else {
        echo wp_get_attachment_image( $image['ID'], $size );
    } ?>
</li>
    
<?php 
endforeach;
endif; ?>
</ul>