<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\ChiTietDonHang;
use App\ChiTietSanPham;
use DB;
use App\SanPham;
use App\VanChuyen;
use App\ThanhToan;
use App\KhachHang;
use App\DonHang;
use Carbon\Carbon;
use App\Gopy;

class FrontendController extends Controller
{
    use  ValidatesRequests;
    
    public function index(Request $request){
        //Top 3 loại sản mới nhất
        $top_3_sp = DB::table('sanpham')
            ->orderBy('sp_capNhat')->take(3)->get();

        //Danh sách các sản phẩm
        $ds_sp = $this->searchSanPham($request);


        //Lấy danh sách hình ảnh liên quan của sản phẩm
        $danhsachhinhanhlienquan = DB::table('hinhanh')
                                ->whereIn('sp_ma', $ds_sp->pluck('sp_ma')->toArray())
                                ->get();

        //Danh sách chi tiết sản phẩm:
        $ds_ct = ChiTietSanPham::all();

        $showPagination = true;

        return view('frontend.index')
                ->with('top_3_sp', $top_3_sp)
                ->with('ds_sp', $ds_sp)
                ->with('ds_hang', $ds_ct)
                ->with('showPagination', $showPagination)
                ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan);
    }

    private function searchSanPham(){
        // $query = DB::table('sanpham')->select('*');
        // return $data = $query->get();
        //Paginate
        return $data = SanPham::paginate(12);

    }

    //Tìm kiếm sản phẩm:
    public function search(Request $request){
        $tuKhoa = $request->tuKhoa;
        $result = DB::table('SanPham')
            ->leftJoin('ChiTietSanPham', 'SanPham.sp_ma', '=', 'ChiTietSanPham.sp_ma')
            ->where('SanPham.sp_ten', 'like', "%{$tuKhoa}%")
            ->orWhere('SanPham.sp_thongTin', 'like', "%{$tuKhoa}%")
            ->orWhere('ChiTietSanPham.ctsp_hang', 'like', "%{$tuKhoa}%")
            ->orWhere('ChiTietSanPham.ctsp_loaiCPU', 'like', "%{$tuKhoa}%")
            ->orWhere('.ChiTietSanPham.ctsp_loaiRAM', 'like', "%{$tuKhoa}%")
            ->orWhere('ChiTietSanPham.ctsp_loaiROM', 'like', "%{$tuKhoa}%")
            ->orWhere('ChiTietSanPham.ctsp_cardDoHoa', 'like', "%{$tuKhoa}%")
            ->get();
        return view('frontend.pages.resultSearch')
                    ->with('tuKhoa', $tuKhoa)
                    ->with('result', $result);
    }

    //SẮP XẾP SẢN PHẨM THEO GIÁ TĂNG HOẶC GIẢM DẦN
    public function sortPrice($id){

        //Top 3 loại sản mới nhất
        $top_3_sp = DB::table('sanpham')
            ->orderBy('sp_capNhat')->take(3)->get();

        $ds_sp =  DB::table('sanpham')
            ->orderBy('sp_giaBan', 'asc')
            ->get();

        if($id == 1){
           $ds_sp =  DB::table('sanpham')
                    ->orderBy('sp_giaBan', 'desc')
                    ->get();
        }

        $ds_ct = ChiTietSanPham::all();

        $danhsachhinhanhlienquan = DB::table('hinhanh')
            ->whereIn('sp_ma', $ds_sp->pluck('sp_ma')->toArray())
            ->get();

        $showPagination = false;

        return   view('frontend.pages.product')
                ->with('danhsachsanpham', $ds_sp)
                ->with('ds_hang', $ds_ct)
                ->with('top_3_sp', $top_3_sp)
                ->with('showPagination', $showPagination)
                ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan);
    }

    public function findPrice1(){
        //Top 3 loại sản mới nhất
        $top_3_sp = DB::table('sanpham')
            ->orderBy('sp_capNhat')->take(3)->get();

        $ds_sp =  DB::table('sanpham')
            ->whereBetween('sp_giaBan', [7000000, 10000000])
            ->orderBy('sp_giaBan', 'asc')
            ->get();
        $ds_ct = ChiTietSanPham::all();

        $danhsachhinhanhlienquan = DB::table('hinhanh')
            ->whereIn('sp_ma', $ds_sp->pluck('sp_ma')->toArray())
            ->get();
        $showPagination = false;
        return   view('frontend.pages.product')
                ->with('danhsachsanpham', $ds_sp)
                ->with('ds_hang', $ds_ct)
                ->with('top_3_sp', $top_3_sp)
                ->with('showPagination', $showPagination)
                ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan);
    }

    public function findPrice2(){
        //Top 3 loại sản mới nhất
        $top_3_sp = DB::table('sanpham')
            ->orderBy('sp_capNhat')->take(3)->get();

        $ds_sp =  DB::table('sanpham')
            ->whereBetween('sp_giaBan', [10000000, 20000000])
            ->orderBy('sp_giaBan', 'asc')
            ->get();
        $ds_ct = ChiTietSanPham::all();

        $danhsachhinhanhlienquan = DB::table('hinhanh')
            ->whereIn('sp_ma', $ds_sp->pluck('sp_ma')->toArray())
            ->get();
        $showPagination = false;

        return   view('frontend.pages.product')
                ->with('danhsachsanpham', $ds_sp)
                ->with('ds_hang', $ds_ct)
                ->with('top_3_sp', $top_3_sp)
                ->with('showPagination', $showPagination)
                ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan);
    }

    public function findPrice3(){
        //Top 3 loại sản mới nhất
        $top_3_sp = DB::table('sanpham')
            ->orderBy('sp_capNhat')->take(3)->get();

        $ds_sp =  DB::table('sanpham')
            ->where('sp_giaBan', '>', 20000000)
            ->orderBy('sp_giaBan', 'asc')
            ->get();
        $ds_ct = ChiTietSanPham::all();

        $danhsachhinhanhlienquan = DB::table('hinhanh')
            ->whereIn('sp_ma', $ds_sp->pluck('sp_ma')->toArray())
            ->get();
        $showPagination = false;
        return   view('frontend.pages.product')
                ->with('top_3_sp', $top_3_sp)
                ->with('danhsachsanpham', $ds_sp)
                ->with('ds_hang', $ds_ct)
                ->with('showPagination', $showPagination)
                ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan);
    }

    public function product(){
        //Lấy danh sách tất cả các sản phẩm
        $ds_sp = $data = SanPham::all();

        //Top 3 loại sản mới nhất
        $top_3_sp = DB::table('sanpham')
            ->orderBy('sp_capNhat')->take(3)->get();

        //Lấy danh sách hình ảnh liên quan của sản phẩm
        $danhsachhinhanhlienquan = DB::table('hinhanh')
                                ->whereIn('sp_ma', $ds_sp->pluck('sp_ma')->toArray())
                                ->get();

        $showPagination = false;
        return view('frontend.pages.product')
            ->with('top_3_sp', $top_3_sp)
            ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan)
            ->with('showPagination', $showPagination)
            ->with('danhsachsanpham', $ds_sp);
    }

    public function productDetail(Request $request, $id){

        //Lấy thông tin sản phẩm từ id
        $sanpham = SanPham::find($id);

        // Query Lấy các hình ảnh liên quan của các Sản phẩm đã được lọc
        $danhsachhinhanhlienquan = DB::table('hinhanh')
                                ->where('sp_ma', $id)
                                ->get();
        
        //Lấy thông tin chi tiết sản phẩm:
        $deltail = DB::table('chitietsanpham')
                    ->where('sp_ma', $id)
                    ->first();

        if(empty($deltail) == false){
            return view('frontend.pages.product-detail')
            ->with('sp', $sanpham)
            ->with('ctsp', $deltail)
            ->with('danhsachhinhanhlienquan', $danhsachhinhanhlienquan);
        } return redirect()->back()
            ->withInput()->with("error", "Sản phẩm hiện chưa có thông tin!");    
    }

    public function cart(){
        //Lấy danh sách hình thức vận chuyển:
        $danhsachvanchuyen = VanChuyen::all();

        //lấy danh sách phương thức thanh toán:
        $danhsachphuongthucthanhtoan = ThanhToan::all();

        return view('frontend.pages.shopping-cart')
                ->with('danhsachvanchuyen', $danhsachvanchuyen)
                ->with('danhsachphuongthucthanhtoan', $danhsachphuongthucthanhtoan);
    }

    public function order(Request $request)
    {
       try{
              // Tạo mới khách hàng
            $khachhang = new KhachHang();
            $khachhang->kh_hoTen = $request->khachhang['kh_hoTen'];
            $khachhang->kh_email = $request->khachhang['kh_email'];
            if (!empty($request->khachhang['kh_dienThoai'])) {
                $khachhang->kh_dienThoai = $request->khachhang['kh_dienThoai'];
            }
            $khachhang->kh_trangThai = 2; // Khả dụng
            $khachhang->save();

            // Tạo mới đơn hàng
            $donhang = new DonHang();
            $donhang->kh_ma = $khachhang->kh_ma;
            $donhang->dh_thoiGianDatHang = Carbon::now();
            $donhang->dh_diaChi = $request->donhang['dh_diaChi'];
            $donhang->dh_daThanhToan = 0; //Chưa thanh toán
            $donhang->nv_xuLy = 1; //Mặc định nhân viên đầu tiên
            $donhang->nv_giaoHang = 1; //Mặc định nhân viên đầu tiên
            $donhang->dh_trangThai = 0; //Nhận đơn
            $donhang->vc_ma = $request->donhang['vc_ma'];
            $donhang->tt_ma = $request->donhang['tt_ma'];
            $donhang->save();
            // Lưu chi tiết đơn hàng
            foreach ($request->giohang['items'] as $sp) {
                $chitietdonhang = new ChiTietDonHang();
                $chitietdonhang->dh_ma = $donhang->dh_ma;
                $chitietdonhang->sp_ma = $sp['_id'];
                $chitietdonhang->ctdh_soLuong = $sp['_quantity'];
                $chitietdonhang->ctdh_donGia = $sp['_price'];
                $chitietdonhang->ctdh_thanhTien = $chitietdonhang->ctdh_soLuong * $chitietdonhang->ctdh_donGia;
                $donhang->dh_tongTien += $chitietdonhang->ctdh_thanhTien;
                $chitietdonhang->save();
            }
            $donhang->save();
           
        }
        catch(ValidationException $e) {
            return response()->json(array(
                'code'  => 500,
                'message' => $e,
                'redirectUrl' => route('frontend.home')
            ));
        } 
        // catch(Exception $e) {
        //     throw $e;
        // }
        return response()->json(array(
            'code'  => 200,
            'message' => 'Tạo đơn hàng thành công!',
            'redirectUrl' => route('frontend.orderFinish')
        ));

    }

    /**
     * Action Hoàn tất Đặt hàng
     */
    public function orderFinish()
    {
        return view('frontend.pages.order-finish');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function sendMailContactForm(Request $request){
        try {
            // Tạo mới gop ý:
            $gopy = new GopY();
            $gopy->gy_noidung = $request->phanHoi['message'];
            $gopy->gy_email = $request->phanHoi['email'];
            $gopy->save();
          
        } catch (ValidationException $e) {
            return response()->json(array(
                'code'  => 500,
                'message' => $e,
                'redirectUrl' => route('frontend.contact')
            ));
        } catch (Exception $e) {
            throw $e;
        }
        return response()->json(array(
            'code'  => 200,
            'message' => 'Bạn đã gửi phản hồi thành công! Hãy tiếp tục mua sắm nhá!!!',
            'redirectUrl' => route('frontend.home')
        ));
    }

}
