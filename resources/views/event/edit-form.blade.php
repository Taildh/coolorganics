@extends('layout2.main')
@section('content')
<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Thêm sự kiện</span>
		</div>
	</div>
	<div class="portlet-body form" style="height: auto;">
		<form action="{{route('event.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon">
						<input type="text" name="name" value="{{old('name', $model->name)}}" class="form-control">
						<label for="form_control_1">Tên sự kiện</label>
						<span class="help-block">Mời bạn nhập tên sự kiện</span>
						<i class="fa fa-bell-o"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon">
						<input type="file" name="image" value="{{old('image', $model->image)}}" class="form-control">
						
						<span class="help-block">Mời bạn nhập ảnh sự kiện</span>
						<i class="fa fa-bell-o"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="text" name="code_sale" value="{{old('code_sale', $model->code_sale)}}" class="form-control">
						<label for="form_control_1">Mã giảm giá</label>
						<span class="help-block">Mời bạn nhập mã giảm giá</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="text" name="time_sale" value="{{old('time_sale', $model->time_sale)}}" class="form-control">
						<label for="form_control_1">Ngày bắt đầu</label>
						<span class="help-block">Mời bạn nhập ngày bắt đầu</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="text" name="end_time_sale" value="{{old('end_time_sale', $model->end_time_sale)}}" class="form-control">
						<label for="form_control_1">Ngày kết thú</label>
						<span class="help-block">Mời bạn nhập ngày kết thúc</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="text" name="percent" value="{{old('percent', $model->percent)}}" class="form-control">
						<label for="form_control_1">Số phần trăm giảm giá</label>
						<span class="help-block">Mời bạn nhập số phần trăm giảm giá</span>
						<i class="icon-user"></i>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="text" name="status" value="{{old('status', $model->status)}}" class="form-control">
						<label for="form_control_1">Trạng thái sự kiện</label>
						<span class="help-block">Mời bạn nhập trạng thái sự kiện</span>
						<i class="icon-user"></i>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn blue">Gửi thông tin</button>
				<button type="button" class="btn green"><a href="{{route('homeevent')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>

@endsection