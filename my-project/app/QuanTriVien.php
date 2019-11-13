<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;

class QuanTriVien extends Authenticatable implements JWTSubject
{
	use SoftDeletes;
    protected $table = 'quan_tri_vien';

    public function getAuthPassword()
    {
        return $this->mat_khau;
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
