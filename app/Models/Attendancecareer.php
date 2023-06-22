<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attendancecareer
 *
 * @property $id_AttendanceCareer
 * @property $AttendanceCareerCode
 * @property $Date
 * @property $Condition
 * @property $id_Student
 * @property $id_Career
 * @property $created_at
 * @property $updated_at
 *
 * @property Career $career
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Attendancecareer extends Model
{
    
    static $rules = [
		'AttendanceCareerCode' => 'required',
		'Date' => 'required',
		'Condition' => 'required',
		'id_Student' => 'required',
		'id_Career' => 'required',
    ];
    static $messages = [
		'id_AttendanceCareer.required' => 'El código es requerido',
		'Date.required' => 'La fecha es requerida',
		'Condition.required' => 'La condición es requerida',
		'id_Student.required' => 'El id del estudiante es requerido',
		'id_Career.required' => 'El id de la carrera es requerido',
    ];

    Protected $primaryKey = 'id_AttendanceCareer';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_AttendanceCareer','AttendanceCareerCode','Date','Condition','id_Student','id_Career'];


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
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id_Student', 'id_Student');
    }
    

}
