<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SkillCategoriesFixture
 */
class SkillCategoriesFixture extends TestFixture
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
                'categoria' => 'Lorem ipsum dolor sit amet',
                'subcategoria' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
