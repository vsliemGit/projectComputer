@extends('print.layout.paper')

@section('title')
Biểu mẫu Phiếu in danh sách Khách hàng
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
                    Bảng danh sách Khách hàng<br/>
                    http://latop.com <br />
                    (0292)3.1111.999 # 0339522221<br />
                    <img src="{{ asset('/storage/img/logo.png') }}" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($dsdh)/10);
            ?>
        <table border="1" align="center" cellpadding="5">
            <caption><b>DANH SÁCH ĐƠN HÀNG</b></caption>
            <tr>
                <th colspan="7" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã DH</th>
                <th>Mã KH</th>
                <th>TG đặt hàng</th>
                <th>Ngày giao hàng</th>
                <th>Trạng thái thanh toán</th>
                <th>Địa chỉ giao</th>
            </tr>
            @foreach ($dsdh as $dh)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $dh->dh_ma }}</td>
                <td align="left">{{ $dh->kh_ma }}</td>
                <td align="right">{{ $dh->dh_thoiGianDatHang }}</td>
                <td align="right">{{ $dh->dh_ngayGiaoHang }}</td>
                <td align="left">{{ old('$dh->dh_daThanhToan', $dh->dh_daThanhToan) == 1 ? "Đã thanh toán" : "Chưa thanh toán" }}</td>
                <td align="left">{{ $dh->dh_diaChi }}</td>
            </tr>
            @if (($loop->index + 1) % 10 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="8" align="center">Trang {{ 1 + floor(($loop->index + 1) / 10) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
            <th>STT</th>
                <th>Mã DH</th>
                <th>Mã KH</th>
                <th>TG đặt hàng</th>
                <th>Ngày giao hàng</th>
                <th>Trạng thái thanh toán</th>
                <th>Địa chỉ giao</th>
            </tr>
            @endif
            @endforeach
        </table>
    </article>
</section>
@endsection



       
   