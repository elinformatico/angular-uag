<?php
	
	$template = '';
	if(isset($_REQUEST['view']) && $_REQUEST['view'] == 'spamlord'){
		$template = 'spamlord-template';
	} else {
		$template = 'main-uag';
	}

	define('TEMPLATE', $template);

	$app_base = strstr($_SERVER['HTTP_HOST'], 'localhost') ? 

	'http://localhost/uag/mobie.site' :    # DEVELOPMENT
	'https://noehdez.info/site';            # PRODUCTION

	define('APP_BASE', $app_base);
	define('JS_PATH', APP_BASE . '/js');
	define('CSS_PATH', APP_BASE . '/css');

	$global['app_base'] = APP_BASE;
	$global['template'] = TEMPLATE;
