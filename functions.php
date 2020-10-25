<?php

//default function
function shopwise_default_function(){
	add_theme_support('title-tag');
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');

	load_theme_textdomain('shopwise',get_template_directory_uri().'/languages');

	register_nav_menus(array(
		'main-menu'		=> __('Main Menu','shopwise'),
		'cat-menu'		=> __('Catagory Menu','shopwise'),
	));

	register_post_type('shopwise_slider',array(
		'labels'	=> array(
			'name'			=> 'Sliders',
			'add_new_item'	=> __('Add Slider Here','shopwise')
		),
		'public'	=> true,
		'supports'	=> array('title','editor','thumbnail','custom-fields')

	));

}
add_action('after_setup_theme','shopwise_default_function');

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//adding additional class in anchor link
function add_additional_class_on_anchor($classes, $item, $args) {
    $classes['class'] = "nav-link dropdown-toggler";
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_anchor', 1, 3);


//enqueue css and js
function shopwise_css_js(){
	wp_register_style('animate',get_template_directory_uri().'/assets/css/animate.css');
	wp_register_style('bootstrap',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
	wp_register_style('all',get_template_directory_uri().'/assets/css/all.min.css');
	wp_register_style('ionicons',get_template_directory_uri().'/assets/css/ionicons.min.css');
	wp_register_style('themify',get_template_directory_uri().'/assets/css/themify-icons.css');
	wp_register_style('linearicons',get_template_directory_uri().'/assets/css/linearicons.css');
	wp_register_style('flaticon',get_template_directory_uri().'/assets/css/flaticon.css');
	wp_register_style('simple-line-icons',get_template_directory_uri().'/assets/css/simple-line-icons.css');
	wp_register_style('carousel',get_template_directory_uri().'/assets/owlcarousel/css/owl.carousel.min.css');
	wp_register_style('theme',get_template_directory_uri().'/assets/owlcarousel/css/owl.theme.css');
	wp_register_style('default',get_template_directory_uri().'/assets/owlcarousel/css/owl.theme.default.min.css');
	wp_register_style('magnific',get_template_directory_uri().'/assets/css/magnific-popup.css');
	wp_register_style('slick',get_template_directory_uri().'/assets/css/slick.css');
	wp_register_style('slick-theme',get_template_directory_uri().'/assets/css/slick-theme.css');
	wp_register_style('style',get_template_directory_uri().'/assets/css/style.css');
	wp_register_style('responsive',get_template_directory_uri().'/assets/css/responsive.css');
	wp_register_style('style1',get_template_directory_uri().'/style.css');


	wp_enqueue_style('animate');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('all');
	wp_enqueue_style('ionicons');
	wp_enqueue_style('themify');
	wp_enqueue_style('linearicons');
	wp_enqueue_style('flaticon');
	wp_enqueue_style('simple-line-icons');
	wp_enqueue_style('carousel');
	wp_enqueue_style('theme');
	wp_enqueue_style('default');
	wp_enqueue_style('magnific');
	wp_enqueue_style('slick');
	wp_enqueue_style('slick-theme');
	wp_enqueue_style('style');
	wp_enqueue_style('responsive');
	wp_enqueue_style('style');

	//js
	wp_register_script('jquery',get_template_directory_uri().'/assets/js/jquery-1.12.4.min.js',array(),false,true);
	wp_register_script('popper',get_template_directory_uri().'/assets/js/popper.min.js',array(),false,true);
	wp_register_script('bootstrap-min',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array(),false,true);
	wp_register_script('owl-carousel',get_template_directory_uri().'/assets/owlcarousel/js/owl.carousel.min.js',array(),false,true);
	wp_register_script('magnific-popup-js',get_template_directory_uri().'/assets/js/magnific-popup.min.js',array(),false,true);
	wp_register_script('waypoints',get_template_directory_uri().'/assets/js/waypoints.min.js',array(),false,true);
	wp_register_script('parallax',get_template_directory_uri().'/assets/js/parallax.js',array(),false,true);
	wp_register_script('jquery',get_template_directory_uri().'/assets/js/jquery.countdown.min.js',array(),false,true);
	wp_register_script('imagesloaded',get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js',array(),false,true);
	wp_register_script('isotope',get_template_directory_uri().'/assets/js/isotope.min.js',array(),false,true);
	wp_register_script('jquery-dd',get_template_directory_uri().'/assets/js/jquery.dd.min.js',array(),false,true);
	wp_register_script('slick-js',get_template_directory_uri().'/assets/js/slick.min.js',array(),false,true);
	wp_register_script('elevatezoom',get_template_directory_uri().'/assets/js/jquery.elevatezoom.js',array(),false,true);
	wp_register_script('scripts',get_template_directory_uri().'/assets/js/scripts.js',array(),false,true);


	wp_enqueue_script('jquery');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrap-min');
	wp_enqueue_script('owl-carousel');
	wp_enqueue_script('magnific-popup-js');
	wp_enqueue_script('waypoints');
	wp_enqueue_script('parallax');
	wp_enqueue_script('jquery');
	wp_enqueue_script('imagesloaded');
	wp_enqueue_script('isotope');
	wp_enqueue_script('jquery-dd');
	wp_enqueue_script('slick-js');
	wp_enqueue_script('elevatezoom');
	wp_enqueue_script('scripts');
	


}
add_action('wp_enqueue_scripts','shopwise_css_js');



?>