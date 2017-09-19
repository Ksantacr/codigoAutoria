<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recharges Model
 *
 * @property \App\Model\Table\WalletsTable|\Cake\ORM\Association\BelongsTo $Wallets
 *
 * @method \App\Model\Entity\Recharge get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recharge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recharge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recharge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recharge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recharge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recharge findOrCreate($search, callable $callback = null, $options = [])
 */
class RechargesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('recharges');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Wallets', [
            'foreignKey' => 'wallets_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['wallets_id'], 'Wallets'));

        return $rules;
    }
}
