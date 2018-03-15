@extends('admin.layout.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cửa Hàng
                        <small>Danh Sách</small>
                    </h1>
                </div>
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
            @endif
            <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Địa Chỉ</th>
                        <th>Số Điện Thoại</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cuahang as $ch)
                        <tr class="odd gradeX" align="center">
                            <td>{{$ch->id}}</td>
                            <td><a href="admin/sanpham/danhsach/{{$ch->id}}">{{$ch->Ten}}</a></td>
                            <td>{{$ch->DiaChi}}</td>
                            <td>{{$ch->SoDienThoai}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/cuahang/xoa/{{$ch->id}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/cuahang/sua/{{$ch->id}}">Edit</a></td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection