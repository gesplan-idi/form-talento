<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Skill Entity
 *
 * @property int $id
 * @property string|null $user_id
 * @property int|null $skill_category_id
 * @property string|null $otros
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\SkillCategory $skill_category
 */
class Skill extends Entity
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
        'skill_category_id' => true,
        'otros' => true,
        'user' => true,
        'skill_category' => true,
    ];
}
