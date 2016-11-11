<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kontaks';

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
    protected $fillable = ['nama', 'email', 'pesan', 'subjek'];

    
}
