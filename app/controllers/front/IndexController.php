<?php

namespace app\controllers\front;

use app\controllers\AbstractController;
use app\models\admin\Menu;

class IndexController extends AbstractController
{
    public function defaultAction()
    {
        $this->messenger->add('hi');
        unset($this->session->messages);
        $this->session->messages = 'hi';
        var_dump($this->session->messages);
        $this->language->load('template.common');
        $this->language->load('index.default');

      $this->_data['menus'] = Menu::getAll();

      var_dump($this->_data['menus']);
      $this->_view();
    }

    public function addAction()
    {
        $this->_view();
    }
}
