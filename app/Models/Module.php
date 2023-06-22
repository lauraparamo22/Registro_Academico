<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Module
 *
 * @property $id_Module
 * @property $ModuleCode
 * @property $Name
 * @property $Topic
 * @property $id_Career
 * @property $created_at
 * @property $updated_at
 *
 * @property Careergrade[] $careergrades
 * @property Career $career
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Module extends Model
{
    
    static $rules = [
		'ModuleCode' => 'required',
		'Name' => 'required',
		'Topic' => 'required',
		'id_Career' => 'required',
    ];
    static $messages = [
		'ModuleCode.required' => 'El código es requerido',
		'Name.required' => 'El nombre es requerido',
		'Topic.required' => 'La unidad es requerida',
		'id_Career.required' => 'La carrera es requerida',
    ];

    protected $primaryKey = 'id_Module';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Module','ModuleCode','Name','Topic','id_Career'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careergrades()
    {
        return $this->hasMany('App\Models\Careergrade', 'id_Module', 'id_Module');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function career()
    {
        return $this->hasOne('App\Models\Career', 'id_Career', 'id_Career');
    }
    

}
