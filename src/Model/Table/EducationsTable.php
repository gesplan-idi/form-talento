<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Educations Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EducationLevelsTable&\Cake\ORM\Association\BelongsTo $EducationLevels
 *
 * @method \App\Model\Entity\Education newEmptyEntity()
 * @method \App\Model\Entity\Education newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Education[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Education get($primaryKey, $options = [])
 * @method \App\Model\Entity\Education findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Education patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Education[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Education|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Education saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Education[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Education[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Education[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Education[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EducationsTable extends Table
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

        $this->setTable('educations');
        $this->setDisplayField('nombre_titulacion');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('EducationLevels', [
            'foreignKey' => 'nivel_id',
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
            ->uuid('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->scalar('nombre_titulacion')
            ->maxLength('nombre_titulacion', 255)
            ->requirePresence('nombre_titulacion', 'create')
            ->notEmptyString('nombre_titulacion');

        $validator
            ->integer('ano_finalizacion')
            ->allowEmptyString('ano_finalizacion');

        $validator
            ->scalar('institucion')
            ->maxLength('institucion', 255)
            ->allowEmptyString('institucion');

        $validator
            ->integer('nivel_id')
            ->allowEmptyString('nivel_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('nivel_id', 'EducationLevels'), ['errorField' => 'nivel_id']);

        return $rules;
    }
}
