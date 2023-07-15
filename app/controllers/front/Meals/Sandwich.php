<?php

namespace app\controllers\front\Meals;

use app\models\admin\Menu;

class Sandwich extends Meals
{
  public $categoryId = 6;
  public function display()
  {
    return $this->meal;
  }



}
