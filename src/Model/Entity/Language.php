<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Language Entity
 *
 * @property int $id
 * @property string|null $user_id
 * @property int $option_id
 * @property bool|null $certificado
 * @property string|null $institucion
 * @property int|null $nivel_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\LanguageOption $language_option
 * @property \App\Model\Entity\LanguageLevel $language_level
 */
class Language extends Entity
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
        'option_id' => true,
        'certificado' => true,
        'institucion' => true,
        'nivel_id' => true,
        'user' => true,
        'language_option' => true,
        'language_level' => true,
    ];
}
