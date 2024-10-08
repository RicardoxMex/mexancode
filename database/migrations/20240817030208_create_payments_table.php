<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePaymentsTable extends AbstractMigration
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
        $table = $this->table('payments');
        $table->addColumn('event_id', 'integer', ["signed" => false])
            ->addColumn('user_id', 'integer', ["signed" => false])
            ->addColumn('amount', 'decimal', ['precision' => 10, 'scale' => 2])
            ->addColumn('payment_status', 'enum', ['values' => ['pending', 'completed', 'failed'], 'default' => 'pending'])
            ->addColumn('payment_date', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addTimestamps()
            ->addColumn('deleted_at', 'timestamp', ['null' => true, 'default' => null])
            ->addForeignKey('event_id', 'events', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
            ->create();
    }
    public function down(): void
    {
        $this->table("payments")->drop()->save();
    }
}
