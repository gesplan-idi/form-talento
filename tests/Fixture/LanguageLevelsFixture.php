<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LanguageLevelsFixture
 */
class LanguageLevelsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nivel' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
