<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property string $name
 * @property string $lastName
 * @property string $identificationCard
 * @property int $age
 * @property string $mail
 * @property int $genders_id
 * @property string $phone
 * @property int $countries_id
 *
 * @property \App\Model\Entity\Gender $gender
 * @property \App\Model\Entity\Country $country
 */
class Person extends Entity
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
