<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IslandsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IslandsTable Test Case
 */
class IslandsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IslandsTable
     */
    protected $Islands;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Islands',
        'app.Aspirations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Islands') ? [] : ['className' => IslandsTable::class];
        $this->Islands = $this->getTableLocator()->get('Islands', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Islands);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\IslandsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
