<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => 'cbd84887-3bdc-4983-9643-5d4c3c3e11e0',
                'role' => 'Lorem ipsum dolor sit amet',
                'dni' => 'Lorem i',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'fecha_nacimiento' => '2024-12-20',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'position_id' => 1,
                'puesto_otro' => 'Lorem ipsum dolor sit amet',
                'profession_id' => 1,
                'profesion_id_otro' => 'Lorem ipsum dolor sit amet',
                'nationality_id' => 1,
                'foto' => 'Lorem ipsum dolor sit amet',
                'discapacidad' => 1,
                'department_id' => 1,
                'categoria_id' => 1,
                'contrato_id' => 1,
                'workplace_id' => 1,
                'experiencia_gesplan' => 1,
                'experiencia_total' => 1,
                'disponibilidad_traslado' => 1,
                'observ_disp_traslado' => 'Lorem ipsum dolor sit amet',
                'formulario_aceptado' => 1,
            ],
        ];
        parent::init();
    }
}
