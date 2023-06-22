<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coursegrade
 *
 * @property $id_CourseGrade
 * @property $CourseGradeCode
 * @property $Grades
 * @property $id_Student
 * @property $id_Course
 * @property $created_at
 * @property $updated_at
 *
 * @property Career $career
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coursegrade extends Model
{
    
    static $rules = [
		'CourseGradeCode' => 'required',
		'Grades' => 'required',
		'id_Student' => 'required',
		'id_Course' => 'required',
    ];
    static $messages = [
		'CourseGradeCode.required' => 'el codigo es requerido',
		'Grade.required' => 'el nombre es requerido',
		'id_Student.required' => 'el sector es requerido',
		'id_Course.required' => 'el sector es requerido',
    ];

    Protected $primaryKey = 'id_CourseGrade';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_CourseGrade','CourseGradeCode','Grades','id_Student','id_Course'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function course()
    {
        return $this->hasOne('App\Models\Course', 'id_Course', 'id_Course');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id_Student', 'id_Student');
    }
    

}
