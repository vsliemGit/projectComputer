<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SanPham;
use App\HinhAnh;
use App\ChiTietSanPham;
use Storage;
use Session;
use PDF;
use Excel;
use App\Exports\SanPhamExport;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds_sanpham = SanPham::paginate(6);
        return view('backend.sanpham.index')
        ->with('danhsachsanpham', $ds_sanpham);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view("backend.sanpham.create");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'sp_hinh' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
            // Cú pháp dùng upload nhiều file
            'sp_hinhanhlienquan.*' => 'file|image|mimes:jpeg,png,gif,webp|max:2048'
        ]);


        $sp = new SanPham();
        $sp->sp_ten = $request->sp_ten;
        $sp->sp_giaGoc = $request->sp_giaGoc;
        $sp->sp_giaBan = $request->sp_giaBan;
        $sp->sp_thongTin = $request->sp_thongTin;
        $sp->sp_taoMoi = $request->sp_taoMoi;
        $sp->sp_capNhat = $request->sp_capNhat;
        $sp->sp_trangThai = $request->sp_trangThai;

        if($request->hasFile('sp_hinh'))
        {
            $file = $request->sp_hinh;

            // Lưu tên hình vào column sp_hinh
            $sp->sp_hinh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        }
        $sp->save();

        // Lưu hình ảnh liên quan
        if($request->hasFile('sp_hinhanhlienquan')) {
            $files = $request->sp_hinhanhlienquan;

            // duyệt từng ảnh và thực hiện lưu
            foreach ($request->sp_hinhanhlienquan as $index => $file) {
                
                $file->storeAs('public/photos', $file->getClientOriginalName());

                // Tạo đối tưọng HinhAnh
                $hinhAnh = new HinhAnh();
                $hinhAnh->sp_ma = $sp->sp_ma;
                $hinhAnh->ha_stt = ($index + 1);
                $hinhAnh->ha_ten = $file->getClientOriginalName();
                $hinhAnh->save();
            }
        }

        Session::flash('alert-info', 'Thêm mới thành công!!!');
        return redirect()->route('sanpham.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sp = SanPham::where('sp_ma', $id)->first();

        return view('backend.sanpham.edit')->with('sp', $sp);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'sp_hinh' => 'file|image|mimes:jpeg,png,gif,webp|max:2048',
            // Cú pháp dùng upload nhiều file
            'sp_hinhanhlienquan.*' => 'image|mimes:jpeg,png,gif,webp|max:2048'
        ]);

        $sp = SanPham::where("sp_ma",  $id)->first();
        $sp->sp_ten = $request->sp_ten;
        $sp->sp_giaGoc = $request->sp_giaGoc;
        $sp->sp_giaBan = $request->sp_giaBan;
        $sp->sp_thongTin = $request->sp_thongTin;
        $sp->sp_taoMoi = $request->sp_taoMoi;
        $sp->sp_capNhat = $request->sp_capNhat;
        $sp->sp_trangThai = $request->sp_trangThai;

        if($request->hasFile('sp_hinh'))
        {
            // Xóa hình cũ để tránh rác
            Storage::delete('public/photos/' . $sp->sp_hinh);

            // Upload hình mới
            // Lưu tên hình vào column sp_hinh
            $file = $request->sp_hinh;
            $sp->sp_hinh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        }

        // Lưu hình ảnh liên quan
        if($request->hasFile('sp_hinhanhlienquan')) {
            // DELETE các dòng liên quan trong table `HinhAnh`
            foreach($sp->hinhanhlienquan()->get() as $hinhAnh)
            {
                // Xóa hình cũ để tránh rác
                Storage::delete('public/photos/' . $hinhAnh->ha_ten);

                // Xóa record
                $hinhAnh->delete();
            }

            $files = $request->sp_hinhanhlienquan;

            // duyệt từng ảnh và thực hiện lưu
            foreach ($request->sp_hinhanhlienquan as $index => $file) {
                
                $file->storeAs('public/photos', $file->getClientOriginalName());

                // Tạo đối tưọng HinhAnh
                $hinhAnh = new HinhAnh();
                $hinhAnh->sp_ma = $sp->sp_ma;
                $hinhAnh->ha_stt = ($index + 1);
                $hinhAnh->ha_ten = $file->getClientOriginalName();
                $hinhAnh->save();
            }
        }

        $sp->save();

        Session::flash('alert-info', 'Cập nhật thành công!!!');
        return redirect()->route('sanpham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp = SanPham::where("sp_ma",  $id)->first();
        if(empty($sp) == false)
        {
            // DELETE các dòng liên quan trong table `HinhAnh`
            foreach($sp->hinhanhlienquan()->get() as $hinhAnh)
            {
                // Xóa hình cũ để tránh rác
                Storage::delete('public/photos/' . $hinhAnh->ha_ten);

                // Xóa record
                $hinhAnh->delete();
            }

            // Xóa hình cũ để tránh rác
            Storage::delete('public/photos/' . $sp->sp_hinh);
        }

        $sp->delete();

        Session::flash('alert-info', 'Xóa sản phẩm thành công ^^~!!!');
        return redirect()->route('sanpham.index');
    }

    public function pdf(){
        
        $danhsachsanpham = Sanpham::all();
        $pdf = PDF::loadView('backend.sanpham.pdf', compact('danhsachsanpham'));
        return $pdf->download('DanhMucSanPham.pdf');

       
    }

    public function print(){
        $danhsachsanpham = SanPham::all();
        return view('backend.sanpham.print')
            ->with('danhsachsanpham', $danhsachsanpham);
    }

    // public function viewExcel(){
    //     $ds_sanpham = SanPham::all();
    //     return view('sanpham.excel')->with('danhsachsanpham', $ds_sanpham);
    // }

    // public function excel(){
    //     $ds_sanpham = SanPham::all();
    //     $sp_array[] = array('Ma', 'HinhAnh', 'TenSanPham', 'GiaGoc', 'GiaBan');
    //     foreach($ds_sanpham as $sp){
    //         $sp_array = array(
    //             'Ma' => $sp->sp_ten,
    //             'HinhAnh' => $sp->sp_hinhanh,
    //             'TenSanPham' => $sp->sp_ten,
    //             'GiaGoc' => $sp->sp_giaGoc,
    //             'GiaBan' => $sp->sp_giaBan
    //         );
    //     }
    //     Excel::create('Danh Sach San Pham', function($excel) use ($sp_array){
    //         $excel->setTitle('Danh sach san pham');
    //         $excel->sheet('Danh sach san pham', function($sheet) use ($sp_array){
    //             $sheet->fromArray($sp_array, null, 'A1', false, false);
    //         });
    //     })->download('xlsx');
    //}

    // public function excel(){
    //     return Excel::download(new SanPhamExport, 'danhsachsanpham.xlsx');
    // }

    //Xem chi tiết sản phẩm
    public function deltail($id){
        $ctsp = ChiTietSanPham::where("sp_ma",  $id)->first();
        if($ctsp==NULL){
            Session::flash('alert-warning', 'Sản phẩm chưa thêm chi tiết. Mời bạn thêm vào!!!');
            return redirect()->route("chitietsanpham.create");
        }
        return view('backend.sanpham.chitietsanpham.deltail')->with('ctsp', $ctsp);
    }


    //Cập nhật chi tiết sản phẩm
    public function chitietsanphamUpdate(Request $request, $id){

        $ctsp = ChiTietSanPham::where("ctsp_ma",  $id)->first();
        $ctsp->ctsp_hang = $request->ctsp_hang;
        $ctsp->ctsp_loaiCPU = $request->ctsp_loaiCPU;
        $ctsp->ctsp_tocDoCPU = $request->ctsp_tocDoCPU;
        $ctsp->ctsp_loaiRAM = $request->ctsp_loaiRAM;
        $ctsp->ctsp_dungLuongRAM = $request->ctsp_dungLuongRAM;
        $ctsp->ctsp_loaiROM = $request->ctsp_loaiROM;
        $ctsp->ctsp_dungLuongROM = $request->ctsp_dungLuongROM;
        $ctsp->ctsp_kichThuocMonitor = $request->ctsp_kichThuocMonitor;
        $ctsp->ctsp_doPhanGiaiMonitor = $request->ctsp_doPhanGiaiMonitor;
        $ctsp->ctsp_cardDoHoa = $request->ctsp_cardDoHoa;
        $ctsp->ctsp_congKetNoi = $request->ctsp_congKetNoi;
        $ctsp->ctsp_pin =  $request->ctsp_pin;
        $ctsp->ctsp_HDH = $request->ctsp_HDH;
        $ctsp->ctsp_kichThuoc = $request->ctsp_kichThuoc;
        $ctsp->ctsp_trongLuong = $request->ctsp_trongLuong;

        $ctsp->save();

        Session::flash('alert-info', 'Cập nhật chi tiết sản phẩm thành công!!!');
        return redirect()->route('sanpham.index');
    }

    public function chitietsanphamCreate()
    {
        $dssp = DB::table('SanPham')
            ->leftJoin('ChiTietSanPham', 'ChiTietSanPham.sp_ma', '=', 'SanPham.sp_ma')
            ->select('SanPham.sp_ma', 'SanPham.sp_ten','ChiTietSanPham.ctsp_ma')
            ->where('ChiTietSanPham.ctsp_ma', '=', NULL)
            ->orderBy('SanPham.sp_ten', 'ASC')
            ->get();
        return view("backend.sanpham.chitietsanpham.create")
                ->with('dssp', $dssp);
    }

    public function chitietsanphamStore(Request $request)
    {
        $ctsp = new ChiTietSanPham();
        $ctsp->sp_ma = $request->sp_ma;
        $ctsp->ctsp_hang = $request->ctsp_hang;
        $ctsp->ctsp_loaiCPU = $request->ctsp_loaiCPU;
        $ctsp->ctsp_tocDoCPU = $request->ctsp_tocDoCPU;
        $ctsp->ctsp_loaiRAM = $request->ctsp_loaiRAM;
        $ctsp->ctsp_dungLuongRAM = $request->ctsp_dungLuongRAM;
        $ctsp->ctsp_loaiROM = $request->ctsp_loaiROM;
        $ctsp->ctsp_dungLuongROM = $request->ctsp_dungLuongROM;
        $ctsp->ctsp_kichThuocMonitor = $request->ctsp_kichThuocMonitor;
        $ctsp->ctsp_doPhanGiaiMonitor = $request->ctsp_doPhanGiaiMonitor;
        $ctsp->ctsp_cardDoHoa = $request->ctsp_cardDoHoa;
        $ctsp->ctsp_congKetNoi = $request->ctsp_congKetNoi;
        $ctsp->ctsp_pin =  $request->ctsp_pin;
        $ctsp->ctsp_HDH = $request->ctsp_HDH;
        $ctsp->ctsp_kichThuoc = $request->ctsp_kichThuoc;
        $ctsp->ctsp_trongLuong = $request->ctsp_trongLuong;

        $ctsp->save();

        Session::flash('alert-info', 'Cập nhật chi tiết sản phẩm thành công!!!');
        return redirect()->route('sanpham.index');
    }


    public function chitietsanphamDestroy($id){
        $ctsp = ChiTietSanPham::where("ctsp_ma",  $id)->first();
        $ctsp->delete();

        Session::flash('alert-info', 'Xóa thông tin sản phẩm thành công !!!');
        return redirect()->route('sanpham.index');
    }

}
