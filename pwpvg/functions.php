<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup() {
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'blankslate' ) ) );
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts() {
wp_enqueue_style( 'blankslate-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'blankslate_footer_scripts' );
function blankslate_footer_scripts() {
?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'blankslate_document_title_separator' );
function blankslate_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'blankslate_read_more_link' );
function blankslate_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'blankslate_excerpt_read_more_link' );
function blankslate_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'blankslate_image_insert_override' );
function blankslate_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'blankslate_pingback_header' );
function blankslate_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function blankslate_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'blankslate_comment_count', 0 );
function blankslate_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}



/**************************************/
/* Custom Functions for Pleasant View */
/**************************************/

//Include custom attribute templates for new admin attribute tabs
add_action( 'woocommerce_product_data_panels', 'pv_feature_custom_data_fields' );
function pv_feature_custom_data_fields() {
	global $woocommerce, $post;	

	function arrToString($arr){
		if( !empty($arr) && $arr != null ){
			return implode(',', unserialize( $arr ) );
		} else {
			return $arr;
		}
	}

	include 'views/pv-html-product-features-data.php';
	include 'views/pv-html-product-characteristic-data.php';
	include 'views/pv-html-product-plant-needs-data.php';
	include 'views/pv-html-product-more-colors.php';
}


add_filter( 'woocommerce_product_tabs', 'pv_rename_tabs', 98 );
function pv_rename_tabs( $tabs ) {
	$tabs['additional_information']['title'] = __( 'Features' );	// Rename the additional information tab
	
	//print_r('<pre>'.print_r($tabs, true).'</pre>');

	return $tabs;
}
add_filter( 'woocommerce_product_data_tabs', 'pv_product_data_tab' );
add_filter( 'woocommerce_product_additional_information_heading' , '__return_false' );
function pv_product_data_tab( $product_data_tabs ) {
	unset($product_data_tabs['attribute']); //remove Attribute product tab

	$product_data_tabs['pv-features-tab'] = array(
		'label' => __( 'Features' ),
		'target'   => 'pv_features_attributes',
		'priority' => 50
	);
	
	$product_data_tabs['pv-characteristic-tab'] = array(
		'label' => __( 'Characteristics' ),
		'target'   => 'pv_characteristic_attributes',
		'priority' => 51
	);
	
	$product_data_tabs['pv-plant-needs-tab'] = array(
		'label' => __( 'Plant Needs' ),
		'target'   => 'pv_plant_needs_attributes',
		'priority' => 52
	);		

	$product_data_tabs['pv-plant-needs-tab'] = array(
		'label' => __( 'More Colors' ),
		'target'   => 'pv_more_colors',
		'priority' => 53
	);		
	
	//print_r('<pre>'.print_r($product_data_tabs, true).'</pre>');
	return $product_data_tabs;
}

add_action( 'admin_enqueue_scripts', 'pv_load_custom_wp_admin_style' );
function pv_load_custom_wp_admin_style() {
        wp_register_style( 'pv_attributes_admin_styles', get_template_directory_uri() . '/admin/admin.css', false, null );
		wp_enqueue_style( 'pv_attributes_admin_styles' );
		wp_enqueue_script( 'pv_attributes_admin_scripts', get_template_directory_uri() . '/admin/admin.js', array( 'jquery' ) );
}



// PV CRON JOBS

include 'jobs/cron_index.php';

add_action( 'pv_update_products', '_pv_update_product_content');
function _pv_update_product_content(){
	try {
		pv_get_product_updates();
		error_log( "product updates completed! \n----------------" );
	} catch(Exception $e){
		error_log( 'product updates failed: ' . $e );
	}
}

add_action( 'pv_update_product_images', '_pv_update_product_images');
function _pv_update_product_images(){
	$images = pv_get_product_images();
	error_log( $images );
}