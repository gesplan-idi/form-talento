<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Workplaces Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Workplace newEmptyEntity()
 * @method \App\Model\Entity\Workplace newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Workplace[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Workplace get($primaryKey, $options = [])
 * @method \App\Model\Entity\Workplace findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Workplace patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Workplace[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Workplace|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Workplace saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Workplace[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Workplace[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Workplace[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Workplace[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class WorkplacesTable extends Table
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

        $this->setTable('workplaces');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'workplace_id',
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
