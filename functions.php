<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

/*Menu register*/
add_action('init', 'register_giraffe_menu');
function register_giraffe_menu() {
	register_nav_menus(array('giraffe_menu'=> 'Menu Principal.'));
}


register_sidebar(array(
	'name' => __( 'Home Page' ),
	'id' => 'home-page',
	'description' => __( 'Los widgets de esta area seran mostrados en la pagina Principal' ),
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</ li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
));


if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name'=>'Footer Col #1',
		'id' => 'footer_col_1',
		//'description'   => __( 'Este widget es para el footer' ),
      	'before_widget' => '<div id="%1$s" class="widget %2$s footer_col footer_col_1">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name'=>'Footer Col #2',
		'id' => 'footer_col_2',
		//'description'   => __( 'Este widget es para el footer' ),
      	'before_widget' => '<div id="%1$s" class="widget %2$s footer_col footer_col_2">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	
	register_sidebar(array(
		'name'=>'Footer Col #3',
		'id' => 'footer_col_3',
		//'description'   => __( 'Este widget es para el footer' ),
      	'before_widget' => '<div id="%1$s" class="widget %2$s footer_col footer_col_3">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name'=>'Footer Col #4',
		'id' => 'footer_col_4',
		//'description'   => __( 'Este widget es para el footer' ),
      	'before_widget' => '<div id="%1$s" class="widget %2$s footer_col footer_col_4">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	
	

}



add_action('woocommerce_after_single_product_summary', 'change_woocommerce_product_summary');
function change_woocommerce_product_summary() 
{
	echo '<div class="summary"><a href="'.home_url( '/' ).'?page_id=170" class="btn_producto_cotizar">Cotizar</a></div>';
}

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 20;' ), 20 );

?>