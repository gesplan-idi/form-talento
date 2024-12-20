<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aspirations Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\DisponibilitiesTable&\Cake\ORM\Association\BelongsTo $Disponibilities
 *
 * @method \App\Model\Entity\Aspiration newEmptyEntity()
 * @method \App\Model\Entity\Aspiration newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aspiration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aspiration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aspiration findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aspiration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aspiration[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aspiration|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aspiration saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aspiration[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aspiration[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aspiration[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aspiration[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AspirationsTable extends Table
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

        $this->setTable('aspirations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('Disponibilities', [
            'foreignKey' => 'disponibility_id',
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
            ->scalar('intereses')
            ->allowEmptyString('intereses');

        $validator
            ->boolean('posicion_interes_pregunta')
            ->allowEmptyString('posicion_interes_pregunta');

        $validator
            ->boolean('proyecto_nacional')
            ->allowEmptyString('proyecto_nacional');

        $validator
            ->boolean('proyecto_internacional')
            ->allowEmptyString('proyecto_internacional');

        $validator
            ->integer('disponibility_id')
            ->notEmptyString('disponibility_id');

        $validator
            ->boolean('disponibilidad_viajar')
            ->allowEmptyString('disponibilidad_viajar');

        $validator
            ->boolean('cambio_isla')
            ->allowEmptyString('cambio_isla');

        $validator
            ->scalar('isla_destino')
            ->maxLength('isla_destino', 50)
            ->allowEmptyString('isla_destino');

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
        $rules->add($rules->existsIn('disponibility_id', 'Disponibilities'), ['errorField' => 'disponibility_id']);

        return $rules;
    }
}
