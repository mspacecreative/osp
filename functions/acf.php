<?php

/* REGISTER ACF BLOCKS */
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'three-col-links',
			'title'				=> __('Three columns with links'),
			'description'		=> __('Display titles and links to pages'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'titles', 'page links' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'hero',
			'title'				=> __('Hero Block'),
			'description'		=> __('Background carousel with text and button overlay'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'background carousel', 'splash', 'landing page' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'feature',
			'title'				=> __('Feature Section'),
			'description'		=> __('Background image with text and button'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'background image', 'content', 'CTA' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register product boxes
		acf_register_block(array(
			'name'				=> 'product-boxes',
			'title'				=> __('Product Boxes'),
			'description'		=> __('Repeatable product box features'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'products', 'content', 'repeatable' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register download boxes
		acf_register_block(array(
			'name'				=> 'download-boxes',
			'title'				=> __('Download Boxes'),
			'description'		=> __('Repeatable file download links in boxes'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'downloads', 'content', 'repeatable' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register full span img text left block
		acf_register_block(array(
			'name'				=> 'two-third-one-third',
			'title'				=> __('Two Third One Third Block'),
			'description'		=> __('Two third one third block with options'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'flex layout', 'content' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register 50/50 colour overlay text block
		acf_register_block(array(
			'name'				=> 'coloured-bg',
			'title'				=> __('Coloured Background Block'),
			'description'		=> __('Coloured background with text and variable columns'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'variable columns', 'layout' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register three column layout block
		acf_register_block(array(
			'name'				=> 'half-and-half-img-text',
			'title'				=> __('Two Column 50/50'),
			'description'		=> __('Two column row with content and background image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'two columns', 'row' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register cta block
		acf_register_block(array(
			'name'				=> 'variable-columns',
			'title'				=> __('Variable Columns Block'),
			'description'		=> __('Two, three and four column layouts'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'grid layout', 'columns' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));

		// register company block
		acf_register_block(array(
			'name'				=> 'loop',
			'title'				=> __('Companies Block'),
			'description'		=> __('Showcase companies in list, grid or carousel layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'grid layout', 'list companies', 'carousel' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));

		// register team block
		acf_register_block(array(
			'name'				=> 'team',
			'title'				=> __('Team Block'),
			'description'		=> __('Showcase staff in list, grid or carousel layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'grid layout', 'staff members', 'carousel' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register events block
		acf_register_block(array(
			'name'				=> 'promo-box',
			'title'				=> __('Promotional Box'),
			'description'		=> __('Boxed row with content and featured image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'image', 'promotional' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register two third one third block
		acf_register_block(array(
			'name'				=> 'two-col-full-span',
			'title'				=> __('Two Column Full Span Block'),
			'description'		=> __('A full width two column block'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'full width', 'columns' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register flexbox block
		acf_register_block(array(
			'name'				=> 'carousel',
			'title'				=> __('Carousel Block'),
			'description'		=> __('Displays image carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'carousel', 'photo gallery' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register content block
		acf_register_block(array(
			'name'				=> 'boxed-columns',
			'title'				=> __('Boxed Columns Block'),
			'description'		=> __('Variable columns wrapped in boxes'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'boxed items', 'columns' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register image grid
		acf_register_block(array(
			'name'				=> 'shortcode',
			'title'				=> __('Shortcode Block'),
			'description'		=> __('Display shortcode with page anchor link'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'shortcode', 'page anchor link' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register column block
		acf_register_block(array(
			'name'				=> 'columns',
			'title'				=> __('Variable Columns Section'),
			'description'		=> __('Displays variable column layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'columns', 'variable' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register single testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial-single',
			'title'				=> __('Testimonial Carousel Section'),
			'description'		=> __('Displays testimonials in a carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'testimonial', 'quote' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register home page slider block
		acf_register_block(array(
			'name'				=> 'slider',
			'title'				=> __('Partners Slider Section'),
			'description'		=> __('Displays a logos in carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'carousel', 'logos' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register content block
		acf_register_block(array(
			'name'				=> 'content',
			'title'				=> __('Content Section'),
			'description'		=> __('Displays a WYSIWYG editor with various design options'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'editor' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register product block
		acf_register_block(array(
			'name'				=> 'archive',
			'title'				=> __('Posts Block'),
			'description'		=> __('Displays selected post type results'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'editor' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register accordion block
		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion Block'),
			'description'		=> __('Displays collapsable tabs for titles and content'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'tabs', 'accordion' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register brand grid / carousel
		acf_register_block(array(
			'name'				=> 'brand',
			'title'				=> __('Brands Block'),
			'description'		=> __('Displays brands in either grid or carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'image grid', 'carousel' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register brand grid / carousel
		acf_register_block(array(
			'name'				=> 'cta-fullspan',
			'title'				=> __('Full Span CTA Block'),
			'description'		=> __('Full width call to action block '),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'Call to action', 'informational' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register brand grid / carousel
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('Boxed CTA Block'),
			'description'		=> __('Boxed call to action block '),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'Call to action', 'informational' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register brand grid / carousel
		acf_register_block(array(
			'name'				=> 'faqs',
			'title'				=> __('FAQs Block'),
			'description'		=> __('Frequently asked questions block '),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'questions', 'answers' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register brand grid / carousel
		acf_register_block(array(
			'name'				=> 'quote',
			'title'				=> __('Testimonial Block'),
			'description'		=> __('Testimonial with optional image block '),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'testimonial', 'quote' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register sidebar block
		acf_register_block(array(
			'name'				=> 'sidebar',
			'title'				=> __('Widget Block'),
			'description'		=> __('Pulls in content from specified sidebar widget'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'widget', 'sidebar' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));

		// register sidebar block
		acf_register_block(array(
			'name'				=> 'posts',
			'title'				=> __('Flexible Posts Block'),
			'description'		=> __('Displays curated or queried content types in various formats'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'posts', 'grid layout', 'posts carousel' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register sidebar block
		acf_register_block(array(
			'name'				=> 'feed-grid',
			'title'				=> __('Feed Grid Block'),
			'description'		=> __('Pulls in content from CPTs and displays it in a grid'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'custom post type', 'feed' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register sidebar block
		acf_register_block(array(
			'name'				=> 'feed-category',
			'title'				=> __('Feed Category Block'),
			'description'		=> __('Pulls in most recent posts from a specified category and displays them in a grid'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'posts', 'category' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));
		
		// register image strip block
		acf_register_block(array(
			'name'				=> 'image-strip',
			'title'				=> __('Image Strip Block'),
			'description'		=> __('Displays a horizontal array of up to three images'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'gallery', 'image' ),
			'mode'				=> 'preview',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));

	}
}

add_action('acf/init', 'my_acf_init');

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("templates/blocks/block-{$slug}.php") ) ) {
		include( get_theme_file_path("templates/blocks/block-{$slug}.php") );
	}
}

// OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page( 'Theme Settings' );
	
}

// GET BACKGROUND IMAGE FROM FAQs BLOCK
function fixedBackgroundImage() {
    $content = get_the_content( false, false, 46 );
	$blocks = parse_blocks( $content );
	foreach ( $blocks as $block ) {
		if ( is_page( 46 ) ) {
			if ( $block['blockName'] === 'acf/faqs' ) {
				$image = $block['attrs']['data']['background_image'];
				$result = '<div class="fixedBgImg" style="background: url(' . wp_get_attachment_image_url( $image, 'full' ) . ') no-repeat center center scroll;"></div>';
				echo $result;
			}
		}
	}
}