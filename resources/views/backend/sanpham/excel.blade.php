<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sản phẩm</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
        * {
            font-family: DejaVu Sans, sans-serif;
        }
    </style>
</head>

<body style="font-size: 10px">
    <div class="row">
        <table border="0" align="center" cellpadding="5" style="border-collapse: collapse;">
            <tr>
                <td colspan="5" class="caption" align="center" style="text-align: center; font-size: 20px">
                    <b>Danh sách sản phẩm</b>
                </td>
            </tr>
            <tr style="border: 1px solid #000">
                <th style="text-align: center">STT</th>
                <th style="text-align: center">Hình sản phẩm</th>
                <th style="text-align: center">Tên sản phẩm</th>
                <th style="text-align: center">Giá gốc</th>
                <th style="text-align: center">Giá bán</th>
            </tr>
            @foreach ($danhsachsanpham as $sp)
            <tr style="border: 1px solid #000">
                <td align="center" valign="middle" width="5">
                    {{ $loop->index + 1 }}
                </td>
                <td align="center" valign="middle" width="20" height="110">
                    <img class="hinhSanPham" src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" width="100" height="100" />
                </td>
                <td align="left" valign="middle" width="30">{{ $sp->sp_ten }}</td>
                <td align="right" valign="middle" width="15">{{ $sp->sp_giaGoc }}</td>
                <td align="right" valign="middle" width="15">{{ $sp->sp_giaBan }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>