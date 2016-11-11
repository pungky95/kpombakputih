<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'komentars';

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
    protected $fillable = ['nama', 'email'];

    public function blog(){
        return $this->belongsTo('App\Blog');
    }
}
