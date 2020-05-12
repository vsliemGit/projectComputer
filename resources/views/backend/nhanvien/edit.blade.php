@extends('backend.layouts.index')

@section('title')
Hiệu chỉnh nhân viên
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
<link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection

@section('main-content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('nhanvien.update', ['id' => $nv->nv_ma]) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT" />
    @csrf
    <div class="form-group">
        <label for="nv_hoTen">Tên nhân viên</label>
        <input type="text" class="form-control" id="nv_hoTen" name="nv_hoTen" value="{{ old('nv_hoTen', $nv->nv_hoTen) }}">
    </div>
    <div class="form-group">
        <label for="nv_taiKhoan">Tài khoản</label>
        <input type="text" class="form-control" id="nv_taiKhoan" name="nv_taiKhoan" value="{{ old('nv_taiKhoan', $nv->nv_taiKhoan) }}">
    </div>
    <div class="form-group">
        <label for="nv_email">Email</label>
        <input type="text" class="form-control" id="nv_email" name="nv_email" value="{{ old('nv_email', $nv->nv_email) }}">
    </div>
    <div class="form-group">
        <label for="nv_dienThoai">Điện thoại</label>
        <input type="text" class="form-control" id="nv_dienThoai" name="nv_dienThoai" value="{{ old('nv_dienThoai', $nv->nv_dienThoai) }}">
    </div>
    <div class="form-group">
        <label for="nv_taoMoi">Ngày tạo mới</label>
        <input type="text" class="form-control" id="nv_taoMoi" name="nv_taoMoi" value="{{ old('nv_taoMoi', $nv->nv_taoMoi) }}" data-mask-datetime>
    </div>
    <div class="form-group">
        <label for="nv_capNhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="nv_capNhat" name="nv_capNhat" value="{{ old('nv_capNhat', $nv->nv_capNhat) }}" data-mask-datetime>
    </div>
    <select name="nv_trangThai">
        <option value="1" {{ old('nv_trangThai', $nv->nv_trangThai) == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('nv_trangThai', $nv->nv_trangThai) == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>
    <br/><br/><button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

@section('custom-scripts')
<!-- Các script dành cho thư viện bootstrap-fileinput -->
<script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>

<!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('theme/adminlte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script>
$(document).ready(function(){
    
});
</script>

@endsection