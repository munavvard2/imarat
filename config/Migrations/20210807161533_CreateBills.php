<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBills extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('bills');
        $table->addColumn('cust_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('site', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('mukam', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('from_date', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('to_date', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('days', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('p_3_2', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('p_3_1_ll', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('p_3_1_l', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('p_3_1', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('teka', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('aadi', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('total', 'decimal', [
            'default' => null,
            'null' => true,
            'precision' => 10,
            'scale' => 2,
        ]);
        $table->addColumn('created_by', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
