<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\PositionsTable&\Cake\ORM\Association\BelongsTo $Positions
 * @property \App\Model\Table\ProfessionsTable&\Cake\ORM\Association\BelongsTo $Professions
 * @property \App\Model\Table\NationalitiesTable&\Cake\ORM\Association\BelongsTo $Nationalities
 * @property \App\Model\Table\DepartmentsTable&\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\ContractsTable&\Cake\ORM\Association\BelongsTo $Contracts
 * @property \App\Model\Table\WorkplacesTable&\Cake\ORM\Association\BelongsTo $Workplaces
 * @property \App\Model\Table\AspirationsTable&\Cake\ORM\Association\HasMany $Aspirations
 * @property \App\Model\Table\EducationsTable&\Cake\ORM\Association\HasMany $Educations
 * @property \App\Model\Table\ExperiencesTable&\Cake\ORM\Association\HasMany $Experiences
 * @property \App\Model\Table\LanguagesTable&\Cake\ORM\Association\HasMany $Languages
 * @property \App\Model\Table\SkillsTable&\Cake\ORM\Association\HasMany $Skills
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('dni');
        $this->setPrimaryKey('id');

        $this->belongsTo('Positions', [
            'foreignKey' => 'position_id',
        ]);
        $this->belongsTo('Professions', [
            'foreignKey' => 'profession_id',
        ]);
        $this->belongsTo('Nationalities', [
            'foreignKey' => 'nationality_id',
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'categoria_id',
        ]);
        $this->belongsTo('Contracts', [
            'foreignKey' => 'contrato_id',
        ]);
        $this->belongsTo('Workplaces', [
            'foreignKey' => 'workplace_id',
        ]);
        $this->hasMany('Aspirations', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Educations', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Experiences', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Languages', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Skills', [
            'foreignKey' => 'user_id',
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
            ->scalar('role')
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->scalar('dni')
            ->maxLength('dni', 9)
            ->requirePresence('dni', 'create')
            ->notEmptyString('dni')
            ->add('dni', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 255)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 255)
            ->requirePresence('apellidos', 'create')
            ->notEmptyString('apellidos');

        $validator
            ->date('fecha_nacimiento')
            ->requirePresence('fecha_nacimiento', 'create')
            ->notEmptyDate('fecha_nacimiento');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->notEmptyString('password');

        $validator
            ->integer('position_id')
            ->allowEmptyString('position_id');

        $validator
            ->scalar('puesto_otro')
            ->maxLength('puesto_otro', 255)
            ->allowEmptyString('puesto_otro');

        $validator
            ->integer('profession_id')
            ->allowEmptyString('profession_id');

        $validator
            ->scalar('profesion_id_otro')
            ->maxLength('profesion_id_otro', 255)
            ->allowEmptyString('profesion_id_otro');

        $validator
            ->integer('nationality_id')
            ->allowEmptyString('nationality_id');

        $validator
            ->scalar('foto')
            ->maxLength('foto', 255)
            ->allowEmptyString('foto');

        $validator
            ->boolean('discapacidad')
            ->allowEmptyString('discapacidad');

        $validator
            ->integer('department_id')
            ->allowEmptyString('department_id');

        $validator
            ->integer('categoria_id')
            ->allowEmptyString('categoria_id');

        $validator
            ->integer('contrato_id')
            ->allowEmptyString('contrato_id');

        $validator
            ->integer('workplace_id')
            ->allowEmptyString('workplace_id');

        $validator
            ->integer('experiencia_gesplan')
            ->allowEmptyString('experiencia_gesplan');

        $validator
            ->integer('experiencia_total')
            ->allowEmptyString('experiencia_total');

        $validator
            ->boolean('disponibilidad_traslado')
            ->notEmptyString('disponibilidad_traslado');

        $validator
            ->scalar('observ_disp_traslado')
            ->maxLength('observ_disp_traslado', 255)
            ->allowEmptyString('observ_disp_traslado');

        $validator
            ->boolean('formulario_aceptado')
            ->notEmptyString('formulario_aceptado');

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->isUnique(['dni']), ['errorField' => 'dni']);
        $rules->add($rules->existsIn('position_id', 'Positions'), ['errorField' => 'position_id']);
        $rules->add($rules->existsIn('profession_id', 'Professions'), ['errorField' => 'profession_id']);
        $rules->add($rules->existsIn('nationality_id', 'Nationalities'), ['errorField' => 'nationality_id']);
        $rules->add($rules->existsIn('department_id', 'Departments'), ['errorField' => 'department_id']);
        $rules->add($rules->existsIn('categoria_id', 'Categories'), ['errorField' => 'categoria_id']);
        $rules->add($rules->existsIn('contrato_id', 'Contracts'), ['errorField' => 'contrato_id']);
        $rules->add($rules->existsIn('workplace_id', 'Workplaces'), ['errorField' => 'workplace_id']);

        return $rules;
    }
}
