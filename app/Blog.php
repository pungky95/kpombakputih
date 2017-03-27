<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';

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
    protected $fillable = ['nama', 'konten','kategori_id'];

    public function komentar(){
        return $this->hasMany('App\Komentar');
    }
    public function galeri(){
        return $this->hasMany('App\Galeri','blog_id');
    }
    public function kategori(){
        return $this->belongsTo('App\Kategori','kategori_id');
    }
    
}
