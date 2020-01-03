<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiChoi extends Authenticatable implements JWTSubject
{
    use SoftDeletes;
    protected $table = 'nguoi_choi';
    protected $hidden = 'mat_khau';

    public function dsLichSu()
    {
        return $this->hasMany('App\LichSuMuaCredit', 'nguoi_choi_id','id');
    }
    
    public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }
}
