@extends('backend.layouts.index')

@section('title')
Thêm nhân viên mới
@endsection

@section('main-content')
<form method="post" action="{{ route('nhanvien.store' )}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nv_hoTen">Họ tên nhân viên</label>
        <input type="text" class="form-control" id="nv_hoTen" name="nv_hoTen" value="{{ old('nv_hoTen') }}">
    </div>
    <div class="form-group">
        <label for="nv_taiKhoan">Tài khoản</label>
        <input type="text" class="form-control" id="nv_taiKhoan" name="nv_taiKhoan" value="{{ old('nv_taiKhoan') }}">
    </div>
    <div class="form-group">
        <label for="nv_matKhau">Mật khẩu</label>
        <input type="text" class="form-control" id="nv_matKhau" name="nv_matKhau" value="{{ old('nv_matKhau') }}">
    </div>
    <div class="form-group">
        <label for="nv_email">Email</label>
        <input type="text" class="form-control" id="nv_email" name="nv_email" value="{{ old('nv_email') }}">
    </div>
    <div class="form-group">
        <label for="nv_dienThoai">Điện thoại</label>
        <input type="text" class="form-control" id="nv_dienThoai" name="nv_dienThoai" value="{{ old('nv_dienThoai') }}">
</div>
    <label>Trạng thái</label>
    <select name="nv_trangThai" class="form-control">
        <option value="1" {{ old('nv_trangThai') == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('nv_trangThai') == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection
