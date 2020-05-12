<!DOCTYPE html>
<html>

<head>
    <title> Print - Danh Sách Đơn hàng </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }

        body {
            font-size: 10px;
        }

        table {
            border-collapse: collapse;
        }

        td {
            vertical-align: middle;
        }

        caption {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .hinhSanPham {
            width: 100px;
            height: 100px;
        }

        .Info {
            font-size: 13px;
            font-weight: bold;
            text-align: center;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="row">
        <table border="0" align="center">
            <tr>
                <td class="Info">
                    Shop Laptop Latop <br/>
                    Bảng danh sách Đơn hàng<br/>
                    http://latop.com <br />
                    (0292)3.1111.999 # 0339522221<br />
                    <img src="{{ asset('/storage/img/logo.png') }}" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($dsdh)/5);
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
                <td align="left">{{ $dh->dh_daThanhToan }}</td>
                <td align="left">{{ $dh->dh_diaChi }}</td>
            </tr>
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="7" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
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
    </div>
</body>

</html>