<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LuotChoi extends Model
{
	use SoftDeletes;
    protected $table = 'luot_choi';

    public function chiTietLuotChoi()
    {
        return $this->hasMany('App\ChiTietLuotChoi','luot_choi_id');
    }

    public function nguoiChoi()
    {
        return $this->belongsTo('App\NguoiChoi','nguoi_choi_id');
    }
}
