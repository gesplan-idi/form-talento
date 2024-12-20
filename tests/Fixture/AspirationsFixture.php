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
                'user_id' => '2cf89905-34e0-43f5-a229-ff9219e26f0a',
                'intereses' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'posicion_interes_pregunta' => 1,
                'proyecto_nacional' => 1,
                'proyecto_internacional' => 1,
                'disponibility_id' => 1,
                'disponibilidad_viajar' => 1,
                'cambio_isla' => 1,
                'isla_destino' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
