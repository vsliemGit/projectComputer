<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sản phẩm</title>
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
        $tongSoTrang = ceil(count($danhsachsanpham)/5);
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
                <th>Hình ảnh</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Thông tin</th>
                <th>Tạo mới</th>
                <th>Cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @foreach ($danhsachsanpham as $sp)
            <tr>
                <td align="center">{{ $loop->index + 1 }}</td>
                <td align="left">{{ $sp->sp_ma }}</td>
                <td align="left">{{ $sp->sp_ten }}</td>
                <td align="center">
                    <img class="hinhSanPham" src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" />
                </td>
                <td align="right">{{ $sp->sp_giaGoc }}</td>
                <td align="right">{{ $sp->sp_giaBan }}</td>
                <td align="left">{{ $sp->sp_thongTin }}</td>
                <td align="left">{{ $sp->sp_taoMoi }}</td>
                <td align="left">{{ $sp->sp_capNhat }}</td>
                <td align="right">{{ $sp->sp_trangThai }}</td>
            </tr>
            @if (($loop->index + 1) % 5 == 0)
        </table>
        <div class="page-break"></div>
        <table border="1" align="center" cellpadding="5">
            <tr>
                <th colspan="10" align="center">Trang {{ 1 + floor(($loop->index + 1) / 5) }} / {{ $tongSoTrang }}</th>
            </tr>
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá gốc</th>
                <th>Giá bán</th>
                <th>Thông tin</th>
                <th>Tạo mới</th>
                <th>Cập nhật</th>
                <th>Trạng thái</th>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</body>

</html>