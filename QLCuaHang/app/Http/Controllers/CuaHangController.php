<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CuaHang;

class CuaHangController extends Controller
{
    public function getDanhSach(){
        $cuahang = CuaHang::all();
        return view('admin.cuahang.danhsach', ['cuahang' => $cuahang]);
    }

    public function getThem()
    {
        return view('admin.cuahang.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'Ten' => 'required|min:3|max:100',
                'DiaChi' => 'required|min:3|max:100',
                'SoDienThoai' => 'required'
            ],
            [
                'Ten.required' => 'Bạn chưa nhập tên cửa hàng',
                'Ten.min' => 'Tên cửa hàng phải có độ dài từ 3 đến 10 ký tự',
                'Ten.max' => 'Tên cửa hàng phải có độ dài từ 3 đến 10 ký tự',
                
                'DiaChi.required' => 'Bạn chưa nhập địa chỉ',
                'DiaChi.min' => 'Địa chỉ phải có độ dài từ 3 đến 10 ký tự',
                'DiaChi.max' => 'Địa chỉ hàng phải có độ dài từ 3 đến 10 ký tự',

                'SoDienThoai.required' => 'Bạn chưa nhập số điện thoại',
            ]);

        $cuahang = new CuaHang;
        $cuahang->Ten = $request->Ten;
        $cuahang->DiaChi = $request->DiaChi;
        $cuahang->SoDienThoai = $request->SoDienThoai;
        $cuahang->save();

        return redirect('admin/cuahang/them')->with('thongbao','Thêm Thành Công');

    }
    public function getSua($id)
    {
        $cuahang = CuaHang::find($id);
        return view('admin.cuahang.sua', ['cuahang' => $cuahang]);
    }

    public function postSua(Request $request, $id)
    {
        $cuahang = CuaHang::find($id);
        $this->validate($request,
            [
                'Ten' => 'required|min:3|max:100',
                'DiaChi' => 'required|min:3|max:100',
                'SoDienThoai' => 'required'
            ],
            [
                'Ten.required' => 'Bạn chưa nhập tên cửa hàng',
                'Ten.min' => 'Tên cửa hàng phải có độ dài từ 3 đến 10 ký tự',
                'Ten.max' => 'Tên cửa hàng phải có độ dài từ 3 đến 10 ký tự',

                'DiaChi.required' => 'Bạn chưa nhập địa chỉ',
                'DiaChi.min' => 'Địa chỉ phải có độ dài từ 3 đến 10 ký tự',
                'DiaChi.max' => 'Địa chỉ hàng phải có độ dài từ 3 đến 10 ký tự',

                'SoDienThoai.required' => 'Bạn chưa nhập số điện thoại',
            ]);
        $cuahang->Ten = $request->Ten;
        $cuahang->DiaChi = $request->DiaChi;
        $cuahang->SoDienThoai = $request->SoDienThoai;
        $cuahang->save();

        return redirect('admin/cuahang/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }

    public function getXoa($id)
    {
        $cuahang = CuaHang::find($id);
        $cuahang->delete();
        return redirect('admin/cuahang/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
