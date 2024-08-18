<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateRolesTable extends AbstractMigration
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
        $table = $this->table('roles');
        $table->addColumn('name', 'string', ['limit' => 50, 'null' => false])
            ->addColumn('description', 'string', ['limit' => 255, 'null' => false])
            ->addTimestamps()
            ->addColumn('deleted_at', 'timestamp', ['null' => true, 'default' => null])
            ->addIndex(['name'], ['unique' => true])
            ->create();
    }
    public function down(): void
    {
        $this->table("roles")->drop()->save();
    }
}
