<?php 

function theme_styles() {

	wp_enqueue_style( 'app_css', get_template_directory_uri() . '/css/app.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	wp_enqueue_script( 'bower_modernizr', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
	wp_enqueue_script( 'bower_jquery', get_template_directory_uri() . '/js/jquery.min.js', '', '', true );
	wp_enqueue_script( 'bower_foundation', get_template_directory_uri() . '/js/foundation.min.js', '', '', true );
    wp_enqueue_script( 'jquery_no_conflict', get_template_directory_uri() . '/js/noconflict.js', '', '', true );
    wp_enqueue_script( 'bower_foundation_topbar', get_template_directory_uri() . '/js/foundation.topbar.js', '', '', true );
	wp_enqueue_script( 'bower_foundation_orbit', get_template_directory_uri() . '/js/foundation.orbit.js', '', '', true );
    wp_enqueue_script( 'bower_foundation_equalizer', get_template_directory_uri() . '/js/foundation.equalizer.js', '', '', true );
	wp_enqueue_script( 'sb_app_js', get_template_directory_uri() . '/js/app.js', '', '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// add_filter( 'show_admin_bar', '__return_false' );

function wpt_excerpt_length( $length ) {
    return 45;
}
add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );


add_theme_support( 'post-thumbnails' );


add_theme_support('menus');

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'  => __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

/**
 * START Foundation 5 Top Bar Menu Walker Class for WordPress
 */
  
class F5_TOP_BAR_WALKER extends Walker_Nav_Menu
{ 
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) 
    {
        $element->has_children = !empty( $children_elements[$element->ID] );
         
        if(!empty($element->classes)){
            $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
            $element->classes[] = ( $element->has_children ) ? 'has-dropdown' : '';           
        }
         
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
     
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu dropdown\">\n";
    }
     
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $item_output = '';
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-'. $item->ID;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';
        $output.= $indent.'<li id="menu-item-'. $item->ID.'" '.$class_names.'>';
         
        if ( empty( $item->title ) && empty( $item->url )) 
        {
            $item->url = get_permalink($item->ID);
            $item->title = $item->post_title;
             
            $attributes = $this->attributes($item);
 
            $item_output .= '<a'. $attributes .'>';
            $item_output .= apply_filters( 'the_title', $item->title, $item->ID );
            $item_output .= '</a>';
        }
        else
        {
            $attributes = $this->attributes($item);
     
            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }
         
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
    }
     
    private function attributes($item)
    {
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
         
        return $attributes;
    }
     
    public static function items_default_wrap($menu_text) {
        /**
         * Set default menu for menus not yet linked to theme location
         * Method courtesy of robertomatute - https://github.com/roots/roots/issues/939
         */
        return str_replace('<ul>', '<ul class="right">', $menu_text);
    }
       
    public static function items_remove_default_wrapper() 
    {
        /**
         * Remove default div wrapper around ul element
         */
        ?>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                var default_nav = $(".top-bar-section > div > ul");
                if(default_nav.parent("div").hasClass("right") === true){
                default_nav.unwrap();
                }
            });
        </script>
        <?php
    }
}
 
add_filter('wp_page_menu', array('F5_TOP_BAR_WALKER','items_default_wrap'));
add_action('wp_head', array('F5_TOP_BAR_WALKER','items_remove_default_wrapper'));

/**
 * END Foundation 5 Top Bar Menu Walker Class for WordPress
 */


function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name'					=>	__( $name ),
		'id'						=>	$id,
		'description'		=>	__( $description ),
		'before_widget'	=>	'<div class="widget">',
		'after_widget'	=>	'</div>',
		'before_title'	=>	'<h3>',
		'after_title'		=>	'</h3>'
	));
}
create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_widget( 'Page Like', 'page-like', 'Displays at bottom of pages' );

create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar.' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of blog pages with a sidebar.' );
create_widget( 'Post Sidebar', 'post', 'Displays on the side of post pages with a sidebar.' );

create_widget( 'Footer Left', 'footer-left', 'Displays on the left side of the footer.' );
create_widget( 'Footer Right', 'footer-right', 'Displays on the right side of the footer.' );











 ?>