<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tournaments Model
 *
 * @property \App\Model\Table\SponsorsTable|\Cake\ORM\Association\BelongsTo $Sponsors
 *
 * @method \App\Model\Entity\Tournament get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tournament newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tournament[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tournament|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tournament patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tournament[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tournament findOrCreate($search, callable $callback = null, $options = [])
 */
class TournamentsTable extends Table
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

        $this->setTable('tournaments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Sponsors', [
            'foreignKey' => 'sponsors_id',
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
            ->integer('prizePool')
            ->requirePresence('prizePool', 'create')
            ->notEmpty('prizePool');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('organizer', 'create')
            ->notEmpty('organizer');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('startDate', 'create')
            ->notEmpty('startDate');

        $validator
            ->requirePresence('endDate', 'create')
            ->notEmpty('endDate');

        $validator
            ->requirePresence('location', 'create')
            ->notEmpty('location');

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
        $rules->add($rules->existsIn(['sponsors_id'], 'Sponsors'));

        return $rules;
    }
}
