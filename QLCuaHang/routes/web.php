<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function (){
   Route::group(['prefix' => 'cuahang'],function (){

       Route::get('danhsach','CuaHangController@getDanhSach');

       Route::get('sua/{id}','CuaHangController@getSua');
       Route::post('sua/{id}','CuaHangController@postSua');

       Route::get('them','CuaHangController@getThem');
       Route::post('them','CuaHangController@postThem');

       Route::get('xoa/{id}','CuaHangController@getXoa');
   }) ;

    Route::group(['prefix' => 'sanpham'],function (){

        Route::get('danhsach/{id}','SanPhamController@getDanhSach');

        Route::get('sua/{id}','SanPhamController@getSua');
        Route::post('sua/{id}','SanPhamController@postSua');

        Route::get('them','SanPhamController@getThem');
        Route::post('them','SanPhamController@postThem');

        Route::get('xoa/{id}','SanPhamController@getXoa');
    }) ;


});