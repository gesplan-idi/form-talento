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
                'id' => '2b0c3b1e-ade9-40f4-a587-69bd7417cc0d',
                'dni' => 'Lorem i',
                'nombre_apellidos' => 'Lorem ipsum dolor sit amet',
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
