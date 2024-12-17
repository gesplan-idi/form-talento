<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AspirationsFixture
 */
class AspirationsFixture extends TestFixture
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
                'user_id' => 'ad9eb5ec-bfa3-4132-b48e-f759fde6aa53',
                'intereses' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'posicion_interes' => 1,
                'proyecto_nacional' => 1,
                'proyecto_internacional' => 1,
                'disponibilidad_retos' => 'Lorem ipsum dolor sit amet',
                'disponibilidad_viajar' => 1,
                'cambio_isla' => 1,
                'isla_destino' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
