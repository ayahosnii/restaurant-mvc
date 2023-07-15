<?php

namespace app\controllers\front;

use app\controllers\AbstractController;
use app\controllers\front\Meals\Appetizers;
use app\controllers\front\Meals\Burger;
use app\controllers\front\Meals\Pasta;
use app\controllers\front\Meals\Salad;
use app\controllers\front\Meals\Sandwich;
use app\controllers\front\Meals\Sides;

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

        $burgers  = new Burger();
        $this->_data['burgers']  = $burgers->display();

        $pasta  = new Pasta();
        $this->_data['pasta']  = $pasta->display();


        $sides  = new Sides();
        $this->_data['sides']  = $sides->display();


        $salads  = new Salad();
        $this->_data['salads']  = $salads->display();


        $sandwiches  = new Sandwich();
        $this->_data['sandwiches']  = $sandwiches->display();

        $this->_view();
    }

    public function addAction()
    {
        $this->_view();
    }
}
