<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillsTable Test Case
 */
class BillsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BillsTable
     */
    protected $Bills;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Bills',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bills') ? [] : ['className' => BillsTable::class];
        $this->Bills = $this->getTableLocator()->get('Bills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Bills);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BillsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
