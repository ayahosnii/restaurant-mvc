<?php

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
define('APP_PATH', realpath(dirname(__FILE__)) . DS . '..' . DS . 'app');

define('ADMIN_VIEW_PATH', APP_PATH  . DS . 'views'. DS . 'admin' .DS);
define('VIEW_PATH', APP_PATH  . DS . 'views'. DS );

define('LANGUAGE_PATH', APP_PATH . DS . 'languages' . DS);
define('ADMIN_LANGUAGE_PATH', APP_PATH . DS . 'languages' . DS. 'admin'.DS);

define('ADMIN_TEMPLATE_PATH', APP_PATH . DS . 'template' . DS . 'admin' . DS);
define('TEMPLATE_PATH', APP_PATH . DS . 'template' . DS);

// Database Credentials
defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'restaurant-mvc');
defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 1);


// Default application language
defined('APP_DEFAULT_LANGUAGE') ? null : define ('APP_DEFAULT_LANGUAGE', 'ar');

defined('APP_SALT')     ? null : define ('APP_SALT', '$2a$07$yeNCSNwRpYopOhv0TrrReP$');


$base_url = sprintf(
  "%s://%s",
  isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
  $_SERVER['HTTP_HOST']
);

define('CSS', $base_url . '/assets/css/');
define('JS', $base_url . '/assets/js/');

define('ADMIN_CSS', $base_url . '/assets/admin/');
define('ADMIN_JS', $base_url . '/assets/admin/');
