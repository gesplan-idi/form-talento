<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SkillsFixture
 */
class SkillsFixture extends TestFixture
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
                'user_id' => '9c6b41c1-7f48-4e32-bc79-76530d284470',
                'skill_category_id' => 1,
                'otros' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
