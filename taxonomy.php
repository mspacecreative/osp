<?php get_header(); ?>

<div class="contentWrap">
	
	<section>
		 <div class="innerContainer w1080 section4">
		 	<h1 class="postTitle"><?php echo $term->name ?></h1>
		 </div>
	</section>
	
	<?php get_template_part('templates/loops/loop-group'); ?>
	
</div>

<?php get_footer(); ?>