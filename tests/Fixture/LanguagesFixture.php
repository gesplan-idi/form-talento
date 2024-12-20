<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LanguagesFixture
 */
class LanguagesFixture extends TestFixture
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
                'user_id' => '4a571e44-57f4-4088-8ce5-3b020d6d76e8',
                'option_id' => 1,
                'certificado' => 1,
                'institucion' => 'Lorem ipsum dolor sit amet',
                'nivel_id' => 1,
            ],
        ];
        parent::init();
    }
}
