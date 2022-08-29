<div class="skip-links" aria-label="Skip to main content"><a href="#main" class="skip-to-link" tabindex="1">Skip to main content</a></div>

<!-- header -->
<header id="header" class="header clear" role="banner">
	
	<!-- INNER CONTAINER -->
	<div class="innerContainer clear">

		<!-- logo -->
		<div class="logo">
			<a href="<?php echo esc_url( home_url() ); ?>">
				<?php include 'img/branding.php'; ?>
			</a>
		</div>
		<!-- /logo -->
		
		<button class="hamburger hamburger--spin" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		
		<!-- nav -->
		<div class="mobile-nav" role="navigation">
			<?php 
			osp_nav();
			echo 
			'<div class="mobile-translation-toggle">' . do_shortcode('[language-switcher]') . '</div>'; ?>
		</div>
		<!-- /nav -->
	
		<!-- nav -->
		<nav class="nav" role="navigation">
			<?php osp_nav(); ?>
		</nav>
		<?php echo do_shortcode('[language-switcher]'); ?>
		<!-- /nav -->
		
		<!-- search icon -->
		<div class="searchIcon">
			<a href="#">
				<!--<svg version="1.1" id="magnifyingGlass" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
				<g>
					<path class="st0" style="fill: transparent;" d="M7.9,14.9c-3.8,0-7-3.1-7-7c0-3.8,3.1-7,7-7c3.8,0,7,3.1,7,7C14.9,11.7,11.7,14.9,7.9,14.9z" />
					
					<path d="M7.9,1.7c3.4,0,6.2,2.8,6.2,6.2s-2.8,6.2-6.2,6.2s-6.2-2.8-6.2-6.2S4.5,1.7,7.9,1.7 M7.9,0.1c-4.3,0-7.7,3.5-7.7,7.7
					s3.5,7.7,7.7,7.7s7.7-3.5,7.7-7.7S12.2,0.1,7.9,0.1L7.9,0.1z" />
				</g>
				
				<g>
					<line class="st1" style="fill: none; stroke: #424242; stroke-width: 2; stroke-linecap: round; stroke-miterlimit: 10;" x1="13.9" y1="13.8" x2="18.8" y2="18.7" />
				</g>
				</svg>-->
			</a>
		</div>
		<div class="searchBarContainer">
			<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
			<div class="closeIcon"><a href="#"></a></div>
		</div>
		<!-- / search icon -->
	
	</div>
	<!-- / INNER CONTAINER -->
	
</header>
<!-- /header -->