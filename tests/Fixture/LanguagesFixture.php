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
                'user_id' => '1399c112-b3a6-40a4-b5ad-cba592e2af8d',
                'idioma' => 'Lorem ipsum dolor sit amet',
                'certificado' => 1,
                'institucion' => 'Lorem ipsum dolor sit amet',
                'nivel_id' => 1,
            ],
        ];
        parent::init();
    }
}
