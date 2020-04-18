<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $primaryKey = 'id';

    protected $table = 't_payment';

    protected $fillable = [
        'id_user','math','payment_math_date','science','payment_science_date'
    ];
    public function user()
    {
    	return $this->hasOne('\App\User1','id_user','id_user');
    }
}
