<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SanPham', function (Blueprint $table){
            $table->increments('id');
            $table->string('MaSP');
            $table->string('Ten');
            $table->integer('Gia');
            $table->longText('AnhSP');
            $table->integer('idCuaHang')->unsigned();
            $table->foreign('idCuaHang')->references('id')->on('CuaHang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('SanPham');
    }
}
