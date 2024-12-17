<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LanguageLevelsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LanguageLevelsTable Test Case
 */
class LanguageLevelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LanguageLevelsTable
     */
    protected $LanguageLevels;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LanguageLevels',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LanguageLevels') ? [] : ['className' => LanguageLevelsTable::class];
        $this->LanguageLevels = $this->getTableLocator()->get('LanguageLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LanguageLevels);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LanguageLevelsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
