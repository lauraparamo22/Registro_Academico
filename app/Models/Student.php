<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id_Student
 * @property $StudentCode
 * @property $Names
 * @property $LastNames
 * @property $DNI
 * @property $Age
 * @property $Gender
 * @property $PhoneNumer
 * @property $EmailAddress
 * @property $Address
 * @property $City
 * @property $Municipality
 * @property $created_at
 * @property $updated_at
 *
 * @property Attendancecareer[] $attendancecareers
 * @property Attendancecourse[] $attendancecourses
 * @property Careergrade[] $careergrades
 * @property Career[] $careers
 * @property Coursegrade[] $coursegrades
 * @property Course[] $courses
 * @property Enrollmentcareer[] $enrollmentcareers
 * @property Enrollmentcourse[] $enrollmentcourses
 * @property Hosting[] $hostings
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'StudentCode' => 'required',
		'Names' => 'required',
		'LastNames' => 'required',
		'DNI' => 'required',
		'Age' => 'required',
		'Gender' => 'required',
		'PhoneNumer' => 'required',
		'EmailAddress' => 'required',
		'Address' => 'required',
		'City' => 'required',
		'Municipality' => 'required',
    ];

    protected $primaryKey = 'id_Student';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Student','StudentCode','Names','LastNames','DNI','Age','Gender','PhoneNumer','EmailAddress','Address','City','Municipality'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendancecareers()
    {
        return $this->hasMany('App\Models\Attendancecareer', 'id_Student', 'id_Student');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendancecourses()
    {
        return $this->hasMany('App\Models\Attendancecourse', 'id_Student', 'id_Student');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careergrades()
    {
        return $this->hasMany('App\Models\Careergrade', 'id_Student', 'id_Student');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careers()
    {
        return $this->hasMany('App\Models\Career', 'id_Student', 'id_Student');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coursegrades()
    {
        return $this->hasMany('App\Models\Coursegrade', 'id_Student', 'id_Student');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'id_Student', 'id_Student');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollmentcareers()
    {
        return $this->hasMany('App\Models\Enrollmentcareer', 'id_Student', 'id_Student');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollmentcourses()
    {
        return $this->hasMany('App\Models\Enrollmentcourse', 'id_Student', 'id_Student');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hostings()
    {
        return $this->hasMany('App\Models\Hosting', 'id_Student', 'id_Student');
    }
    

}
