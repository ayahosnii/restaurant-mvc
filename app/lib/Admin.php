<?php

namespace app\lib;

use app\lib\template\AdminTemplate;
use app\lib\template\Template;

class Admin
{
    const NOT_FOUND_ACTION = 'notFoundAction';
    const NOT_FOUND_CONTROLLER = 'app\controllers\admin\NotFoundController';

    private $_admin = 'admin';
    private $_controller = 'index';
    private $_action = 'default';
    private $_params = array();

    public function __construct(AdminTemplate $admin_template, Registry $registry)
    {
        $this->_template = $admin_template;
        $this->_registry = $registry;
        $this->_parseUrl();
    }

    private function _parseUrl()
    {
      $url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'))   ;
        if (isset($url[0]) && $url[0] != ''){
            $this->_admin = $url[0];
        }

        if (isset($url[1]) && $url[1] != ''){
            $this->_controller = $url[1];
        }
        if (isset($url[2]) && $url[2] != ''){
            $this->_action = $url[2];
        }

        if (isset($url[3]) && $url[3] != '') {
            $this->_params = $url[3];
        }

    }


  public function getController()
  {
    return $this->_admin;
  }


  public function dispatch()
    {
        $controllerClassName = 'app\controllers\admin\\' . ucfirst($this->_controller) . 'Controller';
        $actionName = $this->_action .'Action';

        if (!class_exists($controllerClassName) || !method_exists($controllerClassName, $actionName)) {
          $controllerClassName = self::NOT_FOUND_CONTROLLER;
          $this->_action = $actionName = self::NOT_FOUND_ACTION;
        }


        $controller = new $controllerClassName();
        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->setTemplate($this->_template);
        $controller->setRegistry($this->_registry);
        $controller->$actionName();
    }

}
