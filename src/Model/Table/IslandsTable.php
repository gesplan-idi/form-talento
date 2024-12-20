<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Islands Model
 *
 * @property \App\Model\Table\AspirationsTable&\Cake\ORM\Association\HasMany $Aspirations
 *
 * @method \App\Model\Entity\Island newEmptyEntity()
 * @method \App\Model\Entity\Island newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Island[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Island get($primaryKey, $options = [])
 * @method \App\Model\Entity\Island findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Island patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Island[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Island|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Island saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Island[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Island[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Island[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Island[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class IslandsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('islands');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Aspirations', [
            'foreignKey' => 'island_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }
}
