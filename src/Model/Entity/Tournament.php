<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tournament Entity
 *
 * @property int $id
 * @property int $sponsors_id
 * @property int $prizePool
 * @property string $type
 * @property string $organizer
 * @property string $name
 * @property string $startDate
 * @property string $endDate
 * @property string $location
 *
 * @property \App\Model\Entity\Sponsor $sponsor
 */
class Tournament extends Entity
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
