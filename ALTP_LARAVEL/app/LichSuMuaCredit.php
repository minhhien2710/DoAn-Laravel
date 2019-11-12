<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichSuMuaCredit extends Model
{
    protected $table = "lich_su_mua_credit";
    
    public function NguoiChoi() {
        return $this->belongsTo('App\NguoiChoi');
    }
    public function GoiCredit() {
        return $this->belongsTo('App\GoiCredit');
    }
}
