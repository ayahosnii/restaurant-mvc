<?php

namespace app\controllers\front\Meals;

use app\models\admin\Menu;

class Pasta extends Meals
{
  public $categoryId = 3;
  public function display()
  {
    return Menu::getByPK($this->categoryId);
  }

  public function getName(): string
  {
    return $this->display()->item_name;
  }


}
