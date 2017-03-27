<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'galeris';

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
    protected $fillable = ['kategori_id','blog_id','fasilitas_id','nama','mime','path','size'];

    public function blog(){
        return $this->belongsTo('App\Blog');
    }
    public function fasilita(){
        return $this->belongsTo('App\Fasilita');
    }
    public function bungalow()
    {
        return $this->belongsToMany('App\Bungalow');
    }
    public function kategoris(){
        return $this->belongsTo('App\Kategori');
    }
    
}
