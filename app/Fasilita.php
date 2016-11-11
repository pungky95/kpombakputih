<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilita extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fasilitas';

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
    protected $fillable = ['nama', 'keterangan'];

    public function galeri(){
        return $this->hasMany('App\Galeri');
    }
    public function bungalow()
    {
        return $this->belongsToMany('App\Bungalow');
    }
}
