<?php

namespace app\controllers\front\Meals;

use app\models\admin\Menu;

class Appetizers extends Meals
{
  public $categoryId = 1;

  public function display()
  {
    return $this->meal;
  }

}
