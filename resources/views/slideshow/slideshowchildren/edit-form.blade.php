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
			<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Thêm sản phẩm</span>
		</div>
	</div>
	<div class="portlet-body form" style="height: auto;">
		<form action="{{route('slideshowimg.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="file" name="image" value="" class="form-control">
						<label for="form_control_1">Ảnh slideshow</label>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Tên sự kiện</label>
						<select name="parent_id" class="form-control">
							@foreach ($slide_chil as $sl)
							<option value="{{$sl->id}}">{{$sl->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Trạng thái ảnh slide</label>
						<select name="status" class="form-control">
							<option value="1">Hiển thị</option>
							<option value="0">Ẩn</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn btn-primary">Gửi thông tin</button>
				<button type="button" class="btn btn-danger"><a href="{{route('homeslide')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>
		</div>
	</div>
</div>
@endsection();