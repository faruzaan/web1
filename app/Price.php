<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public $primaryKey = 'id';

    protected $table = 't_price';

    protected $fillable = [
        'id_class','price'
    ];
    public function class()
    {
    	return $this->hasOne('\App\Classes','id_class','id_class');
    }
}
