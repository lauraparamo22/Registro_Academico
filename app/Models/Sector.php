<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sector
 *
 * @property $id_Sector
 * @property $SectorCode
 * @property $Name
 * @property $Concept
 * @property $id_Center
 * @property $created_at
 * @property $updated_at
 *
 * @property Career[] $careers
 * @property Center $center
 * @property Course[] $courses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sector extends Model
{
    
    static $rules = [
		'SectorCode' => 'required',
		'Name' => 'required',
		'id_Center' => 'required',
    ];

    Protected $primaryKey = 'id_Sector';
    protected $perPage = 20;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Sector','SectorCode','Name','Concept','id_Center'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function careers()
    {
        return $this->hasMany('App\Models\Career', 'id_Sector', 'id_Sector');
    }
    
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
    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'id_Sector', 'id_Sector');
    }
    

}
