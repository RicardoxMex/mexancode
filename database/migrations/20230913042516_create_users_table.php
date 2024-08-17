<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateUsersTable extends AbstractMigration
{
    public function up(): void
    {
        $users = $this->table('users');
        $users
            ->addColumn('first_name', 'string', ['limit' => 150, 'null'=>false])
            ->addColumn('last_name', 'string', ['limit' => 50, 'null'=>false])
            ->addColumn('username', 'string', ['limit' => 50, 'null'=>false])
            ->addColumn('email', 'string', ['limit' => 100, 'null'=>false])
            ->addColumn('password', 'string', ['limit' => 255, 'null'=>false])
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

