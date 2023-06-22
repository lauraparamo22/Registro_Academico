<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Feeding
 *
 * @property $id_Feeding
 * @property $FeedingCode
 * @property $Date
 * @property $Shift
 * @property $id_Hosting
 * @property $created_at
 * @property $updated_at
 *
 * @property Hosting $hosting
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Feeding extends Model
{
    
    static $rules = [
		'FeedingCode' => 'required',
		'Date' => 'required',
		'Shift' => 'required',
		'id_Hosting' => 'required',
    ];

    protected $primaryKey = 'id_Feeding';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Feeding','FeedingCode','Date','Shift','id_Hosting'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hosting()
    {
        return $this->hasOne('App\Models\Hosting', 'id_Hosting', 'id_Hosting');
    }
    

}
