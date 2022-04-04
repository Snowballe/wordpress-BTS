<?php if(!isset($content_width)) $content_width = 640;
define('CPOTHEME_ID', 'panoramica');
define('CPOTHEME_NAME', 'Panoramica');
define('CPOTHEME_VERSION', '2.4.0');
//Other constants
define('CPOTHEME_LOGO_WIDTH', '200');
define('CPOTHEME_USE_SLIDES', true);
define('CPOTHEME_USE_FEATURES', true);
define('CPOTHEME_USE_PORTFOLIO', true);
define('CPOTHEME_PREMIUM_NAME', 'Panoramica Pro');
define('CPOTHEME_PREMIUM_URL', '//www.cpothemes.com/theme/panoramica-pro');


//Load Core; check existing core or load development core
$core_path = get_template_directory().'/core/';
if(defined('CPO_CORELITE')) $core_path = CPO_CORELITE;
require_once $core_path.'init.php';

$include_path = get_template_directory().'/includes/';

//Main components
require_once($include_path.'setup.php');