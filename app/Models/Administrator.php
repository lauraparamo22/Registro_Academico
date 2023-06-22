<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrator
 *
 * @property $id_Administrator
 * @property $AdministratorCode
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
 * @property $id_User
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Administrator extends Model
{
    
    static $rules = [
		'AdministratorCode' => 'required',
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
		'id_User' => 'required',
    ];

    Protected $primaryKey = 'id_Administrator';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Administrator','AdministratorCode','Names','LastNames','DNI','Age','Gender','PhoneNumer','EmailAddress','Address','City','Municipality','id_User'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_User');
    }
    

}
