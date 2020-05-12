{{-- View này sẽ kế thừa giao diện từ `backend.layouts.index` --}}
@extends('backend.layouts.index')

{{-- Thay thế nội dung vào Placeholder `title` của view `backend.layouts.index` --}}
@section('title')
Quản trị - Danh sách sản phẩm
@endsection

{{-- Thay thế nội dung vào Placeholder `main-content` của view `backend.layouts.index` --}}
@section('main-content')

<!-- Đây là div hiển thị Kết quả (thành công, thất bại) sau khi thực hiện các chức năng Thêm, Sửa, Xóa.
- Div này chỉ hiển thị khi trong Session có các key `alert-*` từ Controller trả về. 
- Sử dụng các class của Bootstrap "danger", "warning", "success", "info" để hiển thị sản phấm cho đúng 
với trạng thái kết quả.
-->
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" d
      ata-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>

<!-- Tạo nút trở về trang chủ-->
<a href="{{ route('frontend.home') }}" class="btn btn-primary">Về trang chủ</a>

<!-- Tạo nút Thêm mới sản phẩm-->
<a href="{{ route('sanpham.create') }}" class="btn btn-success">Thêm sản phẩm</a>

<!-- Tạo nút Xuất PDF danh sách sản phẩm-->
<a href="{{ route('sanpham.pdf') }}" class="btn btn-danger">Xuất PDF</a>

<!-- Tạo nút xem biểu mẫu khi in trên web-->
<a href="{{ route('sanpham.print') }}" class="btn btn-warning">In ấn</a>

<!-- Tạo table hiển thị danh sách các sản phẩm -->
<table class="table table-striped table-bordered table-hover ">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Giá gốc</th>
            <th>Giá bán</th>
            <th>Thông tin</th>
            <th>Tạo mới</th>
            <th>Cập nhật</th>
            <th>Trạng thái</th>
            <th>&nbsp</th>
        </tr>
    </thead>
    <tbody>
        <!-- Sử dụng vòng lặp foreach để duyệt qua các sản phẩm 
        - Biến $danhsachsanpham là biến được truyền qua từ action `index()` trong controller SanPhamController.
        -->
        @foreach($danhsachsanpham as $sp)
            <tr>
                <td>{{ $sp->sp_ma }}</td>
                <td>{{ $sp->sp_ten }}</td>
                <td><img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="img-list" /></td>
                <td>{{ $sp->sp_giaGoc }}</td>
                <td>{{ $sp->sp_giaBan }}</td>
                <td>{{ $sp->sp_thongTin }}</td>
                <td>{{ $sp->sp_taoMoi }}</td>
                <td>{{ $sp->sp_capNhat }}</td>
                <td>{{ old('sp_trangThai', $sp->sp_trangThai) == 1 ? "Khóa" : "Khả dụng" }}</td>
                <td>
                    <!-- Tạo nút xem chi tiết sản phẩm -->
                    <a href="{{ route('sanpham.deltail', ['id' => $sp->sp_ma]) }}" class="btn btn-success">Chi tiết</a>

                    <!-- Tạo nút Sửa sản phẩm -->
                    <a href="{{ route('sanpham.edit', ['id' => $sp->sp_ma]) }}" class="btn btn-info pull-left">Sửa</a>

                    <!-- Tạo nút Xóa sản phẩm-->
                    <form method="post" action="{{ route('sanpham.delete', ['id' => $sp->sp_ma]) }}" class="pull-left">
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

{{ $danhsachsanpham->links() }}

@endsection