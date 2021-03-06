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
                  <i class="fa fa-picture"></i>Danh sách liên hệ
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
                       Tên khách hàng
                    </th>
                    <th>
                       Số điện thoại
                    </th>
                    <th>
                       Email
                    </th>
                    <th>
                       Nội dung góp ý
                    </th>
                    <th>
                       Ngày phản hồi
                    </th>
                    <th>
                      Trạng thái
                    </th>
                    <th>
                    </th>
                  </tr>
                </thead>
                @foreach($lienhe as $lh)
                <tbody>
                <tr>
                    <td>
                       {{$lh->id}}
                    </td>
                    <td>
                       {{$lh->name}}
                    </td>
                    <td>
                       {{$lh->phone_number}}
                    </td>
                    <td>
                       {{$lh->email}}
                    </td>
                    <td style="
                        dilhlay:block;
                        padding:5px;
                        margin-top:5px;
                        width:250px;
                        height:200px;
                        overflow:scroll;
                        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                        border-radius: 10px;
                        background-color: #F5F5F5;
                        border-radius: 10px;
                        ">
                        {{$lh->content}}
                      
                    </td>
                    <td>
                       {{$lh->date}}
                    </td>
                    <td>
                       @if($lh->status == 0)
                       <p class="label label-sm label-warning">Ẩn bình luận</p>
                      @elseif($lh->status == 1)
                       <p class="label label-sm label-success">Hiển thị bình luận</p>
                      @endif
                    </td>
                    <td>
                      <a href="javascript:;" linkurl="{{route('contact.remove', ['id' => $lh->id])}}" class="btn default btn-xs red xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$lienhe->links()}}</td>
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
