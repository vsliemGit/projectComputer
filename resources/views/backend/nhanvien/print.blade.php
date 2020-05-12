@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu in danh sách Nhân viên
@endsection

@section('paper-size') A4 @endsection
@section('paper-class') A4 @endsection

@section('custom-css')
@endsection

@section('content')
<section class="sheet padding-10mm">
    <article>
        <table border="0" align="center">
            <tr>
            <td style="font-size: 13px;font-weight: bold; text-align: center;">
                    Shop Laptop Latop <br/>
                    Bảng danh sách nhân viên<br/>
                    http://latop.com <br />
                    (0292)3.1111.999 # 0339522221<br />
                    <img src="{{ asset('/storage/img/logo.png') }}" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($dsnv)/10);
            ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách Nhân viên</caption>
            <tr>
                <th colspan="9" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Họ tên</th>
                <th>Tài khoản</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Ngày tạo mới</th>
                <th>Ngày cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @foreach ($dsnv as $nv)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $nv->nv_ma }}</td>
                <td align="left">{{ $nv->nv_hoTen }}</td>
                <td align="right">{{ $nv->nv_taiKhoan }}</td>
                <td align="right">{{ $nv->nv_dienThoai }}</td>
                <td align="left">{{ $nv->nv_email }}</td>
                <td align="left">{{ $nv->nv_taoMoi }}</td>
                <td align="left">{{ $nv->nv_capNhat }}</td>
                <td align="right">{{ $nv->nv_trangThai }}</td>
            </tr>
            @if (($loop->index + 1) % 10 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="9" align="center">Trang {{ 1 + floor(($loop->index + 1) / 10) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
            <th>STT</th>
                <th>Mã</th>
                <th>Họ tên</th>
                <th>Tài khoản</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Ngày tạo mới</th>
                <th>Ngày cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection



       
   