<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enrollmentcareer
 *
 * @property $id_EnrollmentCareer
 * @property $EnrollmentCareerCode
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
class Enrollmentcareer extends Model
{
    
    static $rules = [
		'EnrollmentCareerCode' => 'required',
		'id_Student' => 'required',
		'id_Career' => 'required',
    ];

    protected $primaryKey = 'id_EnrollmentCareer';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_EnrollmentCareer','EnrollmentCareerCode','id_Student','id_Career'];


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
