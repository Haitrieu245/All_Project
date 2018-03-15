<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'SanPham';

    public function cuahang()
    {
        return $this->belongsTo('App\CuaHang','idCuaHang','id');
    }
}
