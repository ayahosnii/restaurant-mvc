<?php

use app\lib\Admin;
use app\lib\Front;
use app\lib\Registry;
use app\lib\SessionManager;
use app\lib\template\AdminTemplate;
use app\lib\template\Template;
use app\lib\Language;
use app\lib\Messenger;

session_start();

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
require_once '..' . DS . 'config'. DS . 'config.php';
require_once APP_PATH . DS . 'lib' . DS . 'autoload.php';

$session = new SessionManager();
$session->start();



$admin_template_parts = require_once '..' . DS . 'config'. DS . 'admintemplateconfig.php';
$template_parts = require_once '..' . DS . 'config'. DS . 'templateconfig.php';

$admin_template = new AdminTemplate($admin_template_parts);
$template = new Template($template_parts);

$language = new Language();


$messenger = Messenger::getInstance($session);

$registry = Registry::getInstance();
$registry->session = $session;
$registry->language = $language;
$registry->messenger = $messenger;


$frontController = new Front($template, $registry);
$adminController = new Admin($admin_template, $registry);

if ($frontController->getController() !== 'admin') {
  $frontController->dispatch();
}else if ($frontController->getController() === 'admin'){
  $adminController->dispatch();
}
