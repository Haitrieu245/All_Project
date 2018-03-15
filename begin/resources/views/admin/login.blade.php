@extends('admin.layout.application')

@section('body')
    <div>
        <form action="{{route('sigin')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="row">

                    <label class=" col-xs-3" for="idName">Name</label>
                    <input type="text" placeholder="ten dang nhap" class=" col-xs-5" name="ipName" id="idName">

                </div>
                <div class="row">
                    <label class=" col-xs-3" for="passid">Password</label>
                    <input type="text" placeholder="password" class=" col-xs-5" name="ipPass" id="passid">

                </div>

                <button type="submit" class=" btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>


            </div>
        </form>

    </div>
@stop
