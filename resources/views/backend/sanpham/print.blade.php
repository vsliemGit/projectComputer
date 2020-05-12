@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu in danh sách sản phẩm
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
                    Bảng danh sách sản phẩm<br/>
                    http://latop.com <br />
                    (0292)3.1111.999 # 0339522221<br />
                    <img src="{{ asset('/storage/img/logo.png') }}" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($danhsachsanpham)/10);
            ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách sản phẩm</caption>
            <tr>
                <th colspan="10" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Tên sản phẩm</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Thông tin</th>
                <th>Đánh giá</th>
                <th>Tạo mới</th>
                <th>Cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @foreach ($danhsachsanpham as $sp)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $sp->sp_ma }}</td>
                <td align="left">{{ $sp->sp_ten }}</td>
                <td align="right">{{ $sp->sp_giaGoc }}</td>
                <td align="right">{{ $sp->sp_giaBan }}</td>
                <td align="left">{{ $sp->sp_thongTin }}</td>
                <td align="left">{{ $sp->sp_danhGia }}</td>
                <td align="left">{{ $sp->sp_taoMoi }}</td>
                <td align="left">{{ $sp->sp_capNhat }}</td>
                <td align="right">{{ $sp->sp_trangThai }}</td>
            </tr>
            @if (($loop->index + 1) % 10 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="10" align="center">Trang {{ 1 + floor(($loop->index + 1) / 10) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Tên sản phẩm</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Thông tin</th>
                <th>Đánh giá</th>
                <th>Tạo mới</th>
                <th>Cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection



       
   