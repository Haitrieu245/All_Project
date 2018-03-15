<?php

namespace App\Http\Controllers;

use App\TheLoai;
use Illuminate\Http\Request;

use App\LoaiTin;

class LoaiTinController extends Controller
{
    public function getDanhSach()
    {
        $loaitin = LoaiTin::all();
        return view('admin.loaitin.danhsach', ['loaitin' => $loaitin]);
    }


    public function getThem()
    {
        $theloai = TheLoai::all();
        return view('admin.loaitin.them',['theloai' => $theloai]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'Ten' => 'required|min:3|max:100',
                'TheLoai' => 'required'
            ],
            [
                'Ten.required' => 'Bạn chưa nhập tên loại tin',
                'Ten.min' => 'Tên loại tin phải có độ dài từ 3 đến 10 ký tự',
                'Ten.max' => 'Tên loại tin phải có độ dài từ 3 đến 10 ký tự',

                'TheLoai.required' => 'Bạn chưa chọn thể loại'
            ]);

        $loaitin = new LoaiTin();
        $loaitin->Ten = $request->Ten;
        $loaitin->TenKhongDau = changeTitle($request->Ten);
        $loaitin->idTheLoai = $request->TheLoai;
        $loaitin->save();

        return redirect('admin/theloai/them')->with('thongbao','Thêm Thành Công');
    }

    public function getSua($id)
    {

    }

    public function postSua(Request $request, $id)
    {

    }

    public function getXoa($id)
    {

    }

}
