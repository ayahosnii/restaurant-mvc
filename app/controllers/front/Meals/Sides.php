<?php

namespace app\controllers\front\Meals;

use app\models\admin\Menu;

class Sides extends Meals
{
  public $categoryId = 4;
  public function display()
  {
    return $this->meal;
  }



}
