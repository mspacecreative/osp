<?php

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size( 'sidebar', 200, 200, true );
    add_image_size( 'card-feature', 600, 338, array('center', 'center') );
    add_image_size( 'team-member', 400, 400, array('center', 'top') );

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('osp', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function osp_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Blog Sidebar
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'osp'),
        'description' => __('Content for blog sidebar', 'osp'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define News Sidebar
    register_sidebar(array(
        'name' => __('News Sidebar', 'osp'),
        'description' => __('Content for news sidebar', 'osp'),
        'id' => 'sidebar-news',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Team Sidebar
    register_sidebar(array(
        'name' => __('Team Sidebar', 'osp'),
        'description' => __('Content for team sidebar', 'osp'),
        'id' => 'sidebar-team',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Product Sidebar
    register_sidebar(array(
        'name' => __('Product Sidebar', 'osp'),
        'description' => __('Content for product sidebar', 'osp'),
        'id' => 'sidebar-product',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Product Sidebar
    register_sidebar(array(
        'name' => __('Partners Sidebar', 'osp'),
        'description' => __('Content for partner sidebar', 'osp'),
        'id' => 'sidebar-partners',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Management Team Sidebar
    register_sidebar(array(
        'name' => __('Management Team', 'osp'),
        'description' => __('Content for management team sidebar', 'osp'),
        'id' => 'sidebar-management-team',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define osp Board Sidebar
    register_sidebar(array(
        'name' => __('osp Board', 'osp'),
        'description' => __('Content for osp Board sidebar', 'osp'),
        'id' => 'sidebar-osp-board',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Core Team Sidebar
    register_sidebar(array(
        'name' => __('Core Team', 'osp'),
        'description' => __('Content for core team sidebar', 'osp'),
        'id' => 'sidebar-core-team',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Scientific Advisory Board Sidebar
    register_sidebar(array(
        'name' => __('Scientific Advisory Board', 'osp'),
        'description' => __('Content for Scientific Advisory Board sidebar', 'osp'),
        'id' => 'sidebar-scientific-advisory',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Area 1
    register_sidebar(array(
        'name' => __('Footer Area 1', 'osp'),
        'description' => __('Content for first footer area', 'osp'),
        'id' => 'footer-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Area 2
    register_sidebar(array(
        'name' => __('Footer Area 2', 'osp'),
        'description' => __('Content for first footer area', 'osp'),
        'id' => 'footer-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Area 3
    register_sidebar(array(
        'name' => __('Footer Area 3', 'osp'),
        'description' => __('Content for first footer area', 'osp'),
        'id' => 'footer-area-3',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Area 4
    register_sidebar(array(
        'name' => __('Footer Area 4', 'osp'),
        'description' => __('Content for first footer area', 'osp'),
        'id' => 'footer-area-4',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Footer Area 5
    register_sidebar(array(
        'name' => __('Footer Area 5', 'osp'),
        'description' => __('Content for first footer area', 'osp'),
        'id' => 'footer-area-5',
        'before_widget' => '<div id="%1$s" class="%2$s widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// EXCLUDE POST CATEGORIES
add_filter('get_the_terms', 'hide_categories_terms', 10, 3);

function hide_categories_terms($terms, $post_id, $taxonomy){

    // list of category slug to exclude, 
    $exclude = array('breaking-news', 'blog', 'articles', 'featured', 'meet-the-board');

    if (!is_admin()) {
        foreach($terms as $key => $term){
            if($term->taxonomy == "category"){
                if(in_array($term->slug, $exclude)) unset($terms[$key]);
            }
        }
    }

    return $terms;
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'prev_text' => __('&laquo;'),
    	'next_text' => __('&raquo;'),
        'total' => $wp_query->max_num_pages
    ));
}

function custom_pagination($pages = '', $range = 2)
{  
 $showitems = ($range * 2)+1;  

 global $paged;
 if(empty($paged)) $paged = 1;

 if($pages == '')
 {
     global $wp_query;
     $pages = $wp_query->max_num_pages;
     if(!$pages)
     {
         $pages = 1;
     }
 }   

 if(1 != $pages)
 {
     echo "<div class='pagination'>";
     if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class='arrows' href='".get_pagenum_link(1)."'>&laquo;</a>";
     if($paged > 1 && $showitems < $pages) echo "<a class='arrows' href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

     for ($i=1; $i <= $pages; $i++)
     {
         if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
         {
             echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
         }
     }

     if ($paged < $pages && $showitems < $pages) echo "<a class='arrows' href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
     if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class='arrows' href='".get_pagenum_link($pages)."'>&raquo;</a>";
     echo "</div>\n";
 }
 }

/*
// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}
// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}
*

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <p class="view-article-container"><a class="view-article button dark" href="' . get_permalink($post->ID) . '">' . __('Read more', 'osp') . '</a></p>';
}
*/

// custom excerpt length
function osp_custom_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}
function osp_custom_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'osp_custom_excerpt_length', 999 );

// add more link to excerpt
function osp_custom_excerpt_more($more) {
   global $post;
   return '... <a class="readMore" href="' . get_permalink($post->ID) . '">' . __('Read more', 'osp') . '</a>';
}
add_filter('excerpt_more', 'osp_custom_excerpt_more');

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function ospgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function ospcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'ospgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
//add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

include 'functions/osp-styles-scripts.php';
include 'functions/osp-menus.php';
include 'functions/acf.php';
include 'functions/gutenberg.php';
include 'functions/shortcodes.php';
include 'functions/block-wrap.php';
include 'functions/tinymce.php';
include 'functions/remove-ptag.php';
include 'functions/remove-brand-slug.php';
include 'functions/excerpts.php';