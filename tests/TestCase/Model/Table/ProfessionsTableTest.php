<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfessionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfessionsTable Test Case
 */
class ProfessionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfessionsTable
     */
    protected $Professions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Professions',
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
        $config = $this->getTableLocator()->exists('Professions') ? [] : ['className' => ProfessionsTable::class];
        $this->Professions = $this->getTableLocator()->get('Professions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Professions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfessionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
