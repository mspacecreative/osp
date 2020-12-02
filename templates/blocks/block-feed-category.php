<?php 
$heading = get_field('heading');
$category = get_field('group');

if ( $category ) {

	$args = array(
		'posts_per_page'=> 3,
		'category_name' => $category->slug,
	);

	$loop = new WP_Query( $args );
	if ( $loop->have_posts() ) : ?>
	
	<section class="section">
		<div class="offsetBg"></div>
		
		<div class="innerContainer w1080 clearfix">
			<?php 
			if ( $heading ) {
				echo '<h2 class="light">' . $heading . '</h2>';
			} else {
				echo '<h2 class="light">' . __('What&#8217;s new') . '</h2>';
			} ?>
			
			<div class="row gutterSpaceWide feedGrid">
				
				<?php while ( $loop->have_posts() ) : $loop->the_post();
				$featuredimg = get_the_post_thumbnail( get_the_ID(), 'card-feature' );
				$title = get_the_title();
				$permalink = get_the_permalink( get_the_ID() );
				$excerpt = get_the_excerpt();
				$url = get_field('url', get_the_ID());
			$cannedimg = get_field('image_selection');
			
			switch ( $cannedimg ) {
				case 'pan-atl-partner':
					$img = '
					<div class="cannedImgContainer">
						<img src="' . get_template_directory_uri() . '/assets/img/placeholders/osp-ocean-bg-feature.jpg">
						<div class="cannedImgOverlay">
							<h3>' . __('Pan-Atlantic Partner News') . '</h3>
							<span>
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 451.1 148.8" style="enable-background:new 0 0 451.1 148.8;" xml:space="preserve">
									<g>
										<g>
											<path fill="#fff" d="M234.9,42.4h-7.4c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V10.8c0-3.5,0.9-6.1,2.8-8
											c1.9-1.8,4.6-2.8,8.1-2.8h7.4c3.5,0,6.2,0.9,8.1,2.8c1.9,1.8,2.8,4.5,2.8,8v20.9c0,3.5-0.9,6.1-2.8,8
											C241.1,41.5,238.4,42.4,234.9,42.4z M228.8,35.2h4.7c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3V11.2c0-1.4-0.3-2.4-0.9-3
											c-0.6-0.6-1.6-0.9-3-0.9h-4.7c-1.4,0-2.4,0.3-3,0.9c-0.6,0.6-0.9,1.6-0.9,3v20.1c0,1.4,0.3,2.4,0.9,3
											C226.4,34.9,227.4,35.2,228.8,35.2z"></path>
											
											<path fill="#fff" d="M271.1,42.4h-7.2c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V10.8c0-3.5,0.9-6.1,2.8-8
											c1.9-1.8,4.6-2.8,8.1-2.8h7.2c3.4,0,6.1,0.9,8,2.8c1.9,1.9,2.9,4.5,2.9,8v3.1c0,1-0.5,1.5-1.5,1.5H275c-0.9,0-1.4-0.5-1.4-1.5
											v-2.7c0-1.4-0.3-2.4-0.9-3c-0.6-0.6-1.6-0.9-3-0.9h-4.5c-1.4,0-2.3,0.3-2.9,0.9c-0.6,0.6-0.9,1.6-0.9,3v20.1c0,1.4,0.3,2.4,0.9,3
											c0.6,0.6,1.6,0.9,2.9,0.9h4.5c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3v-2.7c0-1,0.5-1.5,1.4-1.5h5.5c1,0,1.5,0.5,1.5,1.5v3.1
											c0,3.4-1,6.1-2.9,8C277.2,41.5,274.6,42.4,271.1,42.4z"></path>
											
											<path fill="#fff" d="M312.2,42.4h-21.6c-0.9,0-1.4-0.5-1.4-1.4V1.4c0-0.9,0.5-1.4,1.4-1.4h21.6c0.9,0,1.3,0.5,1.3,1.4v4.5
											c0,0.9-0.4,1.4-1.3,1.4h-13.8c-0.5,0-0.8,0.2-0.8,0.7v8.6c0,0.5,0.3,0.7,0.8,0.7h11.3c0.9,0,1.4,0.5,1.4,1.4v4.5
											c0,0.9-0.5,1.4-1.4,1.4h-11.3c-0.5,0-0.8,0.2-0.8,0.7v9.2c0,0.5,0.3,0.7,0.8,0.7h13.8c0.9,0,1.3,0.5,1.3,1.4v4.5
											C313.5,42,313.1,42.4,312.2,42.4z"></path>
											
											<path fill="#fff" d="M325.3,42.4h-6.3c-0.8,0-1.1-0.5-0.8-1.4l10.4-39.7c0.3-0.9,1-1.4,2-1.4h8.8c1.1,0,1.8,0.5,2,1.4l10.4,39.7
											c0.3,0.9,0,1.4-0.8,1.4h-6.3c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.4-1.1l-1.8-7.3h-12.9l-1.8,7.3c-0.1,0.5-0.2,0.9-0.4,1.1
											S325.7,42.4,325.3,42.4z M334.8,8l-4.8,19.1h9.8L335.1,8H334.8z"></path>
											
											<path fill="#fff" d="M364.5,42.4H359c-0.9,0-1.4-0.5-1.4-1.4V1.4c0-0.9,0.5-1.4,1.4-1.4h5c0.9,0,1.5,0.3,1.8,0.9l13.3,25h0.3V1.4
											c0-0.9,0.5-1.4,1.4-1.4h5.5c0.9,0,1.4,0.5,1.4,1.4v39.7c0,0.9-0.5,1.4-1.4,1.4h-4.8c-1,0-1.7-0.4-2.1-1.3l-13.2-24.6h-0.3v24.5
											C365.9,42,365.4,42.4,364.5,42.4z"></path>
											
											<path fill="#fff" d="M216.2,84.8v-1.3c0-0.9,0.5-1.4,1.4-1.4h5.6c0.9,0,1.4,0.5,1.4,1.4V84c0,1.7,0.3,2.8,1,3.4s1.9,0.9,3.6,0.9
											h3.1c1.7,0,2.9-0.3,3.6-1c0.7-0.7,1-1.9,1-3.7v-0.8c0-1.3-0.5-2.3-1.6-2.9c-1-0.7-2.3-1.1-3.9-1.2c-1.5-0.1-3.2-0.4-5-0.8
											c-1.8-0.4-3.4-0.9-5-1.5c-1.5-0.6-2.8-1.8-3.9-3.5c-1-1.7-1.6-4-1.6-6.7V64c0-3.4,1-6.1,2.9-8c1.9-1.9,4.6-2.8,8.1-2.8h6.6
											c3.5,0,6.2,0.9,8.1,2.8c1.9,1.9,2.9,4.6,2.9,8v1.3c0,0.9-0.5,1.4-1.4,1.4h-5.6c-0.9,0-1.4-0.5-1.4-1.4v-0.4c0-1.7-0.3-2.9-1-3.5
											c-0.7-0.6-1.9-0.9-3.6-0.9h-2.6c-1.8,0-3,0.3-3.7,1c-0.6,0.7-1,2-1,4v1.3c0,2.1,1.8,3.3,5.4,3.6c3.7,0.3,7.1,1.1,10,2.2
											c1.5,0.7,2.8,1.8,3.9,3.5c1,1.7,1.6,3.9,1.6,6.5v2.2c0,3.4-1,6.1-2.9,8c-1.9,1.9-4.6,2.8-8.1,2.8h-7.2c-3.4,0-6.1-0.9-8.1-2.8
											C217.2,90.9,216.2,88.2,216.2,84.8z"></path>
											
											<path fill="#fff" d="M266,95.6h-5.5c-1,0-1.5-0.5-1.5-1.4V61.2c0-0.5-0.2-0.7-0.7-0.7h-7.5c-0.9,0-1.4-0.5-1.4-1.4v-4.5
											c0-0.9,0.5-1.4,1.4-1.4h25c0.9,0,1.4,0.5,1.4,1.4v4.5c0,0.9-0.5,1.4-1.4,1.4h-7.5c-0.5,0-0.8,0.2-0.8,0.7v33.1
											C267.4,95.2,266.9,95.6,266,95.6z"></path>
											
											<path fill="#fff" d="M286.5,95.6h-6.3c-0.8,0-1.1-0.5-0.8-1.4l10.4-39.7c0.3-0.9,1-1.4,2-1.4h8.8c1.1,0,1.8,0.5,2,1.4L313,94.3
											c0.3,0.9,0,1.4-0.8,1.4h-6.3c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.4-1.1l-1.8-7.3h-12.9l-1.8,7.3c-0.1,0.5-0.2,0.9-0.4,1.1
											S287,95.6,286.5,95.6z M296.1,61.2l-4.8,19.1h9.8l-4.8-19.1H296.1z"></path>
											
											<path fill="#fff" d="M325.9,95.6h-5.6c-0.9,0-1.4-0.5-1.4-1.4V54.6c0-0.9,0.5-1.4,1.4-1.4H336c3.4,0,6.1,0.9,8.1,2.8
											c1.9,1.9,2.9,4.6,2.9,8v5.1c0,5-2,8.3-5.9,9.9v0.3l7.1,14.7c0.4,1.1,0,1.6-1.1,1.6h-5.3c-0.8,0-1.4-0.1-1.7-0.3
											c-0.4-0.2-0.6-0.5-0.9-1.1L332.5,80H328c-0.5,0-0.8,0.2-0.8,0.7v13.5C327.2,95.2,326.8,95.6,325.9,95.6z M328,73.3h6.5
											c1.4,0,2.4-0.3,3.1-0.9c0.7-0.6,1-1.6,1-2.9v-5.1c0-1.4-0.3-2.4-1-3c-0.7-0.6-1.7-0.9-3.1-0.9H328c-0.5,0-0.7,0.2-0.7,0.7v11.4
											C327.2,73,327.5,73.3,328,73.3z"></path>
											
											<path fill="#fff" d="M368.1,95.6h-5.5c-1,0-1.5-0.5-1.5-1.4V61.2c0-0.5-0.2-0.7-0.7-0.7h-7.5c-0.9,0-1.4-0.5-1.4-1.4v-4.5
											c0-0.9,0.5-1.4,1.4-1.4h25c0.9,0,1.4,0.5,1.4,1.4v4.5c0,0.9-0.5,1.4-1.4,1.4h-7.5c-0.5,0-0.8,0.2-0.8,0.7v33.1
											C369.5,95.2,369,95.6,368.1,95.6z"></path>
											
											<path fill="#fff" d="M407.5,53.2h5.5c1,0,1.5,0.4,1.5,1.3v30.4c0,3.4-1,6.1-2.9,8c-1.9,1.9-4.6,2.8-8,2.8h-7.3
											c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V54.6c0-0.9,0.5-1.4,1.4-1.4h5.6c0.9,0,1.4,0.5,1.4,1.4v29.9c0,1.4,0.3,2.4,0.9,3
											c0.6,0.6,1.6,0.9,2.9,0.9h4.6c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3V54.6C406.1,53.7,406.6,53.2,407.5,53.2z"></path>
											
											<path fill="#fff" d="M429.8,95.6h-5.6c-0.9,0-1.4-0.5-1.4-1.4V54.6c0-0.9,0.5-1.4,1.4-1.4h16.1c3.4,0,6.1,0.9,8,2.8
											c1.9,1.9,2.8,4.5,2.8,8v6.3c0,3.4-0.9,6.1-2.8,8c-1.9,1.9-4.6,2.8-8,2.8H432c-0.5,0-0.8,0.2-0.8,0.7v12.5
											C431.2,95.2,430.7,95.6,429.8,95.6z M431.9,73.7h7c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-2.9v-5.5c0-1.4-0.3-2.4-0.9-3
											c-0.6-0.6-1.6-0.9-3-0.9h-7c-0.5,0-0.7,0.2-0.7,0.7V73C431.2,73.5,431.4,73.7,431.9,73.7z"></path>
											
											<path fill="#fff" d="M221.2,148.4h-1.9c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h15.2c2.9,0,5.1,0.8,6.8,2.5
											c1.7,1.7,2.5,4,2.5,6.9v7.7c0,2.9-0.8,5.2-2.5,6.9c-1.7,1.7-3.9,2.5-6.8,2.5h-11.9c-0.4,0-0.7,0.2-0.7,0.5v14.7
											C221.9,148.1,221.6,148.4,221.2,148.4z M222.5,129.4h11.6c2,0,3.6-0.6,4.6-1.7c1.1-1.1,1.6-2.7,1.6-4.8v-7.5
											c0-2.1-0.5-3.7-1.6-4.9c-1.1-1.1-2.6-1.7-4.6-1.7h-11.6c-0.4,0-0.7,0.2-0.7,0.6v19.3C221.9,129.2,222.1,129.4,222.5,129.4z"></path>
											
											<path fill="#fff" d="M255.8,148.4h-1.9c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h15.1c2.9,0,5.1,0.8,6.8,2.5
											c1.7,1.7,2.5,4,2.5,6.9v6.3c0,2.5-0.6,4.5-1.9,6.1c-1.3,1.6-3,2.6-5.1,3v0.3l7.9,16.6c0.3,0.5,0.1,0.8-0.5,0.8h-2
											c-0.6,0-1-0.3-1.2-0.8l-7.8-16.6h-10.4c-0.4,0-0.7,0.2-0.7,0.6v16C256.5,148.1,256.2,148.4,255.8,148.4z M257.1,128.1h11.4
											c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.7-2.7,1.7-4.8v-6.2c0-2.1-0.6-3.7-1.7-4.8c-1.1-1.1-2.7-1.7-4.7-1.7h-11.4c-0.4,0-0.7,0.2-0.7,0.6
											v18C256.5,127.9,256.7,128.1,257.1,128.1z"></path>
											
											<path fill="#fff" d="M305.1,148.4H297c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-23.7c0-2.9,0.8-5.2,2.5-6.9
											c1.7-1.7,3.9-2.5,6.8-2.5h8.1c2.9,0,5.1,0.8,6.8,2.5c1.7,1.7,2.5,4,2.5,6.9V139c0,2.9-0.8,5.2-2.5,6.9
											C310.2,147.5,308,148.4,305.1,148.4z M297.3,145.4h7.5c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9v-23.4c0-2.1-0.5-3.7-1.6-4.9
											c-1.1-1.1-2.6-1.7-4.7-1.7h-7.5c-2,0-3.6,0.6-4.6,1.7c-1.1,1.1-1.6,2.8-1.6,4.8v23.4c0,2.1,0.5,3.7,1.6,4.8
											C293.7,144.8,295.3,145.4,297.3,145.4z"></path>
											
											<path fill="#fff" d="M344.4,105.9h1.8c0.5,0,0.7,0.2,0.7,0.7V139c0,2.9-0.8,5.2-2.5,6.9c-1.7,1.7-3.9,2.5-6.8,2.5h-6.6
											c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-5.5c0-0.5,0.2-0.7,0.7-0.7h1.9c0.5,0,0.7,0.2,0.7,0.7v5.3c0,2.1,0.5,3.7,1.6,4.9
											c1.1,1.1,2.6,1.7,4.6,1.7h6c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9v-32.1C343.7,106.2,343.9,105.9,344.4,105.9z"></path>
											
											<path fill="#fff" d="M378.9,148.4h-20.4c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h20.4c0.5,0,0.8,0.2,0.8,0.7v1.5
											c0,0.5-0.3,0.7-0.8,0.7h-17.1c-0.4,0-0.7,0.2-0.7,0.6v15.2c0,0.4,0.2,0.6,0.7,0.6h15.2c0.5,0,0.7,0.2,0.7,0.7v1.5
											c0,0.5-0.2,0.7-0.7,0.7h-15.2c-0.4,0-0.7,0.2-0.7,0.6v16c0,0.4,0.2,0.6,0.7,0.6h17.1c0.5,0,0.8,0.2,0.8,0.7v1.5
											C379.7,148.1,379.5,148.4,378.9,148.4z"></path>
											
											<path fill="#fff" d="M406.5,148.4h-8.3c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-23.7c0-2.9,0.8-5.2,2.5-6.9
											c1.7-1.7,3.9-2.5,6.8-2.5h8.3c2.9,0,5.1,0.8,6.8,2.5c1.7,1.7,2.5,4,2.5,6.9v3.2c0,0.5-0.2,0.8-0.7,0.8h-1.8
											c-0.5,0-0.7-0.3-0.7-0.8v-3.1c0-2.1-0.5-3.7-1.6-4.9c-1.1-1.1-2.6-1.7-4.7-1.7h-7.7c-2,0-3.6,0.6-4.6,1.7
											c-1.1,1.1-1.6,2.8-1.6,4.8v23.4c0,2.1,0.5,3.7,1.6,4.8c1.1,1.1,2.6,1.7,4.6,1.7h7.7c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9
											v-3.1c0-0.5,0.2-0.8,0.7-0.8h1.8c0.5,0,0.7,0.3,0.7,0.8v3.2c0,2.9-0.8,5.2-2.5,6.9C411.6,147.5,409.4,148.4,406.5,148.4z"></path>
											
											<path fill="#fff" d="M434.7,148.4h-1.9c-0.5,0-0.7-0.3-0.7-0.8v-38.1c0-0.4-0.2-0.6-0.7-0.6h-9.6c-0.5,0-0.8-0.2-0.8-0.7v-1.5
											c0-0.5,0.3-0.7,0.8-0.7h23.8c0.5,0,0.8,0.2,0.8,0.7v1.5c0,0.5-0.3,0.7-0.8,0.7H436c-0.4,0-0.7,0.2-0.7,0.6v38.1
											C435.3,148.1,435.1,148.4,434.7,148.4z"></path>
										</g>
										
										<g>
											<path fill="#fff" d="M197.9,3.5c-4.6,9-9.2,18.1-13.8,27.1c-1.5,2.9-2.3,3.2-5.2,1.7c-2.7-1.4-5.4-3.1-8.1-4.7
											c-2-1.2-4-2.4-6.3-3.8c2,9.6,3.8,18.8,5.7,28c1.3,6.4,2.6,12.9,3.8,19.3c0.3,1.7,0,3.3-1.8,4.1c-1.8,0.8-3-0.2-4.1-1.4
											c-4.3-4.9-8.6-9.7-13-14.6c-2.1-2.4-4.2-4.8-6.5-7.3c-1.2,2.8-2.2,5.3-3.3,7.8c-1.8,4-3.9,5.5-8.2,4.8c-4.7-0.7-9.2-2-13.8-3.1
											c-2.1-0.5-4.1-1.2-6.4-1.9c0.4,1.5,0.7,2.6,1,3.8c1.8,6.8,3.7,13.6,5.4,20.5c0.9,3.9-1.1,7.9-4.9,9.2c-1.4,0.5-2.8,1-4.6,1.6
											c2.5,2,4.8,3.7,7.2,5.6c-6.2,3.5-14.8,2.7-20.3-2.5c-9.4-8.9-23.8-8.7-32.9-0.1c-1.5,1.4-3.4,2.7-5.4,3.4c-7,2.6-13.4,1.5-19-3.5
											c-4.6-4.1-9.9-6.4-16.3-6.3c-6.2,0.1-12,2.7-16.6,6.8c-2.6,2.2-5.5,3.6-8.4,4.1C1,102.3,0,103.4,0,104.8v0c0,1.7,1.5,3,3.2,2.7
											c4.4-0.8,8.6-2.8,12.1-6c6.8-6.2,17.2-6.2,24.1-0.2c2.8,2.4,5.8,4.5,9.4,5.5c2.4,0.7,4.7,1,7,1.1c5.9,0.1,11.4-2,16.3-6.3
											c4.4-3.9,9.4-5.6,15.3-4.7c3.7,0.6,6.7,2.3,9.5,4.7c8.1,7,17.2,8.3,26.8,3.6c2.5-1.2,4-1.1,6,0.5c2.6,2,5.3,3.7,8,5.6
											c-0.1,0.2-0.1,0.2-0.1,0.5c-6,0.7-10.3,4.4-14.8,7.9c-2.9,2.2-6.4,3.1-10,3c-4.8-0.1-9-2-12.7-5.3c-9.2-8.2-22.4-8.2-31.4,0
											c-3.2,2.9-6.8,4.5-10.5,4.9c-1.4,0.2-2.5,1.3-2.5,2.7v0.3c0,1.7,1.5,3,3.1,2.8c4.7-0.6,9.3-2.8,13.6-6.4c1.4-1.2,2.9-2.3,4.6-3
											c6.9-3,13.2-1.8,19,2.6c2.7,2.1,5.6,4.4,8.7,5.5c8.7,3.1,16.9,1.6,24-4.6c7.8-6.7,17.5-7,24.8-0.5c9.9,8.8,22.8,8.8,32.8,0.1
											c3.8-3.3,8.3-4.9,12.7-4.7V1.4C198.6,2.2,198.3,2.8,197.9,3.5z"></path>
											
											<path fill="#fff" d="M157.3,137.9c-9.3-8.2-23.2-7.9-32.6,0.2c-3,2.6-6.2,4.2-9.4,4.8c-1.3,0.2-2.2,1.4-2.2,2.7v0.2
											c0,1.6,1.4,2.9,3,2.7c4.6-0.6,9-2.5,12.9-6c3.7-3.3,8-5.3,13.1-4.9c4.5,0.3,8.2,2.3,11.6,5.3c6.1,5.4,13.3,6.8,21.1,5.4
											c4.6-0.8,8.4-3.2,12-6.3c3.6-3.1,8-4.6,12.3-4.4v-5.7c-5.8-0.1-11.6,1.9-16.5,6.2C174.7,145,165.2,144.9,157.3,137.9z"></path>
										</g>
									</g>
				    		</svg>
							</span>
						</div>
					</div>';
					break;
				case 'partner':
					$img = '
					<div class="cannedImgContainer">
						<img src="' . get_template_directory_uri() . '/assets/img/placeholders/osp-ocean-bg-feature.jpg">
						<div class="cannedImgOverlay">
							<h3>' . __('Partner News') . '</h3>
							<span>
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 451.1 148.8" style="enable-background:new 0 0 451.1 148.8;" xml:space="preserve">
									<g>
										<g>
											<path fill="#fff" d="M234.9,42.4h-7.4c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V10.8c0-3.5,0.9-6.1,2.8-8
											c1.9-1.8,4.6-2.8,8.1-2.8h7.4c3.5,0,6.2,0.9,8.1,2.8c1.9,1.8,2.8,4.5,2.8,8v20.9c0,3.5-0.9,6.1-2.8,8
											C241.1,41.5,238.4,42.4,234.9,42.4z M228.8,35.2h4.7c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3V11.2c0-1.4-0.3-2.4-0.9-3
											c-0.6-0.6-1.6-0.9-3-0.9h-4.7c-1.4,0-2.4,0.3-3,0.9c-0.6,0.6-0.9,1.6-0.9,3v20.1c0,1.4,0.3,2.4,0.9,3
											C226.4,34.9,227.4,35.2,228.8,35.2z"></path>
											
											<path fill="#fff" d="M271.1,42.4h-7.2c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V10.8c0-3.5,0.9-6.1,2.8-8
											c1.9-1.8,4.6-2.8,8.1-2.8h7.2c3.4,0,6.1,0.9,8,2.8c1.9,1.9,2.9,4.5,2.9,8v3.1c0,1-0.5,1.5-1.5,1.5H275c-0.9,0-1.4-0.5-1.4-1.5
											v-2.7c0-1.4-0.3-2.4-0.9-3c-0.6-0.6-1.6-0.9-3-0.9h-4.5c-1.4,0-2.3,0.3-2.9,0.9c-0.6,0.6-0.9,1.6-0.9,3v20.1c0,1.4,0.3,2.4,0.9,3
											c0.6,0.6,1.6,0.9,2.9,0.9h4.5c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3v-2.7c0-1,0.5-1.5,1.4-1.5h5.5c1,0,1.5,0.5,1.5,1.5v3.1
											c0,3.4-1,6.1-2.9,8C277.2,41.5,274.6,42.4,271.1,42.4z"></path>
											
											<path fill="#fff" d="M312.2,42.4h-21.6c-0.9,0-1.4-0.5-1.4-1.4V1.4c0-0.9,0.5-1.4,1.4-1.4h21.6c0.9,0,1.3,0.5,1.3,1.4v4.5
											c0,0.9-0.4,1.4-1.3,1.4h-13.8c-0.5,0-0.8,0.2-0.8,0.7v8.6c0,0.5,0.3,0.7,0.8,0.7h11.3c0.9,0,1.4,0.5,1.4,1.4v4.5
											c0,0.9-0.5,1.4-1.4,1.4h-11.3c-0.5,0-0.8,0.2-0.8,0.7v9.2c0,0.5,0.3,0.7,0.8,0.7h13.8c0.9,0,1.3,0.5,1.3,1.4v4.5
											C313.5,42,313.1,42.4,312.2,42.4z"></path>
											
											<path fill="#fff" d="M325.3,42.4h-6.3c-0.8,0-1.1-0.5-0.8-1.4l10.4-39.7c0.3-0.9,1-1.4,2-1.4h8.8c1.1,0,1.8,0.5,2,1.4l10.4,39.7
											c0.3,0.9,0,1.4-0.8,1.4h-6.3c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.4-1.1l-1.8-7.3h-12.9l-1.8,7.3c-0.1,0.5-0.2,0.9-0.4,1.1
											S325.7,42.4,325.3,42.4z M334.8,8l-4.8,19.1h9.8L335.1,8H334.8z"></path>
											
											<path fill="#fff" d="M364.5,42.4H359c-0.9,0-1.4-0.5-1.4-1.4V1.4c0-0.9,0.5-1.4,1.4-1.4h5c0.9,0,1.5,0.3,1.8,0.9l13.3,25h0.3V1.4
											c0-0.9,0.5-1.4,1.4-1.4h5.5c0.9,0,1.4,0.5,1.4,1.4v39.7c0,0.9-0.5,1.4-1.4,1.4h-4.8c-1,0-1.7-0.4-2.1-1.3l-13.2-24.6h-0.3v24.5
											C365.9,42,365.4,42.4,364.5,42.4z"></path>
											
											<path fill="#fff" d="M216.2,84.8v-1.3c0-0.9,0.5-1.4,1.4-1.4h5.6c0.9,0,1.4,0.5,1.4,1.4V84c0,1.7,0.3,2.8,1,3.4s1.9,0.9,3.6,0.9
											h3.1c1.7,0,2.9-0.3,3.6-1c0.7-0.7,1-1.9,1-3.7v-0.8c0-1.3-0.5-2.3-1.6-2.9c-1-0.7-2.3-1.1-3.9-1.2c-1.5-0.1-3.2-0.4-5-0.8
											c-1.8-0.4-3.4-0.9-5-1.5c-1.5-0.6-2.8-1.8-3.9-3.5c-1-1.7-1.6-4-1.6-6.7V64c0-3.4,1-6.1,2.9-8c1.9-1.9,4.6-2.8,8.1-2.8h6.6
											c3.5,0,6.2,0.9,8.1,2.8c1.9,1.9,2.9,4.6,2.9,8v1.3c0,0.9-0.5,1.4-1.4,1.4h-5.6c-0.9,0-1.4-0.5-1.4-1.4v-0.4c0-1.7-0.3-2.9-1-3.5
											c-0.7-0.6-1.9-0.9-3.6-0.9h-2.6c-1.8,0-3,0.3-3.7,1c-0.6,0.7-1,2-1,4v1.3c0,2.1,1.8,3.3,5.4,3.6c3.7,0.3,7.1,1.1,10,2.2
											c1.5,0.7,2.8,1.8,3.9,3.5c1,1.7,1.6,3.9,1.6,6.5v2.2c0,3.4-1,6.1-2.9,8c-1.9,1.9-4.6,2.8-8.1,2.8h-7.2c-3.4,0-6.1-0.9-8.1-2.8
											C217.2,90.9,216.2,88.2,216.2,84.8z"></path>
											
											<path fill="#fff" d="M266,95.6h-5.5c-1,0-1.5-0.5-1.5-1.4V61.2c0-0.5-0.2-0.7-0.7-0.7h-7.5c-0.9,0-1.4-0.5-1.4-1.4v-4.5
											c0-0.9,0.5-1.4,1.4-1.4h25c0.9,0,1.4,0.5,1.4,1.4v4.5c0,0.9-0.5,1.4-1.4,1.4h-7.5c-0.5,0-0.8,0.2-0.8,0.7v33.1
											C267.4,95.2,266.9,95.6,266,95.6z"></path>
											
											<path fill="#fff" d="M286.5,95.6h-6.3c-0.8,0-1.1-0.5-0.8-1.4l10.4-39.7c0.3-0.9,1-1.4,2-1.4h8.8c1.1,0,1.8,0.5,2,1.4L313,94.3
											c0.3,0.9,0,1.4-0.8,1.4h-6.3c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.4-1.1l-1.8-7.3h-12.9l-1.8,7.3c-0.1,0.5-0.2,0.9-0.4,1.1
											S287,95.6,286.5,95.6z M296.1,61.2l-4.8,19.1h9.8l-4.8-19.1H296.1z"></path>
											
											<path fill="#fff" d="M325.9,95.6h-5.6c-0.9,0-1.4-0.5-1.4-1.4V54.6c0-0.9,0.5-1.4,1.4-1.4H336c3.4,0,6.1,0.9,8.1,2.8
											c1.9,1.9,2.9,4.6,2.9,8v5.1c0,5-2,8.3-5.9,9.9v0.3l7.1,14.7c0.4,1.1,0,1.6-1.1,1.6h-5.3c-0.8,0-1.4-0.1-1.7-0.3
											c-0.4-0.2-0.6-0.5-0.9-1.1L332.5,80H328c-0.5,0-0.8,0.2-0.8,0.7v13.5C327.2,95.2,326.8,95.6,325.9,95.6z M328,73.3h6.5
											c1.4,0,2.4-0.3,3.1-0.9c0.7-0.6,1-1.6,1-2.9v-5.1c0-1.4-0.3-2.4-1-3c-0.7-0.6-1.7-0.9-3.1-0.9H328c-0.5,0-0.7,0.2-0.7,0.7v11.4
											C327.2,73,327.5,73.3,328,73.3z"></path>
											
											<path fill="#fff" d="M368.1,95.6h-5.5c-1,0-1.5-0.5-1.5-1.4V61.2c0-0.5-0.2-0.7-0.7-0.7h-7.5c-0.9,0-1.4-0.5-1.4-1.4v-4.5
											c0-0.9,0.5-1.4,1.4-1.4h25c0.9,0,1.4,0.5,1.4,1.4v4.5c0,0.9-0.5,1.4-1.4,1.4h-7.5c-0.5,0-0.8,0.2-0.8,0.7v33.1
											C369.5,95.2,369,95.6,368.1,95.6z"></path>
											
											<path fill="#fff" d="M407.5,53.2h5.5c1,0,1.5,0.4,1.5,1.3v30.4c0,3.4-1,6.1-2.9,8c-1.9,1.9-4.6,2.8-8,2.8h-7.3
											c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V54.6c0-0.9,0.5-1.4,1.4-1.4h5.6c0.9,0,1.4,0.5,1.4,1.4v29.9c0,1.4,0.3,2.4,0.9,3
											c0.6,0.6,1.6,0.9,2.9,0.9h4.6c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3V54.6C406.1,53.7,406.6,53.2,407.5,53.2z"></path>
											
											<path fill="#fff" d="M429.8,95.6h-5.6c-0.9,0-1.4-0.5-1.4-1.4V54.6c0-0.9,0.5-1.4,1.4-1.4h16.1c3.4,0,6.1,0.9,8,2.8
											c1.9,1.9,2.8,4.5,2.8,8v6.3c0,3.4-0.9,6.1-2.8,8c-1.9,1.9-4.6,2.8-8,2.8H432c-0.5,0-0.8,0.2-0.8,0.7v12.5
											C431.2,95.2,430.7,95.6,429.8,95.6z M431.9,73.7h7c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-2.9v-5.5c0-1.4-0.3-2.4-0.9-3
											c-0.6-0.6-1.6-0.9-3-0.9h-7c-0.5,0-0.7,0.2-0.7,0.7V73C431.2,73.5,431.4,73.7,431.9,73.7z"></path>
											
											<path fill="#fff" d="M221.2,148.4h-1.9c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h15.2c2.9,0,5.1,0.8,6.8,2.5
											c1.7,1.7,2.5,4,2.5,6.9v7.7c0,2.9-0.8,5.2-2.5,6.9c-1.7,1.7-3.9,2.5-6.8,2.5h-11.9c-0.4,0-0.7,0.2-0.7,0.5v14.7
											C221.9,148.1,221.6,148.4,221.2,148.4z M222.5,129.4h11.6c2,0,3.6-0.6,4.6-1.7c1.1-1.1,1.6-2.7,1.6-4.8v-7.5
											c0-2.1-0.5-3.7-1.6-4.9c-1.1-1.1-2.6-1.7-4.6-1.7h-11.6c-0.4,0-0.7,0.2-0.7,0.6v19.3C221.9,129.2,222.1,129.4,222.5,129.4z"></path>
											
											<path fill="#fff" d="M255.8,148.4h-1.9c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h15.1c2.9,0,5.1,0.8,6.8,2.5
											c1.7,1.7,2.5,4,2.5,6.9v6.3c0,2.5-0.6,4.5-1.9,6.1c-1.3,1.6-3,2.6-5.1,3v0.3l7.9,16.6c0.3,0.5,0.1,0.8-0.5,0.8h-2
											c-0.6,0-1-0.3-1.2-0.8l-7.8-16.6h-10.4c-0.4,0-0.7,0.2-0.7,0.6v16C256.5,148.1,256.2,148.4,255.8,148.4z M257.1,128.1h11.4
											c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.7-2.7,1.7-4.8v-6.2c0-2.1-0.6-3.7-1.7-4.8c-1.1-1.1-2.7-1.7-4.7-1.7h-11.4c-0.4,0-0.7,0.2-0.7,0.6
											v18C256.5,127.9,256.7,128.1,257.1,128.1z"></path>
											
											<path fill="#fff" d="M305.1,148.4H297c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-23.7c0-2.9,0.8-5.2,2.5-6.9
											c1.7-1.7,3.9-2.5,6.8-2.5h8.1c2.9,0,5.1,0.8,6.8,2.5c1.7,1.7,2.5,4,2.5,6.9V139c0,2.9-0.8,5.2-2.5,6.9
											C310.2,147.5,308,148.4,305.1,148.4z M297.3,145.4h7.5c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9v-23.4c0-2.1-0.5-3.7-1.6-4.9
											c-1.1-1.1-2.6-1.7-4.7-1.7h-7.5c-2,0-3.6,0.6-4.6,1.7c-1.1,1.1-1.6,2.8-1.6,4.8v23.4c0,2.1,0.5,3.7,1.6,4.8
											C293.7,144.8,295.3,145.4,297.3,145.4z"></path>
											
											<path fill="#fff" d="M344.4,105.9h1.8c0.5,0,0.7,0.2,0.7,0.7V139c0,2.9-0.8,5.2-2.5,6.9c-1.7,1.7-3.9,2.5-6.8,2.5h-6.6
											c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-5.5c0-0.5,0.2-0.7,0.7-0.7h1.9c0.5,0,0.7,0.2,0.7,0.7v5.3c0,2.1,0.5,3.7,1.6,4.9
											c1.1,1.1,2.6,1.7,4.6,1.7h6c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9v-32.1C343.7,106.2,343.9,105.9,344.4,105.9z"></path>
											
											<path fill="#fff" d="M378.9,148.4h-20.4c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h20.4c0.5,0,0.8,0.2,0.8,0.7v1.5
											c0,0.5-0.3,0.7-0.8,0.7h-17.1c-0.4,0-0.7,0.2-0.7,0.6v15.2c0,0.4,0.2,0.6,0.7,0.6h15.2c0.5,0,0.7,0.2,0.7,0.7v1.5
											c0,0.5-0.2,0.7-0.7,0.7h-15.2c-0.4,0-0.7,0.2-0.7,0.6v16c0,0.4,0.2,0.6,0.7,0.6h17.1c0.5,0,0.8,0.2,0.8,0.7v1.5
											C379.7,148.1,379.5,148.4,378.9,148.4z"></path>
											
											<path fill="#fff" d="M406.5,148.4h-8.3c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-23.7c0-2.9,0.8-5.2,2.5-6.9
											c1.7-1.7,3.9-2.5,6.8-2.5h8.3c2.9,0,5.1,0.8,6.8,2.5c1.7,1.7,2.5,4,2.5,6.9v3.2c0,0.5-0.2,0.8-0.7,0.8h-1.8
											c-0.5,0-0.7-0.3-0.7-0.8v-3.1c0-2.1-0.5-3.7-1.6-4.9c-1.1-1.1-2.6-1.7-4.7-1.7h-7.7c-2,0-3.6,0.6-4.6,1.7
											c-1.1,1.1-1.6,2.8-1.6,4.8v23.4c0,2.1,0.5,3.7,1.6,4.8c1.1,1.1,2.6,1.7,4.6,1.7h7.7c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9
											v-3.1c0-0.5,0.2-0.8,0.7-0.8h1.8c0.5,0,0.7,0.3,0.7,0.8v3.2c0,2.9-0.8,5.2-2.5,6.9C411.6,147.5,409.4,148.4,406.5,148.4z"></path>
											
											<path fill="#fff" d="M434.7,148.4h-1.9c-0.5,0-0.7-0.3-0.7-0.8v-38.1c0-0.4-0.2-0.6-0.7-0.6h-9.6c-0.5,0-0.8-0.2-0.8-0.7v-1.5
											c0-0.5,0.3-0.7,0.8-0.7h23.8c0.5,0,0.8,0.2,0.8,0.7v1.5c0,0.5-0.3,0.7-0.8,0.7H436c-0.4,0-0.7,0.2-0.7,0.6v38.1
											C435.3,148.1,435.1,148.4,434.7,148.4z"></path>
										</g>
										
										<g>
											<path fill="#fff" d="M197.9,3.5c-4.6,9-9.2,18.1-13.8,27.1c-1.5,2.9-2.3,3.2-5.2,1.7c-2.7-1.4-5.4-3.1-8.1-4.7
											c-2-1.2-4-2.4-6.3-3.8c2,9.6,3.8,18.8,5.7,28c1.3,6.4,2.6,12.9,3.8,19.3c0.3,1.7,0,3.3-1.8,4.1c-1.8,0.8-3-0.2-4.1-1.4
											c-4.3-4.9-8.6-9.7-13-14.6c-2.1-2.4-4.2-4.8-6.5-7.3c-1.2,2.8-2.2,5.3-3.3,7.8c-1.8,4-3.9,5.5-8.2,4.8c-4.7-0.7-9.2-2-13.8-3.1
											c-2.1-0.5-4.1-1.2-6.4-1.9c0.4,1.5,0.7,2.6,1,3.8c1.8,6.8,3.7,13.6,5.4,20.5c0.9,3.9-1.1,7.9-4.9,9.2c-1.4,0.5-2.8,1-4.6,1.6
											c2.5,2,4.8,3.7,7.2,5.6c-6.2,3.5-14.8,2.7-20.3-2.5c-9.4-8.9-23.8-8.7-32.9-0.1c-1.5,1.4-3.4,2.7-5.4,3.4c-7,2.6-13.4,1.5-19-3.5
											c-4.6-4.1-9.9-6.4-16.3-6.3c-6.2,0.1-12,2.7-16.6,6.8c-2.6,2.2-5.5,3.6-8.4,4.1C1,102.3,0,103.4,0,104.8v0c0,1.7,1.5,3,3.2,2.7
											c4.4-0.8,8.6-2.8,12.1-6c6.8-6.2,17.2-6.2,24.1-0.2c2.8,2.4,5.8,4.5,9.4,5.5c2.4,0.7,4.7,1,7,1.1c5.9,0.1,11.4-2,16.3-6.3
											c4.4-3.9,9.4-5.6,15.3-4.7c3.7,0.6,6.7,2.3,9.5,4.7c8.1,7,17.2,8.3,26.8,3.6c2.5-1.2,4-1.1,6,0.5c2.6,2,5.3,3.7,8,5.6
											c-0.1,0.2-0.1,0.2-0.1,0.5c-6,0.7-10.3,4.4-14.8,7.9c-2.9,2.2-6.4,3.1-10,3c-4.8-0.1-9-2-12.7-5.3c-9.2-8.2-22.4-8.2-31.4,0
											c-3.2,2.9-6.8,4.5-10.5,4.9c-1.4,0.2-2.5,1.3-2.5,2.7v0.3c0,1.7,1.5,3,3.1,2.8c4.7-0.6,9.3-2.8,13.6-6.4c1.4-1.2,2.9-2.3,4.6-3
											c6.9-3,13.2-1.8,19,2.6c2.7,2.1,5.6,4.4,8.7,5.5c8.7,3.1,16.9,1.6,24-4.6c7.8-6.7,17.5-7,24.8-0.5c9.9,8.8,22.8,8.8,32.8,0.1
											c3.8-3.3,8.3-4.9,12.7-4.7V1.4C198.6,2.2,198.3,2.8,197.9,3.5z"></path>
											
											<path fill="#fff" d="M157.3,137.9c-9.3-8.2-23.2-7.9-32.6,0.2c-3,2.6-6.2,4.2-9.4,4.8c-1.3,0.2-2.2,1.4-2.2,2.7v0.2
											c0,1.6,1.4,2.9,3,2.7c4.6-0.6,9-2.5,12.9-6c3.7-3.3,8-5.3,13.1-4.9c4.5,0.3,8.2,2.3,11.6,5.3c6.1,5.4,13.3,6.8,21.1,5.4
											c4.6-0.8,8.4-3.2,12-6.3c3.6-3.1,8-4.6,12.3-4.4v-5.7c-5.8-0.1-11.6,1.9-16.5,6.2C174.7,145,165.2,144.9,157.3,137.9z"></path>
										</g>
									</g>
				    		</svg>
						</div>
					</div>';
					break;
				default:
					$img = '
					<div class="cannedImgContainer">
						<img src="' . get_template_directory_uri() . '/assets/img/placeholders/osp-ocean-bg-feature.jpg">
						<div class="cannedImgOverlay">
							<h3>' . __('Partner News') . '</h3>
							<span>
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 451.1 148.8" style="enable-background:new 0 0 451.1 148.8;" xml:space="preserve">
									<g>
										<g>
											<path fill="#fff" d="M234.9,42.4h-7.4c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V10.8c0-3.5,0.9-6.1,2.8-8
											c1.9-1.8,4.6-2.8,8.1-2.8h7.4c3.5,0,6.2,0.9,8.1,2.8c1.9,1.8,2.8,4.5,2.8,8v20.9c0,3.5-0.9,6.1-2.8,8
											C241.1,41.5,238.4,42.4,234.9,42.4z M228.8,35.2h4.7c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3V11.2c0-1.4-0.3-2.4-0.9-3
											c-0.6-0.6-1.6-0.9-3-0.9h-4.7c-1.4,0-2.4,0.3-3,0.9c-0.6,0.6-0.9,1.6-0.9,3v20.1c0,1.4,0.3,2.4,0.9,3
											C226.4,34.9,227.4,35.2,228.8,35.2z"></path>
											
											<path fill="#fff" d="M271.1,42.4h-7.2c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V10.8c0-3.5,0.9-6.1,2.8-8
											c1.9-1.8,4.6-2.8,8.1-2.8h7.2c3.4,0,6.1,0.9,8,2.8c1.9,1.9,2.9,4.5,2.9,8v3.1c0,1-0.5,1.5-1.5,1.5H275c-0.9,0-1.4-0.5-1.4-1.5
											v-2.7c0-1.4-0.3-2.4-0.9-3c-0.6-0.6-1.6-0.9-3-0.9h-4.5c-1.4,0-2.3,0.3-2.9,0.9c-0.6,0.6-0.9,1.6-0.9,3v20.1c0,1.4,0.3,2.4,0.9,3
											c0.6,0.6,1.6,0.9,2.9,0.9h4.5c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3v-2.7c0-1,0.5-1.5,1.4-1.5h5.5c1,0,1.5,0.5,1.5,1.5v3.1
											c0,3.4-1,6.1-2.9,8C277.2,41.5,274.6,42.4,271.1,42.4z"></path>
											
											<path fill="#fff" d="M312.2,42.4h-21.6c-0.9,0-1.4-0.5-1.4-1.4V1.4c0-0.9,0.5-1.4,1.4-1.4h21.6c0.9,0,1.3,0.5,1.3,1.4v4.5
											c0,0.9-0.4,1.4-1.3,1.4h-13.8c-0.5,0-0.8,0.2-0.8,0.7v8.6c0,0.5,0.3,0.7,0.8,0.7h11.3c0.9,0,1.4,0.5,1.4,1.4v4.5
											c0,0.9-0.5,1.4-1.4,1.4h-11.3c-0.5,0-0.8,0.2-0.8,0.7v9.2c0,0.5,0.3,0.7,0.8,0.7h13.8c0.9,0,1.3,0.5,1.3,1.4v4.5
											C313.5,42,313.1,42.4,312.2,42.4z"></path>
											
											<path fill="#fff" d="M325.3,42.4h-6.3c-0.8,0-1.1-0.5-0.8-1.4l10.4-39.7c0.3-0.9,1-1.4,2-1.4h8.8c1.1,0,1.8,0.5,2,1.4l10.4,39.7
											c0.3,0.9,0,1.4-0.8,1.4h-6.3c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.4-1.1l-1.8-7.3h-12.9l-1.8,7.3c-0.1,0.5-0.2,0.9-0.4,1.1
											S325.7,42.4,325.3,42.4z M334.8,8l-4.8,19.1h9.8L335.1,8H334.8z"></path>
											
											<path fill="#fff" d="M364.5,42.4H359c-0.9,0-1.4-0.5-1.4-1.4V1.4c0-0.9,0.5-1.4,1.4-1.4h5c0.9,0,1.5,0.3,1.8,0.9l13.3,25h0.3V1.4
											c0-0.9,0.5-1.4,1.4-1.4h5.5c0.9,0,1.4,0.5,1.4,1.4v39.7c0,0.9-0.5,1.4-1.4,1.4h-4.8c-1,0-1.7-0.4-2.1-1.3l-13.2-24.6h-0.3v24.5
											C365.9,42,365.4,42.4,364.5,42.4z"></path>
											
											<path fill="#fff" d="M216.2,84.8v-1.3c0-0.9,0.5-1.4,1.4-1.4h5.6c0.9,0,1.4,0.5,1.4,1.4V84c0,1.7,0.3,2.8,1,3.4s1.9,0.9,3.6,0.9
											h3.1c1.7,0,2.9-0.3,3.6-1c0.7-0.7,1-1.9,1-3.7v-0.8c0-1.3-0.5-2.3-1.6-2.9c-1-0.7-2.3-1.1-3.9-1.2c-1.5-0.1-3.2-0.4-5-0.8
											c-1.8-0.4-3.4-0.9-5-1.5c-1.5-0.6-2.8-1.8-3.9-3.5c-1-1.7-1.6-4-1.6-6.7V64c0-3.4,1-6.1,2.9-8c1.9-1.9,4.6-2.8,8.1-2.8h6.6
											c3.5,0,6.2,0.9,8.1,2.8c1.9,1.9,2.9,4.6,2.9,8v1.3c0,0.9-0.5,1.4-1.4,1.4h-5.6c-0.9,0-1.4-0.5-1.4-1.4v-0.4c0-1.7-0.3-2.9-1-3.5
											c-0.7-0.6-1.9-0.9-3.6-0.9h-2.6c-1.8,0-3,0.3-3.7,1c-0.6,0.7-1,2-1,4v1.3c0,2.1,1.8,3.3,5.4,3.6c3.7,0.3,7.1,1.1,10,2.2
											c1.5,0.7,2.8,1.8,3.9,3.5c1,1.7,1.6,3.9,1.6,6.5v2.2c0,3.4-1,6.1-2.9,8c-1.9,1.9-4.6,2.8-8.1,2.8h-7.2c-3.4,0-6.1-0.9-8.1-2.8
											C217.2,90.9,216.2,88.2,216.2,84.8z"></path>
											
											<path fill="#fff" d="M266,95.6h-5.5c-1,0-1.5-0.5-1.5-1.4V61.2c0-0.5-0.2-0.7-0.7-0.7h-7.5c-0.9,0-1.4-0.5-1.4-1.4v-4.5
											c0-0.9,0.5-1.4,1.4-1.4h25c0.9,0,1.4,0.5,1.4,1.4v4.5c0,0.9-0.5,1.4-1.4,1.4h-7.5c-0.5,0-0.8,0.2-0.8,0.7v33.1
											C267.4,95.2,266.9,95.6,266,95.6z"></path>
											
											<path fill="#fff" d="M286.5,95.6h-6.3c-0.8,0-1.1-0.5-0.8-1.4l10.4-39.7c0.3-0.9,1-1.4,2-1.4h8.8c1.1,0,1.8,0.5,2,1.4L313,94.3
											c0.3,0.9,0,1.4-0.8,1.4h-6.3c-0.5,0-0.8-0.1-1-0.3c-0.2-0.2-0.3-0.6-0.4-1.1l-1.8-7.3h-12.9l-1.8,7.3c-0.1,0.5-0.2,0.9-0.4,1.1
											S287,95.6,286.5,95.6z M296.1,61.2l-4.8,19.1h9.8l-4.8-19.1H296.1z"></path>
											
											<path fill="#fff" d="M325.9,95.6h-5.6c-0.9,0-1.4-0.5-1.4-1.4V54.6c0-0.9,0.5-1.4,1.4-1.4H336c3.4,0,6.1,0.9,8.1,2.8
											c1.9,1.9,2.9,4.6,2.9,8v5.1c0,5-2,8.3-5.9,9.9v0.3l7.1,14.7c0.4,1.1,0,1.6-1.1,1.6h-5.3c-0.8,0-1.4-0.1-1.7-0.3
											c-0.4-0.2-0.6-0.5-0.9-1.1L332.5,80H328c-0.5,0-0.8,0.2-0.8,0.7v13.5C327.2,95.2,326.8,95.6,325.9,95.6z M328,73.3h6.5
											c1.4,0,2.4-0.3,3.1-0.9c0.7-0.6,1-1.6,1-2.9v-5.1c0-1.4-0.3-2.4-1-3c-0.7-0.6-1.7-0.9-3.1-0.9H328c-0.5,0-0.7,0.2-0.7,0.7v11.4
											C327.2,73,327.5,73.3,328,73.3z"></path>
											
											<path fill="#fff" d="M368.1,95.6h-5.5c-1,0-1.5-0.5-1.5-1.4V61.2c0-0.5-0.2-0.7-0.7-0.7h-7.5c-0.9,0-1.4-0.5-1.4-1.4v-4.5
											c0-0.9,0.5-1.4,1.4-1.4h25c0.9,0,1.4,0.5,1.4,1.4v4.5c0,0.9-0.5,1.4-1.4,1.4h-7.5c-0.5,0-0.8,0.2-0.8,0.7v33.1
											C369.5,95.2,369,95.6,368.1,95.6z"></path>
											
											<path fill="#fff" d="M407.5,53.2h5.5c1,0,1.5,0.4,1.5,1.3v30.4c0,3.4-1,6.1-2.9,8c-1.9,1.9-4.6,2.8-8,2.8h-7.3
											c-3.5,0-6.2-0.9-8.1-2.8c-1.9-1.8-2.8-4.5-2.8-8V54.6c0-0.9,0.5-1.4,1.4-1.4h5.6c0.9,0,1.4,0.5,1.4,1.4v29.9c0,1.4,0.3,2.4,0.9,3
											c0.6,0.6,1.6,0.9,2.9,0.9h4.6c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-3V54.6C406.1,53.7,406.6,53.2,407.5,53.2z"></path>
											
											<path fill="#fff" d="M429.8,95.6h-5.6c-0.9,0-1.4-0.5-1.4-1.4V54.6c0-0.9,0.5-1.4,1.4-1.4h16.1c3.4,0,6.1,0.9,8,2.8
											c1.9,1.9,2.8,4.5,2.8,8v6.3c0,3.4-0.9,6.1-2.8,8c-1.9,1.9-4.6,2.8-8,2.8H432c-0.5,0-0.8,0.2-0.8,0.7v12.5
											C431.2,95.2,430.7,95.6,429.8,95.6z M431.9,73.7h7c1.4,0,2.4-0.3,3-0.9c0.6-0.6,0.9-1.6,0.9-2.9v-5.5c0-1.4-0.3-2.4-0.9-3
											c-0.6-0.6-1.6-0.9-3-0.9h-7c-0.5,0-0.7,0.2-0.7,0.7V73C431.2,73.5,431.4,73.7,431.9,73.7z"></path>
											
											<path fill="#fff" d="M221.2,148.4h-1.9c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h15.2c2.9,0,5.1,0.8,6.8,2.5
											c1.7,1.7,2.5,4,2.5,6.9v7.7c0,2.9-0.8,5.2-2.5,6.9c-1.7,1.7-3.9,2.5-6.8,2.5h-11.9c-0.4,0-0.7,0.2-0.7,0.5v14.7
											C221.9,148.1,221.6,148.4,221.2,148.4z M222.5,129.4h11.6c2,0,3.6-0.6,4.6-1.7c1.1-1.1,1.6-2.7,1.6-4.8v-7.5
											c0-2.1-0.5-3.7-1.6-4.9c-1.1-1.1-2.6-1.7-4.6-1.7h-11.6c-0.4,0-0.7,0.2-0.7,0.6v19.3C221.9,129.2,222.1,129.4,222.5,129.4z"></path>
											
											<path fill="#fff" d="M255.8,148.4h-1.9c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h15.1c2.9,0,5.1,0.8,6.8,2.5
											c1.7,1.7,2.5,4,2.5,6.9v6.3c0,2.5-0.6,4.5-1.9,6.1c-1.3,1.6-3,2.6-5.1,3v0.3l7.9,16.6c0.3,0.5,0.1,0.8-0.5,0.8h-2
											c-0.6,0-1-0.3-1.2-0.8l-7.8-16.6h-10.4c-0.4,0-0.7,0.2-0.7,0.6v16C256.5,148.1,256.2,148.4,255.8,148.4z M257.1,128.1h11.4
											c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.7-2.7,1.7-4.8v-6.2c0-2.1-0.6-3.7-1.7-4.8c-1.1-1.1-2.7-1.7-4.7-1.7h-11.4c-0.4,0-0.7,0.2-0.7,0.6
											v18C256.5,127.9,256.7,128.1,257.1,128.1z"></path>
											
											<path fill="#fff" d="M305.1,148.4H297c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-23.7c0-2.9,0.8-5.2,2.5-6.9
											c1.7-1.7,3.9-2.5,6.8-2.5h8.1c2.9,0,5.1,0.8,6.8,2.5c1.7,1.7,2.5,4,2.5,6.9V139c0,2.9-0.8,5.2-2.5,6.9
											C310.2,147.5,308,148.4,305.1,148.4z M297.3,145.4h7.5c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9v-23.4c0-2.1-0.5-3.7-1.6-4.9
											c-1.1-1.1-2.6-1.7-4.7-1.7h-7.5c-2,0-3.6,0.6-4.6,1.7c-1.1,1.1-1.6,2.8-1.6,4.8v23.4c0,2.1,0.5,3.7,1.6,4.8
											C293.7,144.8,295.3,145.4,297.3,145.4z"></path>
											
											<path fill="#fff" d="M344.4,105.9h1.8c0.5,0,0.7,0.2,0.7,0.7V139c0,2.9-0.8,5.2-2.5,6.9c-1.7,1.7-3.9,2.5-6.8,2.5h-6.6
											c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-5.5c0-0.5,0.2-0.7,0.7-0.7h1.9c0.5,0,0.7,0.2,0.7,0.7v5.3c0,2.1,0.5,3.7,1.6,4.9
											c1.1,1.1,2.6,1.7,4.6,1.7h6c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9v-32.1C343.7,106.2,343.9,105.9,344.4,105.9z"></path>
											
											<path fill="#fff" d="M378.9,148.4h-20.4c-0.4,0-0.7-0.3-0.7-0.8v-40.9c0-0.5,0.2-0.8,0.7-0.8h20.4c0.5,0,0.8,0.2,0.8,0.7v1.5
											c0,0.5-0.3,0.7-0.8,0.7h-17.1c-0.4,0-0.7,0.2-0.7,0.6v15.2c0,0.4,0.2,0.6,0.7,0.6h15.2c0.5,0,0.7,0.2,0.7,0.7v1.5
											c0,0.5-0.2,0.7-0.7,0.7h-15.2c-0.4,0-0.7,0.2-0.7,0.6v16c0,0.4,0.2,0.6,0.7,0.6h17.1c0.5,0,0.8,0.2,0.8,0.7v1.5
											C379.7,148.1,379.5,148.4,378.9,148.4z"></path>
											
											<path fill="#fff" d="M406.5,148.4h-8.3c-2.9,0-5.1-0.8-6.8-2.5c-1.7-1.7-2.5-4-2.5-6.9v-23.7c0-2.9,0.8-5.2,2.5-6.9
											c1.7-1.7,3.9-2.5,6.8-2.5h8.3c2.9,0,5.1,0.8,6.8,2.5c1.7,1.7,2.5,4,2.5,6.9v3.2c0,0.5-0.2,0.8-0.7,0.8h-1.8
											c-0.5,0-0.7-0.3-0.7-0.8v-3.1c0-2.1-0.5-3.7-1.6-4.9c-1.1-1.1-2.6-1.7-4.7-1.7h-7.7c-2,0-3.6,0.6-4.6,1.7
											c-1.1,1.1-1.6,2.8-1.6,4.8v23.4c0,2.1,0.5,3.7,1.6,4.8c1.1,1.1,2.6,1.7,4.6,1.7h7.7c2,0,3.6-0.6,4.7-1.7c1.1-1.1,1.6-2.7,1.6-4.9
											v-3.1c0-0.5,0.2-0.8,0.7-0.8h1.8c0.5,0,0.7,0.3,0.7,0.8v3.2c0,2.9-0.8,5.2-2.5,6.9C411.6,147.5,409.4,148.4,406.5,148.4z"></path>
											
											<path fill="#fff" d="M434.7,148.4h-1.9c-0.5,0-0.7-0.3-0.7-0.8v-38.1c0-0.4-0.2-0.6-0.7-0.6h-9.6c-0.5,0-0.8-0.2-0.8-0.7v-1.5
											c0-0.5,0.3-0.7,0.8-0.7h23.8c0.5,0,0.8,0.2,0.8,0.7v1.5c0,0.5-0.3,0.7-0.8,0.7H436c-0.4,0-0.7,0.2-0.7,0.6v38.1
											C435.3,148.1,435.1,148.4,434.7,148.4z"></path>
										</g>
										
										<g>
											<path fill="#fff" d="M197.9,3.5c-4.6,9-9.2,18.1-13.8,27.1c-1.5,2.9-2.3,3.2-5.2,1.7c-2.7-1.4-5.4-3.1-8.1-4.7
											c-2-1.2-4-2.4-6.3-3.8c2,9.6,3.8,18.8,5.7,28c1.3,6.4,2.6,12.9,3.8,19.3c0.3,1.7,0,3.3-1.8,4.1c-1.8,0.8-3-0.2-4.1-1.4
											c-4.3-4.9-8.6-9.7-13-14.6c-2.1-2.4-4.2-4.8-6.5-7.3c-1.2,2.8-2.2,5.3-3.3,7.8c-1.8,4-3.9,5.5-8.2,4.8c-4.7-0.7-9.2-2-13.8-3.1
											c-2.1-0.5-4.1-1.2-6.4-1.9c0.4,1.5,0.7,2.6,1,3.8c1.8,6.8,3.7,13.6,5.4,20.5c0.9,3.9-1.1,7.9-4.9,9.2c-1.4,0.5-2.8,1-4.6,1.6
											c2.5,2,4.8,3.7,7.2,5.6c-6.2,3.5-14.8,2.7-20.3-2.5c-9.4-8.9-23.8-8.7-32.9-0.1c-1.5,1.4-3.4,2.7-5.4,3.4c-7,2.6-13.4,1.5-19-3.5
											c-4.6-4.1-9.9-6.4-16.3-6.3c-6.2,0.1-12,2.7-16.6,6.8c-2.6,2.2-5.5,3.6-8.4,4.1C1,102.3,0,103.4,0,104.8v0c0,1.7,1.5,3,3.2,2.7
											c4.4-0.8,8.6-2.8,12.1-6c6.8-6.2,17.2-6.2,24.1-0.2c2.8,2.4,5.8,4.5,9.4,5.5c2.4,0.7,4.7,1,7,1.1c5.9,0.1,11.4-2,16.3-6.3
											c4.4-3.9,9.4-5.6,15.3-4.7c3.7,0.6,6.7,2.3,9.5,4.7c8.1,7,17.2,8.3,26.8,3.6c2.5-1.2,4-1.1,6,0.5c2.6,2,5.3,3.7,8,5.6
											c-0.1,0.2-0.1,0.2-0.1,0.5c-6,0.7-10.3,4.4-14.8,7.9c-2.9,2.2-6.4,3.1-10,3c-4.8-0.1-9-2-12.7-5.3c-9.2-8.2-22.4-8.2-31.4,0
											c-3.2,2.9-6.8,4.5-10.5,4.9c-1.4,0.2-2.5,1.3-2.5,2.7v0.3c0,1.7,1.5,3,3.1,2.8c4.7-0.6,9.3-2.8,13.6-6.4c1.4-1.2,2.9-2.3,4.6-3
											c6.9-3,13.2-1.8,19,2.6c2.7,2.1,5.6,4.4,8.7,5.5c8.7,3.1,16.9,1.6,24-4.6c7.8-6.7,17.5-7,24.8-0.5c9.9,8.8,22.8,8.8,32.8,0.1
											c3.8-3.3,8.3-4.9,12.7-4.7V1.4C198.6,2.2,198.3,2.8,197.9,3.5z"></path>
											
											<path fill="#fff" d="M157.3,137.9c-9.3-8.2-23.2-7.9-32.6,0.2c-3,2.6-6.2,4.2-9.4,4.8c-1.3,0.2-2.2,1.4-2.2,2.7v0.2
											c0,1.6,1.4,2.9,3,2.7c4.6-0.6,9-2.5,12.9-6c3.7-3.3,8-5.3,13.1-4.9c4.5,0.3,8.2,2.3,11.6,5.3c6.1,5.4,13.3,6.8,21.1,5.4
											c4.6-0.8,8.4-3.2,12-6.3c3.6-3.1,8-4.6,12.3-4.4v-5.7c-5.8-0.1-11.6,1.9-16.5,6.2C174.7,145,165.2,144.9,157.3,137.9z"></path>
										</g>
									</g>
				    		</svg>
						</div>
					</div>';
			} ?>
				<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="cardContainer">
						<?php 
						if ( $url && $cannedimg ): ?>
						<a href="<?php echo $url ?>" target="_blank">
							<?php echo $img ?>
						</a>
						<?php elseif ( $url && $featuredimg ): ?>
						<a href="<?php echo $url ?>" target="_blank">
							<?php echo $featuredimg ?>
						</a>
						<?php elseif ( $permalink && $featuredimg ): ?>
						<a href="<?php echo $permalink ?>">
							<?php echo $featuredimg ?>
						</a>
						<?php elseif ( $url ): ?>
						<a href="<?php echo $url ?>" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholders/osp-ocean-bg-feature.jpg">
						</a>
						<?php elseif ( $permalink ): ?>
						<a href="<?php echo $permalink ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholders/osp-ocean-bg-feature.jpg">
						</a>
						<?php else : ?>
						<a href="<?php echo $permalink ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholders/osp-ocean-bg-feature.jpg">
						</a>
						<?php endif; ?>
						<div class="cardContent">
							<div class="colInner">
								<?php if ( $url ): ?>
								<a style="color: #333;" href="<?php echo $url ?>" target="_blank">
									<h3><?php echo $title ?></h3>
								</a>
								<?php else : ?>
								<a style="color: #333;" href="<?php echo $permalink ?>">
									<h3><?php echo $title ?></h3>
								</a>
								<?php endif;
								 
								if ( $url && $excerpt ) {
									echo '<p>' . $excerpt . '</p>';
									echo '<p style="margin-top: auto;"><a class="readMore" href="' . $url . '" target="_blank">' . __('View article') . '</a></p>';
								} elseif ( $url ) {
									echo '<a class="readMore" href="' . $url . '" target="_blank">' . __('View article') . '</a>';
								} elseif ( $excerpt ) {
									echo '<p class="displayFlex">' . $excerpt . '</p>';
								} else {
									echo '<p class="displayFlex">' . $excerpt . '</p>';
								} 
								?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				
			</div>
			
			<?php 
			$catid = get_cat_ID( $category->name );
			$catlink = get_category_link( $catid );
			if ( $catlink ) {
				echo '<a class="button dark blue floatRight" href="' . $catlink . '">' . __('View all') . '</a>';
			} ?>
			
		</div>
		
	</section>
	<?php endif;  wp_reset_query();
} ?>