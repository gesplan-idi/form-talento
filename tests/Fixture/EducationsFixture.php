<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EducationsFixture
 */
class EducationsFixture extends TestFixture
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
                'user_id' => '0a455f43-0074-41f5-9853-70b540cb2c84',
                'nombre_titulacion' => 'Lorem ipsum dolor sit amet',
                'ano_finalizacion' => 1,
                'institucion' => 'Lorem ipsum dolor sit amet',
                'nivel_id' => 1,
            ],
        ];
        parent::init();
    }
}
