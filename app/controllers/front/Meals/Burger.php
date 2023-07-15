<?php

namespace app\controllers\front\Meals;

use app\models\admin\Menu;

class Burger extends Meals
{
  public $categoryId = 2;
  public function display()
  {
    return $this->meal;
  }

}
