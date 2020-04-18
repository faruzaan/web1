<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    public $primaryKey = 'id_vid';

    protected $table = 't_videos';

    protected $fillable = [
        'id_class','desc','video','password','payment'
    ];
    public function class()
    {
    	return $this->hasOne('\App\Classes','id_class','id_class');
    }
}
