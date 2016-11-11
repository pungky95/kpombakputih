<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bungalow extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bungalows';

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
    protected $fillable = ['nama', 'tarif_low', 'tarif_high', 'keterangan','jumlah_kamar'];

    public function galeri()
    {
        return $this->belongsToMany('App\Galeri');
    }
    public function fasilitas()
    {
        return $this->belongsToMany('App\Fasilita');
    }
    public function pesan()
    {
        return $this->belongsToMany('App\Pesan');
    }
}
