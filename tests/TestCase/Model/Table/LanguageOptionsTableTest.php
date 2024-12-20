<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LanguageOptionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LanguageOptionsTable Test Case
 */
class LanguageOptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LanguageOptionsTable
     */
    protected $LanguageOptions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.LanguageOptions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('LanguageOptions') ? [] : ['className' => LanguageOptionsTable::class];
        $this->LanguageOptions = $this->getTableLocator()->get('LanguageOptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->LanguageOptions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\LanguageOptionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
