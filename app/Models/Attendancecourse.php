<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attendancecourse
 *
 * @property $id_AttendanceCareer
 * @property $AttendanceCareerCode
 * @property $Date
 * @property $Condition
 * @property $id_Student
 * @property $id_Course
 * @property $created_at
 * @property $updated_at
 *
 * @property Course $course
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Attendancecourse extends Model
{
    
    static $rules = [
		'AttendanceCourseCode' => 'required',
		'Date' => 'required',
		'Condition' => 'required',
		'id_Student' => 'required',
		'id_Course' => 'required',
    ];

    Protected $primaryKey = 'id_AttendanceCourse';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_AttendanceCourse','AttendanceCourseCode','Date','Condition','id_Student','id_Course'];


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
