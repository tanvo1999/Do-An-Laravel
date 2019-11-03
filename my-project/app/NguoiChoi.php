<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoi extends Model
{
	use SoftDeletes;
    protected $table = 'nguoi_choi';

    public function luotChoi()
    {
        return $this->hasMany('App\LuotChoi','nguoi_choi_id');
    }

    public function lichSuMuaCredit()
    {
        return $this->hasMany('App\LichSuMuaCredit','nguoi_choi_id');
    }
}
