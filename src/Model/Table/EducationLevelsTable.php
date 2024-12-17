<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EducationLevels Model
 *
 * @method \App\Model\Entity\EducationLevel newEmptyEntity()
 * @method \App\Model\Entity\EducationLevel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EducationLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EducationLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\EducationLevel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EducationLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EducationLevel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EducationLevel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EducationLevel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EducationLevel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EducationLevel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EducationLevel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EducationLevel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EducationLevelsTable extends Table
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

        $this->setTable('education_levels');
        $this->setDisplayField('nivel');
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
            ->scalar('nivel')
            ->maxLength('nivel', 50)
            ->requirePresence('nivel', 'create')
            ->notEmptyString('nivel');

        return $validator;
    }
}
