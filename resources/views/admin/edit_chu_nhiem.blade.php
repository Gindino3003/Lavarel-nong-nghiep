@extends('admin_layout')
@section('title', 'Chỉnh sửa chủ nhiệm')
@section('admin_content')
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Chỉnh sửa : {{$chu_nhiem->name}}</h3>
        </div>

        <div class="panel-body">
            <form class="form-horizontal form-bordered striped-rows" action="{{URL::to('edit_chu_nhiem')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$chu_nhiem->id}}">
                 <div class="form-group">
                     <label class="col-sm-3 control-label">Tên chủ nhiệm</label>
                     <div class="col-sm-9">
                       <input type="text" class="form-control" name="ten" value="{{$chu_nhiem->name}}">
                     </div>
                 </div>

                 <div class="form-group">
                     <label class="col-sm-3 control-label">Tên đăng nhập</label>
                     <div class="col-sm-9">
                      <input type="text" class="form-control" name="user" value="{{$chu_nhiem->username}}">
                     </div>
                 </div>
                 <div class="form-group last">
                     <label class="col-sm-3 control-label">Mật khẩu</label>
                     <div class="col-sm-9">
                      <input type="password" class="form-control" name="pass" >
                     </div>
                 </div>
                 <div class="form-group">
                     <label class="col-sm-3 control-label">Email</label>
                     <div class="col-sm-9">
                       <input type="email" class="form-control" name="email" value="{{$chu_nhiem->email}}">
                     </div>
                 </div>
                 <div class="form-group last">
                     <label class="col-sm-3 control-label">Số điện thoại</label>
                     <div class="col-sm-9">
                       <input type="text" class="form-control" name="phone" value="{{$chu_nhiem->sdt}}">
                     </div>
                 </div>

                 <div class="form-footer">
                 <div class="modal-footer">
                 <button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-check-square-o"></i> Sửa chủ nhiệm</button>
                   </div>

                        </div>

               </form></div>
    </div>
</div>


@endsection
