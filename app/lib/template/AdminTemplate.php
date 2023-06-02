<?php

namespace app\lib\template;

use app\lib\template\TemplateHelper;

class AdminTemplate
{
    use TemplateHelper;
    private $_templateParts;
    public $_action_view;
    private $_data;
    private $_dictionary;
    private $_registry;

  public function __get($key)
  {
    return $this->_registry->$key;
  }
  public function __construct(array $parts)
  {
    $this->_templateParts = $parts;
  }

  public function setActionViewFile($actionViewPath)
  {
    $this->_action_view = $actionViewPath;
  }

  public function setAdminData($data)
  {
    $this->_data = $data;
  }

  public function setDictionary($dictionary)
  {
    $this->_dictionary = $dictionary;
  }

  public function setRegistry($registry)
  {
    $this->_registry = $registry;
  }



  private function renderAdminHeaderStart()
    {
        require_once ADMIN_TEMPLATE_PATH . 'adminheaderstart.php';
    }

    private function renderAdminHeaderEnd()
    {
        require_once ADMIN_TEMPLATE_PATH . 'templateheaderend.php';
    }

    private function renderAdminFooter()
    {
        require_once ADMIN_TEMPLATE_PATH . 'adminfooter.php';
    }

    private function renderAdminBlocks()
    {
        if (!array_key_exists('template', $this->_templateParts)) {
            trigger_error('Sorry you have to define the template blocks', E_USER_WARNING);
        } else {
            $parts = $this->_templateParts['template'];
            if (!empty($parts)) {
                extract($this->_data);
                foreach($parts as $partKey => $file) {
                    if ($partKey === ':view') {
                        require_once  $this->_action_view;
                    } else {
                        require_once $file;
                    }
                }
            }
        }
    }

    public function renderAdminHeaderResources()
    {
        $output = '';
        if (!array_key_exists('header_resources', $this->_templateParts)) {
            trigger_error('Sorry you have to define the header resources', E_USER_WARNING);
        } else {
            $resources = $this->_templateParts['header_resources'];

            //Generate Css Links
            $css = $resources['css'];
            if (!empty($css)) {
                foreach ($css as $cssKey => $path) {
                    $output .= '<link type="text/css" rel="stylesheet" href="' . $path .'" />';
                }
            }

        }
        echo $output;

    }
    public function renderAdminFooterResources()
    {
        $output = '';
        if (!array_key_exists('plugins_scripts', $this->_templateParts)) {
            trigger_error('Sorry you have to define the template renderFooterResources', E_USER_WARNING);
        } else {
            $resources = $this->_templateParts['plugins_scripts'];

            //Generate JS Links
            if (!empty($resources)) {
                foreach($resources as $resourceKey => $path) {
                   $output .= '<script src="' . $path .'" > </script>';
                }
            }
        }
        echo $output;
    }

    public function renderAdminApp()
    {
        $this->renderAdminHeaderStart();
        $this->renderAdminHeaderResources();
        $this->renderAdminHeaderEnd();
        $this->renderAdminBlocks();
        $this->renderAdminFooterResources();
        $this->renderAdminFooter();
    }
}
