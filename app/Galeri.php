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
    protected $fillable = ['kegiatan_id', 'blog_id', 'foto', 'kategori','faisilitas_id'];

    public function blog(){
        return $this->belongsTo('App\Blog');
    }
    public function kegiatan(){
        return $this->belongsTo('App\Kegiatan');
    }
    public function fasilita(){
        return $this->belongsTo('App\Fasilita');
    }
    public function bungalow()
    {
        return $this->belongsToMany('App\Bungalow');
    }
    
}
