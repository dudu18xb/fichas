<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fichasmedicas Model
 *
 * @method \App\Model\Entity\Fichasmedica get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fichasmedica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fichasmedica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fichasmedica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fichasmedica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fichasmedica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fichasmedica findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FichasmedicasTable extends Table
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

        $this->setTable('fichasmedicas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 255)
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->date('data')
            ->requirePresence('data', 'create')
            ->notEmpty('data');

        return $validator;
    }
}
