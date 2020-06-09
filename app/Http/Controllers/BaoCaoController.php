<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaoCaoController extends Controller
{
   /**
     * Action hiển thị view Báo cáo đơn hàng
     */
    public function donhang()
    {
        return view('backend.reports.donhang');
    }

    /**
     * Action AJAX get data cho báo cáo Đơn hàng
     */
    public function donhangData(Request $request)
    {
        $parameter = [
            'tuNgay' => $request->tuNgay,
            'denNgay' => $request->denNgay
        ];
        // 2019-07-21    50,000,000
        // 2019-07-20    40,000,000
        $data = DB::select('
            SELECT dh.dh_thoiGianDatHang as thoiGian
                , SUM(ctdh.ctdh_soLuong * ctdh.ctdh_donGia) as tongThanhTien
            FROM donhang dh
            JOIN chitietdonhang ctdh ON dh.dh_ma = ctdh.dh_ma
            WHERE dh.dh_thoiGianDatHang BETWEEN :tuNgay AND :denNgay
            GROUP BY dh.dh_thoiGianDatHang
        ', $parameter);

        // JSON
        return response()->json(array(
            'code'  => 200,
            'data' => $data,
        ));
    }
}
