<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SanPham;

use App\CuaHang;

class SanPhamController extends Controller
{
    public function getDanhSach($id){
        $sanpham = SanPham::where('idCuaHang', $id)->get();
        return view('admin.sanpham.danhsach', ['sanpham' => $sanpham]);
    }

    public function getThem()
    {
        return view('admin.sanpham.them');
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

        $sanpham = new SanPham;
        $sanpham->Ten = $request->Ten;
        $sanpham->DiaChi = $request->DiaChi;
        $sanpham->SoDienThoai = $request->SoDienThoai;
        $sanpham->save();

        return redirect('admin/sanpham/them')->with('thongbao','Thêm Thành Công');

    }
    public function getSua($id)
    {
        $sanpham = SanPham::find($id);
        return view('admin.sanpham.sua', ['sanpham' => $sanpham]);
    }

    public function postSua(Request $request, $id)
    {
        $sanpham = SanPham::find($id);
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
        $sanpham->Ten = $request->Ten;
        $sanpham->DiaChi = $request->DiaChi;
        $sanpham->SoDienThoai = $request->SoDienThoai;
        $sanpham->save();

        return redirect('admin/sanpham/sua/'.$id)->with('thongbao','Sửa Thành Công');
    }

    public function getXoa($id)
    {
        $sanpham = SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('thongbao','Xóa Thành Công');
    }
}
