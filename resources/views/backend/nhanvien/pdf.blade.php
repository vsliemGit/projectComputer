<!DOCTYPE html>
<html>

<head>
    <title> Print - Danh Sách Nhân Viên </title>
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
                    Bảng danh sách Nhân viên<br/>
                    http://latop.com <br />
                    (0292)3.1111.999 # 0339522221<br />
                    <img src="{{ asset('/storage/img/logo.png') }}" />
                </td>
            </tr>
        </table>
        <br />
        <br />
        <?php 
        $tongSoTrang = ceil(count($dsnv)/5);
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
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="11" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
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
    </div>
</body>

</html>