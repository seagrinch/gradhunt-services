<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schools Model
 *
 * @property \Cake\ORM\Association\HasMany $Favorites
 * @property \Cake\ORM\Association\HasMany $Offerings
 *
 * @method \App\Model\Entity\School get($primaryKey, $options = [])
 * @method \App\Model\Entity\School newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\School[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\School|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\School patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\School[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\School findOrCreate($search, callable $callback = null)
 */
class SchoolsTable extends Table
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

        $this->table('schools');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Offerings', [
            'foreignKey' => 'school_id',
            'conditions'=>['char_length(code)' => 7]
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
            ->allowEmpty('INSTNM');

        $validator
            ->allowEmpty('CITY');

        $validator
            ->allowEmpty('STABBR');

        $validator
            ->allowEmpty('ZIP');

        $validator
            ->allowEmpty('OBEREG');

        $validator
            ->allowEmpty('WEBADDR');

        $validator
            ->allowEmpty('HLOFFER');

        $validator
            ->allowEmpty('LOCALE');

        $validator
            ->allowEmpty('INSTCAT');

        $validator
            ->allowEmpty('INSTSIZE');

        $validator
            ->allowEmpty('APPLFEEG');

        $validator
            ->allowEmpty('TUITION6');

        $validator
            ->allowEmpty('TUITION7');

        $validator
            ->allowEmpty('APPLCN');

        $validator
            ->allowEmpty('ADMSSN');

        $validator
            ->allowEmpty('ENRLT');

        $validator
            ->allowEmpty('SATMT25');

        $validator
            ->allowEmpty('SATMT75');

        $validator
            ->allowEmpty('SATWR25');

        $validator
            ->allowEmpty('SATWR75');

        return $validator;
    }
}
