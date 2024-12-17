<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aspiration Entity
 *
 * @property int $id
 * @property string|null $user_id
 * @property string|null $intereses
 * @property bool|null $posicion_interes
 * @property bool|null $proyecto_nacional
 * @property bool|null $proyecto_internacional
 * @property string|null $disponibilidad_retos
 * @property bool|null $disponibilidad_viajar
 * @property bool|null $cambio_isla
 * @property string|null $isla_destino
 *
 * @property \App\Model\Entity\User $user
 */
class Aspiration extends Entity
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
        'intereses' => true,
        'posicion_interes' => true,
        'proyecto_nacional' => true,
        'proyecto_internacional' => true,
        'disponibilidad_retos' => true,
        'disponibilidad_viajar' => true,
        'cambio_isla' => true,
        'isla_destino' => true,
        'user' => true,
    ];
}
