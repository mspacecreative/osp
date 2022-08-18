<?php
$staticimg = get_sub_field('static_image');
if( !empty( $img ) ): ?>
<img class="full-width" src="<?php echo esc_url($staticimg['url']); ?>" alt="<?php echo esc_attr($staticimg['alt']); ?>">
<?php endif; ?>