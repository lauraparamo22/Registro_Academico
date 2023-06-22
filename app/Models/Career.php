<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Career
 *
 * @property $id_Career
 * @property $CareerCode
 * @property $Name
 * @property $Concept
 * @property $id_Sector
 * @property $id_Student
 * @property $created_at
 * @property $updated_at
 *
 * @property Attendancecareer[] $attendancecareers
 * @property Careergrade[] $careergrades
 * @property Coursegrade[] $coursegrades
 * @property Enrollmentcareer[] $enrollmentcareers
 * @property Module[] $modules
 * @property Sector $sector
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Career extends Model
{
    
    static $rules = [
		'CareerCode' => 'required',
		'Name' => 'required',
		'id_Sector' => 'required',
    ];
    static $messages = [
		'CareerCode.required' => 'el codigo es requerido',
		'Name.required' => 'el nombre es requerido',
		'id_Sector.required' => 'el sector es requerido',

    ];
    Protected $primaryKey = 'id_Career';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Career','CareerCode','Name','Concept','id_Sector','id_Student'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendancecareers()
    {
        return $this->hasMany('App\Models\Attendancecareer', 'id_Career', 'id_Career');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careergrades()
    {
        return $this->hasMany('App\Models\Careergrade', 'id_Career', 'id_Career');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coursegrades()
    {
        return $this->hasMany('App\Models\Coursegrade', 'id_Career', 'id_Career');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollmentcareers()
    {
        return $this->hasMany('App\Models\Enrollmentcareer', 'id_Career', 'id_Career');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modules()
    {
        return $this->hasMany('App\Models\Module', 'id_Career', 'id_Career');
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
