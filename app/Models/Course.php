<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 *
 * @property $id_Course
 * @property $CourseCode
 * @property $Name
 * @property $Topic
 * @property $id_Sector
 * @property $id_Student
 * @property $created_at
 * @property $updated_at
 *
 * @property Attendancecourse[] $attendancecourses
 * @property Enrollmentcourse[] $enrollmentcourses
 * @property Sector $sector
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Course extends Model
{
    
    static $rules = [
		'CourseCode' => 'required',
		'Name' => 'required',
		'id_Sector' => 'required',
    ];
    static $messages = [
		'CourseCode.required' => 'El código es requerido',
		'Name.required' => 'El nombre es requerido',
		'id_Sector.required' => 'El sector es requerido',
    ];

    Protected $primaryKey = 'id_Course';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Course','CourseCode','Name','Topic','id_Sector','id_Student'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendancecourses()
    {
        return $this->hasMany('App\Models\Attendancecourse', 'id_Course', 'id_Course');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollmentcourses()
    {
        return $this->hasMany('App\Models\Enrollmentcourse', 'id_Course', 'id_Course');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sector()
    {
        return $this->hasOne('App\Models\Sector', 'id_Sector', 'id_Sector');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id_Student', 'id_Student');
    }
    

}
