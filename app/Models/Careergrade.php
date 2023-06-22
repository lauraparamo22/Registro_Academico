<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Careergrade
 *
 * @property $id_CareerGrade
 * @property $CareerGradeCode
 * @property $Grade
 * @property $id_Student
 * @property $id_Career
 * @property $id_Module
 * @property $created_at
 * @property $updated_at
 *
 * @property Career $career
 * @property Module $module
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Careergrade extends Model
{
    
    static $rules = [
		'CareerGradeCode' => 'required',
		'Grade' => 'required',
		'id_Student' => 'required',
		'id_Career' => 'required',
		'id_Module' => 'required',
    ];
    static $messages = [
		'CareerGradeCode.required' => 'el codigo es requerido',
		'Grade.required' => 'el nombre es requerido',
		'id_Student.required' => 'el sector es requerido',
		'id_Career.required' => 'el sector es requerido',
		'id_Module.required' => 'el sector es requerido',
    ];

    Protected $primaryKey = 'id_CareerGrade';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_CareerGrade','CareerGradeCode','Grade','id_Student','id_Career','id_Module'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function career()
    {
        return $this->hasOne('App\Models\Career', 'id_Career', 'id_Career');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function module()
    {
        return $this->hasOne('App\Models\Module', 'id_Module', 'id_Module');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id_Student', 'id_Student');
    }
    

}
