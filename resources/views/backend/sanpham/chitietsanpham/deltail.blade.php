@extends('backend.layouts.index')

@section('title')
Chi tiết sản phẩm
@endsection

{{-- Thay thế nội dung vào Placeholder `title` của view `backend.layouts.index` --}}
@section('title')
Quản trị - Chi tiết sản phẩm
@endsection

@section('custom-css')
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

<table class="table table-striped table-bordered table-hover" cellpadding="10">
<form method="post" action="{{ route('chitietsanpham.update', ['id' => $ctsp->ctsp_ma]) }}" enctype="multipart/form-data">
    @csrf
    <tr>
        <td><b>Hãng: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_hang" id="ctsp_hang" name="ctsp_hang" value="{{ old('ctsp_hang', $ctsp->ctsp_hang) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>CPU: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_loaiCPU" id="ctsp_loaiCPU" name="ctsp_loaiCPU" value="{{ old('ctsp_loaiCPU', $ctsp->ctsp_loaiCPU) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Tốc độ CPU: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_tocDoCPU" id="ctsp_tocDoCPU" name="ctsp_tocDoCPU" value="{{ old('ctsp_tocDoCPU', $ctsp->ctsp_tocDoCPU) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Loại RAM: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_loaiRAM" id="ctsp_loaiRAM" name="ctsp_loaiRAM" value="{{ old('ctsp_loaiRAM', $ctsp->ctsp_loaiRAM) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Dung lượng RAM: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_dungLuongRAM" id="ctsp_dungLuongRAM" name="ctsp_dungLuongRAM" value="{{ old('ctsp_dungLuongRAM', $ctsp->ctsp_dungLuongRAM) }}"> GB
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Loại ROM: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_loaiROM" id="ctsp_loaiROM" name="ctsp_loaiROM" value="{{ old('ctsp_loaiROM', $ctsp->ctsp_loaiROM) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Dung lượng ROM: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_dungLuongROM" id="ctsp_dungLuongROM" name="ctsp_dungLuongROM" value="{{ old('ctsp_dungLuongROM', $ctsp->ctsp_dungLuongROM) }}"> GB
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Loại RAM: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_loaiRAM" id="ctsp_loaiRAM" name="ctsp_loaiRAM" value="{{ old('ctsp_loaiRAM', $ctsp->ctsp_loaiRAM) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Kích thước Màn hình: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_kichThuocMonitor" id="ctsp_kichThuocMonitor" name="ctsp_kichThuocMonitor" value="{{ old('ctsp_kichThuocMonitor', $ctsp->ctsp_kichThuocMonitor) }}"> INCH
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Độ phân giải Màn hình: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_doPhanGiaiMonitor" id="ctsp_doPhanGiaiMonitor" name="ctsp_doPhanGiaiMonitor" value="{{ old('ctsp_doPhanGiaiMonitor', $ctsp->ctsp_doPhanGiaiMonitor) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Loại card đồ họa: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_cardDoHoa" id="ctsp_cardDoHoa" name="ctsp_cardDoHoa" value="{{ old('ctsp_cardDoHoa', $ctsp->ctsp_cardDoHoa) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Các cổng kết nối: </b></td>
        <td>
            <div class="form-group">
                <textarea id="ctsp_congKetNoi" name="ctsp_congKetNoi">{{ old('ctsp_congKetNoi', $ctsp->ctsp_congKetNoi) }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Loại pin: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_pin" id="ctsp_pin" name="ctsp_pin" value="{{ old('ctsp_pin', $ctsp->ctsp_pin) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Hệ điều hành: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_HDH" id="ctsp_HDH" name="ctsp_HDH" value="{{ old('ctsp_HDH', $ctsp->ctsp_HDH) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Kích thước: </b></td>
        <td>
            <div class="form-group">
                <textarea id="ctsp_kichThuoc" name="ctsp_kichThuoc">{{ old('ctsp_kichThuoc', $ctsp->ctsp_kichThuoc) }}</textarea>
            </div>
        </td>
    </tr>
    <tr>
        <td><b>Trọng lượng: </b></td>
        <td>
            <div class="form-group">
            <input type="text" class="ctsp_trongLuong" id="ctsp_trongLuong" name="ctsp_trongLuong" value="{{ old('ctsp_trongLuong', $ctsp->ctsp_trongLuong) }}">
            </div>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button type="submit" class="btn btn-success">Cập nhật</button> 
            &nbsp &nbsp
            <a href="{{ route('chitietsanpham.delete', ['id' => $ctsp->ctsp_ma]) }}" class="btn btn-danger">Xóa</a>
            &nbsp &nbsp
            <a href="{{ route('sanpham.index') }}" class="btn btn-warning">Quay lại</a>
        </td>
    </tr>
    </form>
</table>
@endsection