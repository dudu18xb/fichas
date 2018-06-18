<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fichasodontologicas Model
 *
 * @method \App\Model\Entity\Fichasodontologica get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fichasodontologica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fichasodontologica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fichasodontologica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fichasodontologica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fichasodontologica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fichasodontologica findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FichasodontologicasTable extends Table
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

        $this->setTable('fichasodontologicas');
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
