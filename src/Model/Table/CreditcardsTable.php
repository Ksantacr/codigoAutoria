<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Creditcards Model
 *
 * @property \App\Model\Table\BanksTable|\Cake\ORM\Association\BelongsTo $Banks
 *
 * @method \App\Model\Entity\Creditcard get($primaryKey, $options = [])
 * @method \App\Model\Entity\Creditcard newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Creditcard[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Creditcard|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Creditcard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Creditcard[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Creditcard findOrCreate($search, callable $callback = null, $options = [])
 */
class CreditcardsTable extends Table
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

        $this->setTable('creditcards');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Banks', [
            'foreignKey' => 'banks_id',
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
            ->requirePresence('placeholder', 'create')
            ->notEmpty('placeholder');

        $validator
            ->requirePresence('credit_number', 'create')
            ->notEmpty('credit_number');

        $validator
            ->requirePresence('expiration_date', 'create')
            ->notEmpty('expiration_date');

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
        $rules->add($rules->existsIn(['banks_id'], 'Banks'));

        return $rules;
    }
}
