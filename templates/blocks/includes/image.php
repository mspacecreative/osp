<?php
$staticimg = get_sub_field('static_image');
if( !empty( $img ) ): ?>
<img class="full-width" src="<?php echo $staticimg['url']; ?>" alt="<?php echo esc_attr($staticimg['alt']); ?>">
<?php endif; ?>