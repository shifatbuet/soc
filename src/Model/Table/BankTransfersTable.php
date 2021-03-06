<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BankTransfers Model
 *
 * @property \App\Model\Table\BkashDepositsTable|\Cake\ORM\Association\BelongsTo $BkashDeposits
 * @property \App\Model\Table\BankAccountsTable|\Cake\ORM\Association\BelongsTo $BankAccounts
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\BankTransfer get($primaryKey, $options = [])
 * @method \App\Model\Entity\BankTransfer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BankTransfer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BankTransfer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BankTransfer|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BankTransfer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BankTransfer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BankTransfer findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BankTransfersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('bank_transfers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('BkashDeposits', [
            'foreignKey' => 'bkash_deposit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BankAccounts', [
            'foreignKey' => 'bank_account_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['bkash_deposit_id'], 'BkashDeposits'));
        $rules->add($rules->existsIn(['bank_account_id'], 'BankAccounts'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
