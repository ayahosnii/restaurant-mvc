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
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @return float
   */
  public function getPrice(): float
  {
    return $this->price;
  }

  /**
   * @return string
   */
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * @return int
   */
  public function getCategory(): int
  {
    return $this->categoryId;
  }
}
