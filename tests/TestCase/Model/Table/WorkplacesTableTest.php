<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkplacesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkplacesTable Test Case
 */
class WorkplacesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkplacesTable
     */
    protected $Workplaces;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Workplaces',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Workplaces') ? [] : ['className' => WorkplacesTable::class];
        $this->Workplaces = $this->getTableLocator()->get('Workplaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Workplaces);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WorkplacesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
