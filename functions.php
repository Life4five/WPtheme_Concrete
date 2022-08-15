<?php
add_theme_support('post-thumbnails');
/**
 * concrete2022 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package concrete2022
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '3' );
}
if ( ! defined( 'HOME' ) ) {
	define( 'HOME', '8' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function concrete2022_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on concrete2022, use a find and replace
		* to change 'concrete2022' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'concrete2022', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails' );
    add_image_size('article_thumb',400,305,true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'concrete2022' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'concrete2022_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'concrete2022_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function concrete2022_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'concrete2022_content_width', 640 );
}
add_action( 'after_setup_theme', 'concrete2022_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function concrete2022_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'concrete2022' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'concrete2022' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'concrete2022_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function concrete2022_scripts() {
	wp_enqueue_style( 'concrete2022-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'concrete2022-style', 'rtl', 'replace' );

	wp_enqueue_script( 'concrete2022-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'concrete2022_scripts' );

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
function page_h1_title ($id='') {
    if (!get_field('hide_h1') && page_title($id) !== false) { ?>
        <h1 class="page_title"><span><?=page_title($id)?></span></h1>
    <? }
}
function page_content () {
    if ( !empty(get_the_content()) ) { ?>
        <div class="text"><? the_content(); ?></div>
    <? } else {
        return false;
    }
    return true;
}
function page_title ($id='') {
    $cat_id = '';
    if (!empty($id)) {
        $cat_id = 'category_'.$id;
    }
    $alt_title_cat = get_field('alt_title', $cat_id);
    $alt_title_post = get_field('alt_title', $id);
    $title_cat = single_cat_title('', false);
    $title_post = get_the_title($id);
    if (!empty($alt_title_post)) {
        return $alt_title_post;
    } elseif (!empty($alt_title_cat)) {
        return $alt_title_cat;
    } elseif (!empty($title_cat)) {
        return $title_cat;
    } elseif (!empty($title_post)) {
        return $title_post;
    } else {
        return false;
    }
}
function breadcrumbs() {
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<div class="brcr">', '</div>' );
    }
}

function disable_css_js(){
 wp_dequeue_style('wp-block-library');
 wp_dequeue_style('wp-block-library-theme');
 wp_deregister_script('wp-embed');
 wp_deregister_script( 'wc-price-slider' );
}
add_action('wp_enqueue_scripts','disable_css_js');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//Remove inline css
//Remove Gutenberg Block Library CSS from loading on the frontend
function try_remove_wp_block_library_css(){
 if ( !is_admin() ) {
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
  wp_dequeue_style( 'global-styles' ); // Remove theme.json
 }
}
add_action( 'wp_enqueue_scripts', 'try_remove_wp_block_library_css', 100 );
add_action( 'wp_loaded', function(){
 remove_action( 'wp_head', 'wc_gallery_noscript', 10 );
} );


function artabr_opengraph_fix_yandex($lang) {
 $lang_prefix = $lang.' prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#  profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#"';
 return $lang_prefix;
 }
add_filter( 'language_attributes', 'artabr_opengraph_fix_yandex',20,1);

// Убираем в Yoast Seo разметку поиска
add_filter( 'disable_wpseo_json_ld_search', '__return_true' );

// Получение ACF картинки в теге img
function getACFpic($field, $set_params = array()) {
	$def_params = array(
		'modal' => false, 
		'size_name' => '', 
		'stub' => '', 
		'class' => '', 
		'width' => 0, 
		'height' => 0, 
		'alt' => ''
	);
	$params = array_merge($def_params, $set_params);
	extract($params);

	$pic = getACFpicUrl($field, $size_name, $stub);

	$pic_info = pathinfo($pic);
	if ($pic_info["extension"] == 'svg') {
		return file_get_contents($pic);
	}
	
	if (!empty($pic)) {
		if ( empty($width) && empty($height) ) {
			if ( is_array($field) ) {
				if ( !empty($size_name) ) {
					$width = $field['sizes'][$size_name.'-width'];
					$height = $field['sizes'][$size_name.'-height'];
				} else {
					$width = $field['width'];
					$height = $field['height'];
				}
			} else {
				$pic_data = getimagesize($pic);
				if ( is_array($pic_data) ) {
					$width = $pic_data[0];
					$height = $pic_data[1];
				}
			}
		}

		$tag_img = '<img width="'.$width.'" height="'.$height.'" class="'.$class.'" src="'.$pic.'" alt="'.$alt.'">';
		switch ($modal) {
			case 'fancybox':
				return '<a href="'.$pic.'" class="fancybox">'.$tag_img.'</a>';
			break;
		}
		return $tag_img;
	}
	return false;
}
// Получение ссылки на ACF картинку
function getACFpicUrl($field, $size_name='', $stub='') {
	if (is_array($field)) {
		if (!empty($size_name)) {
			$pic = $field['sizes'][$size_name];
		} else {
			$pic = $field['url'];
		}
	} else {
		$pic = $field;
	}
	if (empty($pic) && !empty($stub)) {
		$pic = $stub;
	}
	return $pic;
}
//
function show_slabs () { ?>
	<div class="slabs">
        <div class="main">
            <h2 class="slabs-title title">Плиты перекрытия</h2>
        </div>

        <div class="slabs-container">
			<div class="main">
				<div class="slabs-inner">
                    <div class="slabs-inner-1">
                        <div class="inner-1-txt"><?php the_field('inner-1-txt', HOME); ?></div>
                        <div class="inner-1-img"><?=getACFpic(get_field('inner-1-img', HOME))?></div>
                    </div>
                    <div class="slabs-inner-2">
                        <div class="inner-2-img"><?=getACFpic(get_field('inner-2-img', HOME))?></div>
                        <div class="inner-2-txt">
                            <?php the_field('inner-2-txt', HOME); ?>
                            <div class="slabs-button">
                                <div class="slabs-btns">
                                    <div class="slabs-offer btn-inv btn-buttt">Сделать заказ</div>
                                    <div class="slabs-price-list btn btn-buttt"><a target="_blank" rel="noopener noreferrer" href="<?php the_field('price-list-file', HOME); ?>">
                                        <?php the_field('price-list', HOME); ?>
                                    </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </div>
				</div>
            </div>
        </div>
    </div>
<? }

// Отправка в телеграм
function wpcf7_before_send_telegram_multiple() {
	$token = '5512621443:AAH1u5-nPw6wUY8FLL4B8XP1vgfSQMDJc_s'; 
	$chat_id = '-609810733'; 
	$txt = '';
  
	switch ($_POST['_wpcf7']) {
		case 424:
			$txt .= "ЗАЯВКА С КАЛЬКУЛЯТОРА%0A";
			$fields = array(
				'Имя' => $_POST['your-name'],
				'Телефон' => $_POST['your-phone'],
				'Продукт' => $_POST['your-product'],
				'Марка' => $_POST['your-marka'],
				'Объём' => $_POST['your-amount'],
				'Стоимость без доставки' => $_POST['your-cost'],
			);
		break;
		case 425:
		case 482:
			$txt .= "ЗАЯВКА НА ЗВОНОК%0A";
			$fields = array(
				'Имя' => $_POST['your-name'],
				'Телефон' => $_POST['your-phone'],
			);
		break;
		case 488:
			$txt .= "НОВЫЙ ОТЗЫВ%0A";
			$fields = array(
				'Имя' => $_POST['review-your-name'],
				'Отзыв' => $_POST['your-review'],
			);
		break;
	}
  
	foreach ($fields as $field_label => $field_val) {
		if ( !empty($field_val) ) {
			$txt .= "%0A$field_label: ".strip_tags(trim(urlencode($field_val)));
		}
	}
  
	if ( !empty($txt) ) {
		file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}");
	}
 }
 add_action( 'wpcf7_before_send_mail', 'wpcf7_before_send_telegram_multiple' );
 