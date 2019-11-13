<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class NguoiChoi extends Authenticatable implements JWTSubject
{
	use SoftDeletes;
    protected $table = 'nguoi_choi';
    public function getAuthPassword()
    {
        return $this->mat_khau;
    }
    public function luotChoi()
    {
        return $this->hasMany('App\LuotChoi','nguoi_choi_id');
    }

    public function lichSuMuaCredit()
    {
        return $this->hasMany('App\LichSuMuaCredit','nguoi_choi_id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
