<?php

namespace app\controllers\front\Meals;

use app\controllers\AdAbstractController;
use app\models\admin\Menu;

class Meals
{

  /**
   * @var string
   */
  public $name;
  /**
   * @var float
   */
  public $price;

  /**
   * @var string
   */
  public $description;

  protected $image;
  /**
   * @var int
   */
  protected $categoryId;
  protected $createdAt;
  protected $updatedAt;
  /**
   * @return string
   */

  public function __construct()
  {
    $this->meal = Menu::getByForeignKey($this->categoryId);
  }

}
