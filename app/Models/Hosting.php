<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hosting
 *
 * @property $id_Hosting
 * @property $HostingCode
 * @property $Date
 * @property $EntryTime
 * @property $DepartureTime
 * @property $Conduct
 * @property $id_Student
 * @property $id_Center
 * @property $created_at
 * @property $updated_at
 *
 * @property Center $center
 * @property Feeding[] $feedings
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hosting extends Model
{
    
    static $rules = [
		'HostingCode' => 'required',
		'Date' => 'required',
		'EntryTime' => 'required',
		'DepartureTime' => 'required',
		'Conduct' => 'required',
		'id_Student' => 'required',
		'id_Center' => 'required',
    ];

    protected $primaryKey = 'id_Hosting';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Hosting','HostingCode','Date','EntryTime','DepartureTime','Conduct','id_Student','id_Center'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function center()
    {
        return $this->hasOne('App\Models\Center', 'id_Center', 'id_Center');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function feedings()
    {
        return $this->hasMany('App\Models\Feeding', 'id_Hosting', 'id_Hosting');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id_Student', 'id_Student');
    }
    

}
