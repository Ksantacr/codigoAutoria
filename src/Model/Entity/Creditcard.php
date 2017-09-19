<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Creditcard Entity
 *
 * @property int $id
 * @property string $placeholder
 * @property string $credit_number
 * @property string $expiration_date
 * @property int $banks_id
 *
 * @property \App\Model\Entity\Bank $bank
 */
class Creditcard extends Entity
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
