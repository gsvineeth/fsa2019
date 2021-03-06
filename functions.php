<?php
/**
 * ifsa2019 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ifsa2019
 */

if ( ! function_exists( 'ifsa2019_setup' ) ) :

	//  Learnpress Action Hooks removal 
	remove_action( 'learn-press/before-main-content', 'learn_press_breadcrumb', 10 );
	remove_action( 'learn-press/after-course-item-content', 'learn_press_content_item_nav', 5 );
	remove_action( 'learn-press/after-course-item-content', 'learn_press_lesson_comment_form', 10 );

	//Course  landing page hooks
	remove_action( 'learn-press/content-landing-summary', 'learn_press_course_students', 10 );
	remove_action( 'learn-press/content-landing-summary', 'learn_press_course_tabs', 20 );
	remove_action( 'learn-press/content-landing-summary', 'learn_press_course_price', 25 );
	remove_action( 'learn-press/content-landing-summary', 'learn_press_course_buttons', 30 );
	add_action( 'ifsa_course_price', 'learn_press_course_price', 5 );
	add_action( 'ifsa_course_buttons', 'learn_press_course_buttons', 5 );

	// Course Learning page hooks
	remove_action( 'learn-press/content-learning-summary', 'learn_press_course_students', 15 );
	remove_action( 'learn-press/content-learning-summary', 'learn_press_course_tabs', 35 );



	remove_action( 'learn-press/content-learning-summary', 'learn_press_course_remaining_time', 30 );

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ifsa2019_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ifsa2019, use a find and replace
		 * to change 'ifsa2019' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ifsa2019', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		
		add_theme_support( 'post-thumbnails', array( 'post', 'lp_lesson' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ifsa2019' ),
			'menu-2' => esc_html__( 'Footer Menu', 'ifsa2019' ),
			'menu-3' => esc_html__( 'Classroom Courses Menu', 'ifsa2019' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ifsa2019_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'ifsa2019_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ifsa2019_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ifsa2019_content_width', 640 );
}
add_action( 'after_setup_theme', 'ifsa2019_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ifsa2019_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ifsa2019' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ifsa2019' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Course Sidebar', 'ifsa2019' ),
		'id'            => 'course-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'ifsa2019' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'ifsa2019' ),
		'id'            => 'footer-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'ifsa2019' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s col-md-3">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ifsa2019_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ifsa2019_scripts() {
	wp_enqueue_style( 'rubik', '//fonts.googleapis.com/css?family=Rubik:300,400,700' );
	wp_enqueue_style( 'metropolis', get_template_directory_uri() . '/fonts/fonts.css');	
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css');
	wp_enqueue_style( 'ifsa2019-style', get_stylesheet_uri() );
	wp_enqueue_style( 'vineeth', get_template_directory_uri() . '/css/vineeth.css');


	wp_enqueue_script('jquery');
	wp_enqueue_script( 'owlcarousel',get_template_directory_uri() . '/js/owl.carousel.js', array(), '20151215', true );
	wp_enqueue_script( 'tinynav',get_template_directory_uri() . '/js/tinynav.js', array(), '20151215', true );
	wp_enqueue_script( 'custom',get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery-modal',get_template_directory_uri() . '/js/jquery-modal.js', array(), '20151215', true );
	wp_enqueue_script( 'ifsa2019-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ifsa2019-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ifsa2019_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function my_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if (isset($user->roles) && is_array($user->roles)) {
        //check for subscribers
        if (in_array('subscriber', $user->roles)) {
			// redirect them to another URL, in this case, the homepage 
			$nutrition_course_id = get_theme_mod( 'nutrition_course_id', '' ); 
            $redirect_to =  get_permalink($nutrition_course_id);
        } elseif (in_array('customer', $user->roles) ){
			$nutrition_course_id = get_theme_mod( 'nutrition_course_id', '' ); 
            $redirect_to =  get_permalink($nutrition_course_id);
		}
    }

    return $redirect_to;
}
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );




add_filter( 'woocommerce_order_button_text', 'misha_custom_button_text' );
function misha_custom_button_text( $button_text ) {
   return 'Make Payment'; // new text is here 
}

// Removes Order Notes Title - Additional Information & Notes Field
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

// Remove Order Notes Field
add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );
function remove_order_notes( $fields ) {
     unset($fields['order']['order_comments']);
     return $fields;
}

//custom thank you note

add_filter( 'woocommerce_endpoint_order-received_title', 'ifsa_thank_you_title' );
 
function ifsa_thank_you_title( $old_title ){
	return ' ';
}

add_filter( 'woocommerce_thankyou_order_received_text', 'ifsa_thank_you_text', 20, 2 );
 
function ifsa_thank_you_text( $thank_you_title, $order ){
 
	return 'Greetings ' . $order->get_billing_first_name() . ', thank you so much for your order. Your account details are mailed to to your email - '. $order->get_billing_email().'. ';
 
}

add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
  wp_redirect( home_url() );
  exit();
}
