<?php

use Phinx\Migration\AbstractMigration;

final class MenuTableMigration extends AbstractMigration
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
    $table = $this->table('menu');
    $table->addColumn('item_name', 'string', ['limit' => 255])
      ->addColumn('description', 'text')
      ->addColumn('price', 'decimal', ['precision' => 10, 'scale' => 2])
      ->addColumn('image', 'string', ['limit' => 255, 'null' => true])
      ->addColumn('category_id', 'integer', ['signed' => false, 'null' => true])
      ->addForeignKey('category_id', 'categories', 'id', ['delete' => 'SET_NULL', 'update' => 'CASCADE'])
      ->addColumn('created_at', 'datetime')
      ->addColumn('updated_at', 'datetime', ['null' => true])
      ->create();
  }


}
