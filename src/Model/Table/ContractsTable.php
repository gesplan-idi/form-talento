<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contracts Model
 *
 * @method \App\Model\Entity\Contract newEmptyEntity()
 * @method \App\Model\Entity\Contract newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Contract[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contract get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contract findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Contract patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contract[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contract|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contract saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contract[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contract[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contract[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contract[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ContractsTable extends Table
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

        $this->setTable('contracts');
        $this->setDisplayField('tipo');
        $this->setPrimaryKey('id');
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
            ->scalar('tipo')
            ->maxLength('tipo', 50)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        return $validator;
    }
}
