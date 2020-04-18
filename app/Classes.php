<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public $primaryKey = 'id_class';

    protected $table = 't_class';

    protected $fillable = [
        'class','subject','price'
    ];
}
