<?php
// Site
$_['site_url']           = HTTP_SERVER;
$_['site_ssl']           = HTTPS_SERVER;

// Url
$_['url_autostart']      = false;

// Database
$_['db_autostart']       = true;
$_['db_engine']          = DB_DRIVER; // mpdo, mssql, mysql, mysqli or postgre
$_['db_hostname']        = DB_HOSTNAME;
$_['db_username']        = DB_USERNAME;
$_['db_password']        = DB_PASSWORD;
$_['db_database']        = DB_DATABASE;
$_['db_port']            = DB_PORT;

// Session
$_['session_autostart']  = true;
$_['session_engine']     = 'db';
$_['session_name']       = 'OCSESSID';

// Template
$_['template_engine']    = 'twig';
$_['template_directory'] = '';
$_['template_cache']     = true;

// Autoload Libraries
$_['library_autoload']   = array(
	'openbay'
);

// Actions
$_['action_pre_action']  = array(
	'startup/session',
	'startup/startup',
	'startup/error',
	'startup/event',
	'startup/maintenance',
	'startup/seo_url'
);

// Action Events
$_['action_event'] = array(
	'controller/*/before' => array(
		'event/language/before'
	),
	'controller/*/after' => array(
		'event/language/after'
	),	
	'view/*/before' => array(
		500  => 'event/theme/override',
		998  => 'event/language',
		1000 => 'event/theme'
	),
	'language/*/after' => array(
		'event/translation'
	),
	//'view/*/before' => array(
	//	1000  => 'event/debug/before'
	//),
	'controller/*/after'  => array(
		'event/debug/after'
	)
);


/* ----------------------------------------------------------
|  CẤU HÌNH RESIZE ẢNH
|  ----------------------------------------------------------
*/ 

// CHIỀU RỘNG ẢNH CHO PRODUCT TAB
$_['image_resize_width_product_tab'] 		= 270;
// CHIỀU CAO ẢNH CHO PRODUCT TAB
$_['image_resize_height_product_tab'] 		= 270;

// CHIỀU RỘNG ẢNH ĐẠI DIỆN CHO CATEGORY
$_['image_resize_width_avatar_category'] 	= 285;
// CHIỀU CAO ẢNH ĐẠI DIỆN CHO CATEGORY
$_['image_resize_height_avatar_category'] 	= 350;

// CHIỀU RỘNG CHO SLIDER CATEGORY
$_['image_resize_width_slider_category'] 	= 870;
// CHIỀU CAO CHO SLIDER CATEGORY
$_['image_resize_height_slider_category'] 	= 288;

// CHIỀU RỘNG ẢNH MẶC ĐỊNH CHO PRODUCT
$_['image_resize_width_product_default'] 	= 270;
// CHIỀU CAO ẢNH MẶC ĐỊNH CHO PRODUCT
$_['image_resize_height_product_default'] 	= 270;

