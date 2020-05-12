{{-- View này sẽ kế thừa giao diện từ `backend.layouts.index` --}}
@extends('backend.layouts.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `backend.layouts.index` --}}
@section('title')
Quản trị - Danh sách nhân viên
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `backend.layouts.index` --}}
@section('main-content')
<!-- Đây là div hiển thị Kết quả (thành công, thất bại) sau khi thực hiện các chức năng Thêm, Sửa, Xóa.
- Div này chỉ hiển thị khi trong Session có các key `alert-*` từ Controller trả về. 
- Sử dụng các class của Bootstrap "danger", "warning", "success", "info" để hiển thị màu cho đúng với trạng thái kết quả.
-->

<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>

<!-- Tạo nút trở về trang chủ-->
<a href="{{ route('frontend.home') }}" class="btn btn-primary">Về trang chủ</a>

<!-- Tạo nút Thêm nhân viên-->
<a href="{{ route('nhanvien.create') }}" class="btn btn-success">Thêm nhân viên mới</a>

<!-- Tạo nút Xuất PDF danh sách nhân viên -->
<a href="{{ route('nhanvien.pdf') }}" class="btn btn-danger">Xuất PDF</a>

<!-- Tạo nút xem biểu mẫu khi in trên web-->
<a href="{{ route('nhanvien.print') }}" class="btn btn-warning">In ấn</a>

<!-- Tạo table hiển thị danh sách các sản phẩm -->
<table class="table table-striped table-bordered table-hover ">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Tài khoản</th>
            <th>Điện thoại</th>
            <th>Email</th>
            <th>Quyền</th>
            <th>Tạo mới</th>
            <th>Cập nhật</th>
            <th>Trạng thái</th>
            <th>&nbsp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds_nv as $nv)
            <tr>
                <td>{{ $nv->nv_ma }}</td>
                <td>{{ $nv->nv_hoTen }}</td>
                <td>{{ $nv->nv_taiKhoan }}</td>
                <td>{{ $nv->nv_dienThoai }}</td>
                <td>{{ $nv->nv_email }}</td>
                <td>{{ $nv->quyenNhanVien->q_ma }}</td>
                <td>{{ $nv->nv_taoMoi }}</td>
                <td>{{ $nv->nv_capNhat }}</td>
                <td>{{ old('nv_trangThai', $nv->nv_trangThai) == 1 ? "Khóa" : "Khả dụng" }}</td>
                <td>
                    <!-- Tạo nút Sửa nhân viên -->
                    <a href="{{ route('nhanvien.edit' , ['id' => $nv->nv_ma]) }}" class="btn btn-info pull-left">Sửa</a>

                    <!-- Tạo nút Xóa nhân viên-->
                    <form method="post" action="{{ route('nhanvien.delete', ['id' => $nv->nv_ma ]) }}" class="pull-left">
                        <!-- Khi gởi Request Xóa dữ liệu, Laravel Framework mặc định chỉ chấp nhận thực thi nếu có gởi kèm field `_method=DELETE` -->
                        <input type="hidden" name="_method" value="DELETE" />
                        <!-- Khi gởi bất kỳ Request POST, Laravel Framework mặc định cần có token để chống lỗi bảo mật CSRF
                        - Sử dụng`@csrf` để tự sinh ra 1 input có token dành riêng cho CSRF
                        -->
                        @csrf
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection