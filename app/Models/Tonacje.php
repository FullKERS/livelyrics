<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tonacje extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tonacjes';

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
    protected $fillable = ['nazwaTonacji', 'stopien1', 'stopien2', 'stopien3', 'stopien4', 'stopien5', 'stopien6', 'stopien7', 'transpozycjaGoraCdur', 'transpozycjaDolCdur'];

    
}
