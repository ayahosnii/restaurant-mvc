<?php
namespace app\models\admin;

use app\models\AbstractModel;

class Menu extends AbstractModel
{

  public $id;
  public $item_name;
  public $description;
  public $price;
  public $image;
  public $category_id;

  protected static $tableName = 'menu';

  protected static $tableSchema = array(
    'id'       => self::DATA_TYPE_INT,
    'item_name'     => self::DATA_TYPE_STR,
    'description'     => self::DATA_TYPE_STR,
    'price'     => self::DATA_TYPE_DECIMAL,
    'image'     => self::DATA_TYPE_STR,
    'category_id'     => self::DATA_TYPE_INT,
  );

  protected static $primaryKey = 'id';
  protected static $foreignKey = 'category_id';

}
