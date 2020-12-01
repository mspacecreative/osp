<?php get_header(); ?>

<div class="contentWrap">
	
	<section>
		 <div class="innerContainer w1080 section4">
		 	<h1 class="postTitle"><?php echo $term->name ?></h1>
		 </div>
	</section>
	
	<?php get_template_part('templates/loops/loop-researchers-and-students'); ?>
	
</div>

<?php get_footer(); ?>