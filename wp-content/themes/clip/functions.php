<?php
/**
 * Clip Mexico
 */

function clip_scripts_with_jquery()
{

    $scripts=array('smooth_scroll'=>'/js/smooth_scroll.js',
                   'parallax'=>'/js/jquery.parallax-1.1.3.js',
				   'localscroll'=>'/js/jquery.localscroll-1.2.7-min.js',
				   'scrollto'=>'/js/jquery.scrollTo-1.4.2-min.js',
				   'validate'=>'/js/jquery.validate.js',
				   'bootstrap'=>'/js/bootstrap.min.js',
                   'mio'=>'/js/mio.js');
    foreach($scripts as $key=>$sc)
    {
       wp_register_script( $key, get_template_directory_uri() . $sc, array('jquery') );
       wp_enqueue_script( $key );
    }
	
	//wp_enqueue_style( 'full-slider', get_template_directory_uri() . '/css/full-slider.css' );
}
add_action( 'wp_enqueue_scripts', 'clip_scripts_with_jquery' );

function clip_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'clip' ),
		'id'            => 'hero_section',
		'description'   => __( 'Appears in the header section of the site.', 'clip' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'twentythirteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => 'Footer Menu',
		'id'            => 'footer_menu',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'clip_widgets_init' );


?>
