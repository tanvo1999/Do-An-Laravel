<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuanTriVien extends Authenticatable
{
	use SoftDeletes;
    protected $table = 'quan_tri_vien';

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }
}
