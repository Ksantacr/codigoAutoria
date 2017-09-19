<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Channels Model
 *
 * @property \App\Model\Table\LanguagesTable|\Cake\ORM\Association\BelongsTo $Languages
 * @property \App\Model\Table\MatchsTable|\Cake\ORM\Association\BelongsTo $Matchs
 *
 * @method \App\Model\Entity\Channel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Channel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Channel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Channel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Channel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Channel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Channel findOrCreate($search, callable $callback = null, $options = [])
 */
class ChannelsTable extends Table
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

        $this->setTable('channels');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Languages', [
            'foreignKey' => 'languages_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Matchs', [
            'foreignKey' => 'matchs_id',
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->existsIn(['languages_id'], 'Languages'));
        $rules->add($rules->existsIn(['matchs_id'], 'Matchs'));

        return $rules;
    }
}
