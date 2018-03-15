@extends('admin.layout.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cửa Hàng
                        <small>{{$cuahang->Ten}}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <form action="admin/cuahang/sua/{{$cuahang->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Tên Cửa Hàng</label>
                            <input class="form-control" name="Ten" placeholder="Điền tên thể loại" value="{{$cuahang->Ten}}"/>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" name="DiaChi" placeholder="Điền tên thể loại" value="{{$cuahang->DiaChi}}"/>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" name="SoDienThoai" placeholder="Điền tên thể loại" value="{{$cuahang->SoDienThoai}}"/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection