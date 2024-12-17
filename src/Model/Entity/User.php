<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $dni
 * @property string $nombre
 * @property string $apellidos
 * @property \Cake\I18n\FrozenDate $fecha_nacimiento
 * @property string|null $profesion
 * @property string|null $puesto
 * @property string $email
 * @property string $password
 * @property string|null $nacionalidad
 * @property string|null $foto
 * @property bool|null $discapacidad
 * @property int|null $department_id
 * @property int|null $categoria_id
 * @property int|null $contrato_id
 * @property int|null $workplace_id
 * @property int $experiencia_gesplan
 * @property int $experiencia_total
 * @property string|null $disponibilidad_traslado
 * @property bool $formulario_aceptado
 *
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
        'dni' => true,
        'nombre' => true,
        'apellidos' => true,
        'fecha_nacimiento' => true,
        'profesion' => true,
        'puesto' => true,
        'email' => true,
        'password' => true,
        'nacionalidad' => true,
        'foto' => true,
        'discapacidad' => true,
        'department_id' => true,
        'categoria_id' => true,
        'contrato_id' => true,
        'workplace_id' => true,
        'experiencia_gesplan' => true,
        'experiencia_total' => true,
        'disponibilidad_traslado' => true,
        'formulario_aceptado' => true,
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
