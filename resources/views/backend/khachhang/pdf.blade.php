<!DOCTYPE html>
<html>

<head>
    <title> Print - Danh Sách Khách hàng </title>
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
        $tongSoTrang = ceil(count($dskh)/5);
         ?>
        <table border="1" align="center" cellpadding="5">
            <caption>Danh sách Khách hàng</caption>
            <tr>
                <th colspan="8" align="center">Trang 1 / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Ngày tạo mới</th>
                <th>Ngày cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @foreach ($dskh as $kh)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $kh->kh_ma }}</td>
                <td align="left">{{ $kh->kh_hoTen }}</td>
                <td align="right">{{ $kh->kh_email }}</td>
                <td align="right">{{ $kh->kh_dienThoai }}</td>
                <td align="left">{{ $kh->kh_taoMoi }}</td>
                <td align="left">{{ $kh->kh_capNhat }}</td>
                <td align="right">{{ $kh->kh_trangThai }}</td>
            </tr>
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="8" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Ngày tạo mới</th>
                <th>Ngày cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</body>

</html>