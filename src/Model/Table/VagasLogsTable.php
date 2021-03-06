<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VagasLogs Model
 *
 * @property \App\Model\Table\VagasTable&\Cake\ORM\Association\BelongsTo $Vagas
 * @property \App\Model\Table\VagasDepartamentosTable&\Cake\ORM\Association\BelongsTo $VagasDepartamentos
 * @property \App\Model\Table\VagasEmpresasTable&\Cake\ORM\Association\BelongsTo $VagasEmpresas
 *
 * @method \App\Model\Entity\VagasLog newEmptyEntity()
 * @method \App\Model\Entity\VagasLog newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\VagasLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VagasLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\VagasLog findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\VagasLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VagasLog[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\VagasLog|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VagasLog saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VagasLogsTable extends Table
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

        $this->setTable('vagas_logs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Vagas', [
            'foreignKey' => 'vaga_id',
        ]);
        $this->belongsTo('VagasDepartamentos', [
            'foreignKey' => 'vagas_departamento_id',
        ]);
        $this->belongsTo('VagasEmpresas', [
            'foreignKey' => 'vagas_empresa_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('acao')
            ->requirePresence('acao', 'create')
            ->notEmptyString('acao');

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
        $rules->add($rules->existsIn('vaga_id', 'Vagas'), ['errorField' => 'vaga_id']);
        $rules->add($rules->existsIn('vagas_departamento_id', 'VagasDepartamentos'), ['errorField' => 'vagas_departamento_id']);
        $rules->add($rules->existsIn('vagas_empresa_id', 'VagasEmpresas'), ['errorField' => 'vagas_empresa_id']);

        return $rules;
    }
}
