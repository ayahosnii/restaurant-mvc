<?php

use Phinx\Migration\AbstractMigration;

final class CreateCategoryTable extends AbstractMigration
{
  /**
   * Change Method.
   *
   * Write your reversible migrations using this method.
   *
   * More information on writing migrations is available here:
   * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
   *
   * Remember to call "create()" or "update()" and NOT "save()" when working
   * with the Table class.
   */
  public function change()
  {
    $table = $this->table('categories');
    $table->addColumn('name', 'string', ['limit' => 255])
      ->addColumn('created_at', 'datetime')
      ->addColumn('updated_at', 'datetime', ['null' => true])
      ->create();
  }
}
