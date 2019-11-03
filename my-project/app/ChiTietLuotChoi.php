<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChiTietLuotChoi extends Model
{
	use SoftDeletes;
    protected $table = 'chi_tiet_luot_choi';
    
    public function cauHoi()
    {
        return $this->belongsTo('App\CauHoi','cau_hoi_id');
    }

    public function luotChoi()
    {
        return $this->belongsTo('App\LuotChoi','cau_hoi_id');
    }
}
