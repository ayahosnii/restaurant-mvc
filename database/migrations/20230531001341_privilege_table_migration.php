<?php

use Phinx\Migration\AbstractMigration;

final class PrivilegeTableMigration extends AbstractMigration
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
    $table = $this->table('app_users_privileges');
    $table->addColumn('PrivilegeId', 'integer', ['limit' => 3])
      ->addColumn('Privilege', 'string', ['limit' => 255])
      ->addColumn('PrivilegeTitle', 'string', ['limit' => 255])
      ->addTimestamps()
      ->create();
  }
}
