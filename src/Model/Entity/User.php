<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $role
 * @property string $dni
 * @property string $nombre
 * @property string $apellidos
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento
 * @property string $email
 * @property string $password
 * @property int|null $position_id
 * @property string|null $puesto_otro
 * @property int|null $profession_id
 * @property string|null $profesion_id_otro
 * @property int|null $nationality_id
 * @property string|null $foto
 * @property bool|null $discapacidad
 * @property int|null $department_id
 * @property int|null $categoria_id
 * @property int|null $contrato_id
 * @property int|null $workplace_id
 * @property int|null $experiencia_gesplan
 * @property int|null $experiencia_total
 * @property bool $disponibilidad_traslado
 * @property string|null $observ_disp_traslado
 * @property bool $formulario_aceptado
 *
 * @property \App\Model\Entity\Position $position
 * @property \App\Model\Entity\Profession $profession
 * @property \App\Model\Entity\Nationality $nationality
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Contract $contract
 * @property \App\Model\Entity\Workplace $workplace
 * @property \App\Model\Entity\Aspiration[] $aspirations
 * @property \App\Model\Entity\Education[] $educations
 * @property \App\Model\Entity\Experience[] $experiences
 * @property \App\Model\Entity\Language[] $languages
 * @property \App\Model\Entity\Skill[] $skills
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'role' => false,
        'dni' => true,
        'nombre' => true,
        'apellidos' => true,
        'fecha_nacimiento' => true,
        'email' => true,
        'password' => false,
        'position_id' => true,
        'puesto_otro' => true,
        'profession_id' => true,
        'profesion_id_otro' => true,
        'nationality_id' => true,
        'foto' => true,
        'discapacidad' => true,
        'department_id' => true,
        'categoria_id' => true,
        'contrato_id' => true,
        'workplace_id' => true,
        'experiencia_gesplan' => true,
        'experiencia_total' => true,
        'disponibilidad_traslado' => true,
        'observ_disp_traslado' => true,
        'formulario_aceptado' => true,
        'position' => true,
        'profession' => true,
        'nationality' => true,
        'department' => true,
        'category' => true,
        'contract' => true,
        'workplace' => true,
        'aspirations' => true,
        'educations' => true,
        'experiences' => true,
        'languages' => true,
        'skills' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
