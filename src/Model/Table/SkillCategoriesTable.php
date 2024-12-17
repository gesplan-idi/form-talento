<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SkillCategories Model
 *
 * @property \App\Model\Table\SkillsTable&\Cake\ORM\Association\HasMany $Skills
 *
 * @method \App\Model\Entity\SkillCategory newEmptyEntity()
 * @method \App\Model\Entity\SkillCategory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SkillCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SkillCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\SkillCategory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SkillCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SkillCategory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SkillCategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SkillCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SkillCategory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SkillCategory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SkillCategory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SkillCategory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SkillCategoriesTable extends Table
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

        $this->setTable('skill_categories');
        $this->setDisplayField('categoria');
        $this->setPrimaryKey('id');

        $this->hasMany('Skills', [
            'foreignKey' => 'skill_category_id',
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
            ->scalar('categoria')
            ->maxLength('categoria', 255)
            ->requirePresence('categoria', 'create')
            ->notEmptyString('categoria');

        $validator
            ->scalar('subcategoria')
            ->maxLength('subcategoria', 255)
            ->requirePresence('subcategoria', 'create')
            ->notEmptyString('subcategoria');

        return $validator;
    }
}
