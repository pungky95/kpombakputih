<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kategoris';

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
    protected $fillable = ['nama'];

    public function blog(){
        return $this->hasMany('App\Blog','kategori_id','id');
    }
    public function galeri(){
        return $this->hasMany('App\Galeri');
    }
    
}
