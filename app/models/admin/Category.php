<?php
namespace app\models\admin;

use app\models\AbstractModel;

class Category extends AbstractModel
{

  public $id;
  public $name;

  protected static $tableName = 'categories';

  protected static $tableSchema = array(
    'id'       => self::DATA_TYPE_INT,
    'name'     => self::DATA_TYPE_STR,
  );

  protected static $primaryKey = 'id';
}
