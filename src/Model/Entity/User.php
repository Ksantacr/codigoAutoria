<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $status_id
 * @property \Cake\I18n\FrozenTime $created
 * @property int $people_id
 * @property int $roles_id
 *
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Role $role
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password){
        if(strlen($password)>0){
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
