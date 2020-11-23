<?php if( have_rows('content_cta_button') ): ?>
<?php while( have_rows('content_cta_button') ): the_row(); ?>
	<?php if ( get_sub_field('content_internal_link') ): ?>
	<ul class="actions">
		<li><a href="<?php the_sub_field('content_internal_link'); ?>" class="light button blue"><?php the_sub_field('content_button_label'); ?></a></li>
	</ul>
	<?php elseif ( get_sub_field('content_external_link') ): ?>
	<ul class="actions">
		<li><a href="<?php the_sub_field('content_external_link'); ?>" class="light button blue" target="_blank"><?php the_sub_field('content_button_label'); ?></a></li>
	</ul>
	<?php elseif ( get_sub_field('content_anchor_link') ): ?>
	<ul class="actions">
		<li><a href="#<?php the_sub_field('content_anchor_link'); ?>" class="light button blue"><?php the_sub_field('content_button_label'); ?></a></li>
	</ul>
	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>