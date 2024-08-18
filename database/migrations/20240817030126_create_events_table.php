<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateEventsTable extends AbstractMigration
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
        $table = $this->table('events');
        $table->addColumn('organizer_id', 'integer', ["signed" => false, 'null'=>false])
            ->addColumn('title', 'string', ['limit' => 255, 'null'=>false])
            ->addColumn('description', 'text', ['null' => false])
            ->addColumn('location', 'string', ['limit' => 255, 'null'=>false])
            ->addColumn('event_date', 'datetime', ['null'=> false])
            ->addTimestamps()
            ->addColumn('deleted_at', 'timestamp', ['null' => true, 'default' => null])
            ->addForeignKey('organizer_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
    public function down(): void
    {
        $this->table("events")->drop()->save();
    }
}
