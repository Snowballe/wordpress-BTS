<?php 

//Top elements
add_action('cpotheme_top', 'cpotheme_top_menu');

//Header elements
add_action('cpotheme_header', 'cpotheme_logo');
add_action('cpotheme_header', 'cpotheme_menu_toggle');
add_action('cpotheme_header', 'cpotheme_menu');

//Before main elements
add_action('cpotheme_before_main', 'cpotheme_home_slider', 100);
add_action('cpotheme_before_main', 'cpotheme_home_tagline', 200);
add_action('cpotheme_before_main', 'cpotheme_home_features', 300);
add_action('cpotheme_before_main', 'cpotheme_home_portfolio', 400);

//Page title elements
add_action('cpotheme_title', 'cpotheme_breadcrumb');
add_action('cpotheme_title', 'cpotheme_page_title');

//After main elements

//Subfooter elements
add_action('cpotheme_subfooter', 'cpotheme_subfooter');

//Footer elements
add_action('cpotheme_footer', 'cpotheme_footer_menu');
add_action('cpotheme_footer', 'cpotheme_footer');


//Add homepage slider
function cpotheme_home_slider(){ 
	if(is_front_page() || cpotheme_get_option('slider_always') === true) get_template_part('homepage', 'slider'); 
}

//Add homepage features
function cpotheme_home_features(){ 
	if(is_front_page()) get_template_part('homepage', 'features'); 
}

//Add homepage tagline
function cpotheme_home_tagline(){ 
	if(is_front_page()) cpotheme_block('home_tagline', 'tagline', 'container'); 
}

//Add homepage portfolio
function cpotheme_home_portfolio(){ 
	if(is_front_page()) get_template_part('homepage', 'portfolio'); 
}


//set settings defaults
add_filter('cpotheme_font_headings', 'cpotheme_theme_fonts_headings');
add_filter('cpotheme_font_menu', 'cpotheme_theme_fonts_headings');
function cpotheme_theme_fonts_headings($data){
	return 'Quattrocento';
}


add_filter('cpotheme_font_body', 'cpotheme_theme_fonts');
function cpotheme_theme_fonts($data){ 
	return 'Source+Sans+Pro';
}
	
