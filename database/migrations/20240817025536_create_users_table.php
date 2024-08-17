<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
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
    public function up(): void
    {
        $table = $this->table('users');
        $table
            ->addColumn('first_name', 'string', ['limit' => 150, 'null' => false])
            ->addColumn('last_name', 'string', ['limit' => 50, 'null' => false])
            ->addColumn('username', 'string', ['limit' => 50, 'null' => false])
            ->addColumn('email', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('password', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('reset_token', 'string', ['limit' => 255, 'null' => true, 'default' => null])
            ->addTimestamps()
            ->addColumn('deleted_at', 'timestamp', ['null' => true, 'default' => null])
            ->addIndex(['email'], ['unique' => true])
            ->addIndex(['username'], ['unique' => true])
            ->create();
    }
    public function down(): void
    {
        $this->table("users")->drop()->save();
    }
}
