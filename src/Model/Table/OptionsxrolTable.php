<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Optionsxrol Model
 *
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\OptionsTable|\Cake\ORM\Association\BelongsTo $Options
 *
 * @method \App\Model\Entity\Optionsxrol get($primaryKey, $options = [])
 * @method \App\Model\Entity\Optionsxrol newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Optionsxrol[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Optionsxrol|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Optionsxrol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Optionsxrol[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Optionsxrol findOrCreate($search, callable $callback = null, $options = [])
 */
class OptionsxrolTable extends Table
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

        $this->setTable('optionsxrol');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Roles', [
            'foreignKey' => 'roles_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Options', [
            'foreignKey' => 'options_id',
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
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['roles_id'], 'Roles'));
        $rules->add($rules->existsIn(['options_id'], 'Options'));

        return $rules;
    }
}
