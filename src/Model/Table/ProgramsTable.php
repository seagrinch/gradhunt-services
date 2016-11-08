<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Programs Model
 *
 * @property \Cake\ORM\Association\HasMany $Offerings
 *
 * @method \App\Model\Entity\Program get($primaryKey, $options = [])
 * @method \App\Model\Entity\Program newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Program[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Program|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Program patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Program[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Program findOrCreate($search, callable $callback = null)
 */
class ProgramsTable extends Table
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

        $this->table('programs');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->hasMany('Offerings', [
            'foreignKey' => 'program_id'
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
            ->allowEmpty('family');

        $validator
            ->allowEmpty('code');

        $validator
            ->allowEmpty('title');

        $validator
            ->allowEmpty('definition');

        return $validator;
    }
}
