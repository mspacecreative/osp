<?php
include 'includes/section-padding.php';
include 'includes/section-width.php'; ?>

<section class="section posts--block<?php echo $sectionpadding ?>">
	<div class="innerContainer">
		<div class="container<?php echo $sectionwidth ?>">
			<?php 
			include 'includes/content-type-loop.php';
			include 'includes/cta-button-single.php'; ?>
		</div>
	</div>
</section>