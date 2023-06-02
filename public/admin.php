<?php

use app\lib\Registry;
use app\lib\SessionManager;
use app\lib\Admin;
use app\lib\template\Template;

session_start();

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
require_once '..' . DS . 'config' . DS . 'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'Autoload.php';

$session = new SessionManager();
$session->start();


$template_parts = require_once '..' . DS . DS . 'config' . DS . 'admintemplateconfig.php';

$template = new Template($template_parts);

$registry = Registry::getInstance();
$registry->session = $session;

$adminFrontController = new Admin($template, $registry);
$adminFrontController->dispatch();
