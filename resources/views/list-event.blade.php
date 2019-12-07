@extends('admin_material_design.admin')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <!-- /.modal -->
      <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->     <!-- BEGIN PAGE HEADER-->
      <h3 class="page-title">
      Coolorganic <small>thực phẩm sạch</small>
      </h3>
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="{{route('homeadmin')}}">Trang chủ</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="{{route('adminsuper')}}">Sản phẩm</a>
          </li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <!-- BEGIN DASHBOARD STATS -->

      <div class="row">
    <div class="col-md-12">
          <div class="col-md-12">
            <!-- BEGIN CONDENSED TABLE PORTLET-->
            <div class="portlet box green">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-picture"></i>Danh sách sự kiện giảm giá
                </div>
              </div>
              <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên sự kiện
                    </th>
                    <th>
                       Ảnh sự kiện
                    </th>
                    <th>
                       Mã giảm giá
                    </th>
                    <th>
                       Ngày bắt đầu
                    </th>
                    <th>
                       Ngày kết thúc
                    </th>
                    <th>
                      Số phần trăm giảm giá
                    </th>
                    <th>
                      Trạng thái
                    </th>
                    <th>
                      <a href="{{route('event.add')}}" class="btn default btn-xs blue">
                      <i class="fa fa-plus"></i> Thêm</a>
                    </th>
                  </tr>
                </thead>
                @foreach($sukien as $sk)
                <tbody>
                <tr>
                    <td>
                       {{$sk->id}}
                    </td>
                    <td>
                       {{$sk->name}}
                    </td>
                    <td>
                      <img src="{{$sk->image}}" width="200">
                    </td>
                    <td>
                       {{$sk->code_sale}}
                    </td>
                    <td>
                       {{$sk->time_sale}}
                    </td>
                    <td>
                       {{$sk->end_time_sale}}
                    </td>
                    <td>
                       {{$sk->percent}}
                    </td>
                    <td>
                       {{$sk->status}}
                    </td>
                     <td>
                      <a href="{{route('event.edit', ['id' => $sk->id])}}" class="btn default btn-xs green">
                      <i class="fa fa-edit"></i> Sửa </a>
                      <a href="javascript:;" linkurl="{{route('event.remove', ['id' => $sk->id])}}" class="btn default btn-xs red xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$sukien->links()}}</td>
                </tr>
                </table>
            </div>
            </div>
            <!-- END CONDENSED TABLE PORTLET-->
          </div>
    </div>
  </div>
    </div>
</div>
@endsection();