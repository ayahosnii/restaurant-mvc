<?php

namespace app\controllers\front\Meals;

use app\models\admin\Menu;

class Pasta extends Meals
{
  public $categoryId = 3;
  public function display()
  {
    return $this->meal;
  }


}
