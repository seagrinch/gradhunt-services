<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offerings Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Schools
 * @property \Cake\ORM\Association\BelongsTo $Programs
 *
 * @method \App\Model\Entity\Offering get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offering newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Offering[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offering|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offering patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offering[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offering findOrCreate($search, callable $callback = null)
 */
class OfferingsTable extends Table
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

        $this->table('offerings');
        $this->displayField('id');
        $this->primaryKey(['id', 'school_id', 'program_id']);

        $this->belongsTo('Schools', [
            'foreignKey' => 'school_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Programs', [
            'foreignKey' => 'program_id',
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

        $validator
            ->allowEmpty('PMASTR');

        $validator
            ->allowEmpty('PDOCRS');

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
        $rules->add($rules->existsIn(['school_id'], 'Schools'));
        $rules->add($rules->existsIn(['program_id'], 'Programs'));

        return $rules;
    }
}
