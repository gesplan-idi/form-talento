<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disponibilities Model
 *
 * @property \App\Model\Table\AspirationsTable&\Cake\ORM\Association\HasMany $Aspirations
 *
 * @method \App\Model\Entity\Disponibility newEmptyEntity()
 * @method \App\Model\Entity\Disponibility newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Disponibility[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disponibility get($primaryKey, $options = [])
 * @method \App\Model\Entity\Disponibility findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Disponibility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Disponibility[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disponibility|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disponibility saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disponibility[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DisponibilitiesTable extends Table
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

        $this->setTable('disponibilities');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Aspirations', [
            'foreignKey' => 'disponibility_id',
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
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        return $validator;
    }
}
