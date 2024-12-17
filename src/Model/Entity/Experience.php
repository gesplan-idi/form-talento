<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Experience Entity
 *
 * @property int $id
 * @property string|null $user_id
 * @property string|null $nombre_empresa
 * @property string|null $nombre_proyecto
 * @property string|null $cargo
 * @property \Cake\I18n\FrozenDate|null $periodo_inicio
 * @property \Cake\I18n\FrozenDate|null $periodo_fin
 * @property string|null $responsabilidades
 * @property string|null $logros
 * @property string|null $trabajos
 * @property int $tipo_id
 *
 * @property \App\Model\Entity\User $user
 */
class Experience extends Entity
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
        'nombre_empresa' => true,
        'nombre_proyecto' => true,
        'cargo' => true,
        'periodo_inicio' => true,
        'periodo_fin' => true,
        'responsabilidades' => true,
        'logros' => true,
        'trabajos' => true,
        'tipo_id' => true,
        'user' => true,
    ];
}
