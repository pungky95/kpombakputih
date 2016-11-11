<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kegiatans';

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
    protected $fillable = ['nama', 'konten'];

    public function galeri(){
        return $this->hasMany('App\Galeri');
    }
    
}
