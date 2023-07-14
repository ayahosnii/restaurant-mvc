<?php

namespace app\controllers\front;

use app\controllers\AbstractController;
use app\controllers\front\Meals\Appetizers;
use app\controllers\front\Meals\Pasta;

class MenuController extends AbstractController
{
    public function defaultAction()
    {
        $this->messenger->add('hi');
        unset($this->session->messages);
        $this->language->load('template.common');
        $this->language->load('index.default');


        $appetizers  = new Appetizers();
        $this->_data['appetizers']  = $appetizers->display();

        $pasta  = new Pasta();
        $this->_data['pastas']  = $pasta->display();

        $this->_view();
    }

    public function addAction()
    {
        $this->_view();
    }
}
