<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\Event\Event;
use ArrayObject;
use Cake\I18n\Time;

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
        $this->addBehavior('Search.Search', [
            'emptyValues' => ['']
        ]); // adicionando o comportamento

        $this->searchManager()
            ->value('nome')
            // Here we will alias the 'q' query param to search the `Articles.title`
            // field and the `Articles.content` field, using a LIKE match, with `%`
            // both before and after.
            ->add('q', 'Search.Like', [
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['nome', 'numero']
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                }
            ]);

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
    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
    {
        if (isset($data['data'])) {
            $data['data'] = Time::parseDate($data['data']);
        }
    }
}
