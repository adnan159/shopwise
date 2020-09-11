<?php

function shopwise_default_functions(){
	add_theme_support('title-tag');
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');


}
add_action('after_setup_theme','shopwise_default_functions');





?>