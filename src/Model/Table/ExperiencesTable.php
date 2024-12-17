<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Experiences Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Experience newEmptyEntity()
 * @method \App\Model\Entity\Experience newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Experience[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Experience get($primaryKey, $options = [])
 * @method \App\Model\Entity\Experience findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Experience patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Experience[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Experience|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experience saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Experience[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Experience[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Experience[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Experience[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ExperiencesTable extends Table
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

        $this->setTable('experiences');
        $this->setDisplayField('tipo');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('ExperienceTypes', [
            'foreignKey' => 'tipo_id',
            'joinType' => 'INNER',
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
            ->scalar('nombre_empresa')
            ->maxLength('nombre_empresa', 255)
            ->allowEmptyString('nombre_empresa');

        $validator
            ->scalar('nombre_proyecto')
            ->maxLength('nombre_proyecto', 255)
            ->allowEmptyString('nombre_proyecto');

        $validator
            ->scalar('cargo')
            ->maxLength('cargo', 255)
            ->allowEmptyString('cargo');

        $validator
            ->date('periodo_inicio')
            ->allowEmptyDate('periodo_inicio');

        $validator
            ->date('periodo_fin')
            ->allowEmptyDate('periodo_fin');

        $validator
            ->scalar('responsabilidades')
            ->allowEmptyString('responsabilidades');

        $validator
            ->scalar('logros')
            ->allowEmptyString('logros');

        $validator
            ->scalar('trabajos')
            ->allowEmptyString('trabajos');

        $validator
            ->integer('tipo_id')
            ->notEmptyString('tipo_id');

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
        $rules->add($rules->existsIn('tipo_id', 'ExperienceTypes'), ['errorField' => 'tipo_id']);

        return $rules;
    }
}
