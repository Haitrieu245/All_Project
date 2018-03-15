<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuaHang extends Model
{
    protected $table = "CuaHang";

    public function sanpham()
    {
        return $this->hasMany('App\SanPham', 'idSanPham', 'id');
    }
}
