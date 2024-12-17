<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SkillCategory Entity
 *
 * @property int $id
 * @property string $categoria
 * @property string $subcategoria
 *
 * @property \App\Model\Entity\Skill[] $skills
 */
class SkillCategory extends Entity
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
        'categoria' => true,
        'subcategoria' => true,
        'skills' => true,
    ];
}
