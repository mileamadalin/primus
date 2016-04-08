<?php 
	
if (!function_exists('primus_setup')) {
	function primus_setup() {
		// Using this feature you can set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.  https://codex.wordpress.org/Content_Width
		global $content_width;
		if (!isset($content_width)) {
			$content_width = 796;
		}
			
		add_theme_support( 'menus' );
		
		// Add post thumbnails support. https://codex.wordpress.org/Post_Thumbnails
		add_theme_support('post-thumbnails');
		
		// Takes care of the <title> tag. https://codex.wordpress.org/Title_Tag
		add_theme_support('title-tag');

		// Add automatic feed links support. https://codex.wordpress.org/Automatic_Feed_Links
		add_theme_support('automatic-feed-links');
		
		// Add custom background support. https://codex.wordpress.org/Custom_Backgrounds
	add_theme_support('custom-background', array(
		// Default color
		'default-color' => 'FFF',
	));
	
	// Add custom header support. https://codex.wordpress.org/Custom_Headers
	add_theme_support('custom-header', array(
		// Flex height
		'flex-height' => true,
		// Header text
		'header-text' => false,
	));

		
	}	
	
	add_action( 'after_setup_theme', 'primus_setup' );
}
	
	add_editor_style( 'editor-style.css' );

	
	function primus_excerpt_length( $length ) {
		return 16;
	}
	add_filter( 'excerpt_length', 'primus_excerpt_length', 999 );
	
	function register_theme_menus() {
		
		register_nav_menus(
			array(
				'primary-menu' => __( 'Primary Menu', 'primus' )
			)
		);
		
	}
	add_action('init', 'register_theme_menus');

/* Register Sidebar */

	function primus_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => $name,	 
		'id' => $id, 
		'description' => $description,
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

	}

	function primus_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Widget Area', 'primus' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'primus' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	add_action( 'widgets_init', 'primus_widgets_init' );


primus_create_widget( __('Page Sidebar','primus'), 'page', __('Displays on the side of pages with a sidebar','primus'));
primus_create_widget( __('Blog Sidebar','primus'), 'blog', __('Displays on the side of pages in the blog section','primus'));
	
	function primus_theme_styles() {
		
		wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
		wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
		wp_enqueue_style( 'googlefont_css', '//fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
		
	}
	add_action( 'wp_enqueue_scripts', 'primus_theme_styles' );
	
	function primus_theme_js() {
		
		wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
		wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );

	}
	add_action('wp_enqueue_scripts', 'primus_theme_js');

/* comment-reply function */

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
?>