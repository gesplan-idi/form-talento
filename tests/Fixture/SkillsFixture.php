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
                'user_id' => '2f28e9fe-9495-42c2-92fb-6aca2fd40d9d',
                'skill_category_id' => 1,
                'otros' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
