<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * School Entity
 *
 * @property int $id
 * @property string $INSTNM
 * @property string $CITY
 * @property string $STABBR
 * @property string $ZIP
 * @property string $OBEREG
 * @property string $WEBADDR
 * @property string $HLOFFER
 * @property string $LOCALE
 * @property string $INSTCAT
 * @property string $INSTSIZE
 * @property string $APPLFEEG
 * @property string $TUITION6
 * @property string $TUITION7
 * @property string $APPLCN
 * @property string $ADMSSN
 * @property string $ENRLT
 * @property string $SATMT25
 * @property string $SATMT75
 * @property string $SATWR25
 * @property string $SATWR75
 *
 * @property \App\Model\Entity\Favorite[] $favorites
 * @property \App\Model\Entity\Offering[] $offerings
 */
class School extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
