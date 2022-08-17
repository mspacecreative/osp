<?php
$img = get_sub_field('image');
if( !empty( $img ) ): ?>
<img class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
<?php endif; ?>