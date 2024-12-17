<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EducationLevelsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EducationLevelsTable Test Case
 */
class EducationLevelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EducationLevelsTable
     */
    protected $EducationLevels;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.EducationLevels',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EducationLevels') ? [] : ['className' => EducationLevelsTable::class];
        $this->EducationLevels = $this->getTableLocator()->get('EducationLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EducationLevels);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EducationLevelsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
