<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LanguageLevels Model
 *
 * @method \App\Model\Entity\LanguageLevel newEmptyEntity()
 * @method \App\Model\Entity\LanguageLevel newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LanguageLevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LanguageLevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\LanguageLevel findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LanguageLevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LanguageLevel[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LanguageLevel|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LanguageLevel saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LanguageLevel[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LanguageLevel[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LanguageLevel[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LanguageLevel[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class LanguageLevelsTable extends Table
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

        $this->setTable('language_levels');
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
            ->maxLength('nivel', 10)
            ->requirePresence('nivel', 'create')
            ->notEmptyString('nivel');

        return $validator;
    }
}
