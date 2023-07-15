<?php

namespace app\controllers\front\Meals;

use app\models\admin\Menu;

class Salad extends Meals
{
  public $categoryId = 5;
  public function display()
  {
    return $this->meal;
  }



}
