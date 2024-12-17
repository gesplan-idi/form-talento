<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ExperienceTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ExperienceTypesTable Test Case
 */
class ExperienceTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ExperienceTypesTable
     */
    protected $ExperienceTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ExperienceTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ExperienceTypes') ? [] : ['className' => ExperienceTypesTable::class];
        $this->ExperienceTypes = $this->getTableLocator()->get('ExperienceTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ExperienceTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ExperienceTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
