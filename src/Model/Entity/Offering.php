<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offering Entity
 *
 * @property int $id
 * @property int $school_id
 * @property int $program_id
 * @property string $PMASTR
 * @property string $PDOCRS
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Program $program
 */
class Offering extends Entity
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
        'id' => false,
        'school_id' => false,
        'program_id' => false
    ];
}
