<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Education Entity
 *
 * @property int $id
 * @property string|null $user_id
 * @property string $nombre_titulacion
 * @property int|null $ano_finalizacion
 * @property string|null $institucion
 * @property int|null $nivel_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EducationLevel $education_level
 */
class Education extends Entity
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
        'user_id' => true,
        'nombre_titulacion' => true,
        'ano_finalizacion' => true,
        'institucion' => true,
        'nivel_id' => true,
        'user' => true,
        'education_level' => true,
    ];
}
