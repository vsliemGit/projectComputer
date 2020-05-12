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

<!-- Tạo nút Xuất PDF danh sách nhân viên -->
<a href="{{ route('donhang.pdf') }}" class="btn btn-danger">Xuất PDF</a>

<!-- Tạo nút xem biểu mẫu khi in trên web-->
<a href="{{ route('donhang.print') }}" class="btn btn-warning">In ấn</a>

<!-- Tạo table hiển thị danh sách các sản phẩm -->
<table class="table table-striped table-bordered table-hover ">
    <thead>
        <tr>
            <th>Mã ĐH</th>
            <th>Mã KH</th>
            <th>Tổng tiền</th>
            <th>Thời gian đặt hàng</th>
            <th>Địa chỉ nhận</th>
            <th>Ngày lập phiếu giao</th>
            <th>Ngày giao hàng</th>
            <th>&nbsp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds_dh as $dh)
            <tr>
                <td>{{ $dh->dh_ma }}</td>
                <td>{{ $dh->kh_ma }}</td>
                <td>{{ $dh->dh_tongTien }}</td>
                <td>{{ $dh->dh_thoiGianDatHang }}</td>
                <td>{{ $dh->dh_diaChi }}</td>
                <td>{{ $dh->dh_ngayLapPhieuGiao }}</td>
                <td>{{ $dh->dh_ngayGiaoHang }}</td>
                <td>
                    <!-- Tạo nút Sửa nhân viên -->
                    <a href="" class="btn btn-success pull-left">Sửa</a>

                    <!-- Tạo nút Xóa nhân viên-->
                    <form method="post" action="" class="pull-left">
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