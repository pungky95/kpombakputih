<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bungalow_Fasilita extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bungalow_fasilitas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['bungalow_id', 'fasilitas_id'];

    public function bungalows(){
        return $this->belongsToMany('Bungalow');
    }
    public function fasilitas(){
        return $this->belongsToMany('Fasilita');
    }
}
