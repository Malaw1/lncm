<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactif extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reactifs';

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
    protected $fillable = ['idReactifs', 'designation', 'conditionnement', 'lot', 'fabriquant'];

    
}
