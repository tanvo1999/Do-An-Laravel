<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LishSuMuaCredit extends Model
{
	use SoftDeletes;
    protected $table = 'lish_su_mua_credit';
}
