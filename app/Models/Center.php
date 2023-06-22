<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Center
 *
 * @property $id_Center
 * @property $CenterCode
 * @property $Name
 * @property $City
 * @property $Neighborhood
 * @property $Address
 * @property $created_at
 * @property $updated_at
 *
 * @property Hosting[] $hostings
 * @property Sector[] $sectors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Center extends Model
{
    
    static $rules = [
		'id_Center' => 'required',
		'CenterCode' => 'required',
		'Name' => 'required',
		'City' => 'required',
		'Neighborhood' => 'required',
		'Address' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Center','CenterCode','Name','City','Neighborhood','Address'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hostings()
    {
        return $this->hasMany('App\Models\Hosting', 'id_Center', 'id_Center');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectors()
    {
        return $this->hasMany('App\Models\Sector', 'id_Center', 'id_Center');
    }
    

}
