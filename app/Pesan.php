<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pesans';

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
    protected $fillable = ['nama_pemesan', 'tgl_masuk', 'tgl_keluar', 'jumlah_anak', 'jumlah_dewasa', 'permintaan_khusus','no_telepon','email'];

    public function bungalow()
    {
        return $this->belongsToMany('App\Bungalow');
    }
    
}
