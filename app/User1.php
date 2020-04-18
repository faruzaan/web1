<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    public $primaryKey = 'id_user';

    protected $table = 't_user';

    protected $fillable = [
        'first_name','last_name','email','password'
    ];
    public function class()
    {
    	return $this->hasOne('\App\Payment','id_class','id_class');
    }
}
