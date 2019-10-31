<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class QuanTriVien extends Authenticatable
{
	use SoftDeletes;
    protected $table = 'quan_tri_vien';
}
