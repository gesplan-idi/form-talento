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
                'id' => 'c31075b3-6733-494a-b218-c88a29fd6d5f',
                'dni' => 'Lorem i',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'fecha_nacimiento' => '2024-12-17',
                'profesion' => 'Lorem ipsum dolor sit amet',
                'puesto' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'nacionalidad' => 'Lorem ipsum dolor sit amet',
                'foto' => 'Lorem ipsum dolor sit amet',
                'discapacidad' => 1,
                'department_id' => 1,
                'categoria_id' => 1,
                'contrato_id' => 1,
                'workplace_id' => 1,
                'experiencia_gesplan' => 1,
                'experiencia_total' => 1,
                'disponibilidad_traslado' => 'Lorem ipsum dolor sit amet',
                'formulario_aceptado' => 1,
            ],
        ];
        parent::init();
    }
}
