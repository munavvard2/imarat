<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bills Model
 *
 * @method \App\Model\Entity\Bill newEmptyEntity()
 * @method \App\Model\Entity\Bill newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Bill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bill get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bill findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Bill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bill[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bill|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bill saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bill[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bill[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bill[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Bill[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BillsTable extends Table
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

        $this->setTable('bills');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('cust_name')
            ->maxLength('cust_name', 255)
            ->requirePresence('cust_name', 'create')
            ->notEmptyString('cust_name');

        $validator
            ->scalar('site')
            ->maxLength('site', 255)
            ->allowEmptyString('site');

        $validator
            ->scalar('mukam')
            ->maxLength('mukam', 255)
            ->allowEmptyString('mukam');

        $validator
            ->date('from_date')
            ->allowEmptyDate('from_date');

        $validator
            ->date('to_date')
            ->allowEmptyDate('to_date');

        $validator
            ->integer('days')
            ->allowEmptyString('days');

        $validator
            ->integer('p_3_2')
            ->allowEmptyString('p_3_2');

        $validator
            ->integer('p_3_1_ll')
            ->allowEmptyString('p_3_1_ll');

        $validator
            ->integer('p_3_1_l')
            ->allowEmptyString('p_3_1_l');

        $validator
            ->integer('p_3_1')
            ->allowEmptyString('p_3_1');

        $validator
            ->integer('teka')
            ->allowEmptyString('teka');

        $validator
            ->integer('aadi')
            ->allowEmptyString('aadi');

        $validator
            ->decimal('total')
            ->allowEmptyString('total');

        $validator
            ->integer('created_by')
            ->requirePresence('created_by', 'create')
            ->notEmptyString('created_by');

        return $validator;
    }
}
