<?php if( have_rows('content_cta_button') ): ?>
<?php while( have_rows('content_cta_button') ): the_row(); ?>
	<?php if ( get_sub_field('content_internal_link') ): ?>
	<ul class="actions<?php if ( $align ): echo ' '; echo $align; endif; ?>">
		<li><a href="<?php the_sub_field('content_internal_link'); ?>" class="btn light"><?php the_sub_field('content_button_label'); ?></a></li>
	</ul>
	<?php elseif ( get_sub_field('content_external_link') ): ?>
	<ul class="actions<?php if ( $align ): echo ' '; echo $align; endif; ?>">
		<li><a href="<?php the_sub_field('content_external_link'); ?>" class="btn light" target="_blank"><?php the_sub_field('content_button_label'); ?></a></li>
	</ul>
	<?php elseif ( get_sub_field('content_anchor_link') ): ?>
	<ul class="actions<?php if ( $align ): echo ' '; echo $align; endif; ?>">
		<li><a href="#<?php the_sub_field('content_anchor_link'); ?>" class="btn light"><?php the_sub_field('content_button_label'); ?></a></li>
	</ul>
	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>