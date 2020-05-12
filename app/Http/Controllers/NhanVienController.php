<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhanVien;
use Session;
use PDF;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ds_nv = NhanVien::all(); 
        return view('backend.nhanvien.index')->with('ds_nv', $ds_nv);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.nhanvien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nv = new NhanVien();
        $nv->nv_hoTen = $request->nv_hoTen;
        $nv->nv_taiKhoan = $request->nv_taiKhoan;
        $nv->nv_matKhau = md5($request->nv_matKhau);
        $nv->nv_email = $request->nv_email;
        $nv->nv_dienThoai = $request->nv_dienThoai;
        $nv->nv_trangThai = $request->nv_trangThai;
        $nv->q_ma = 7;
        $nv->save();

        Session::flash('alert-info', 'Thêm nhân viên mới thành công!!!');
        return redirect()->route('nhanvien.index');
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
        $nv = NhanVien::where('nv_ma', $id)->first();

        return view('backend.nhanvien.edit')->with('nv', $nv);
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
        $nv = NhanVien::where("nv_ma",  $id)->first();
        $nv->nv_hoTen = $request->nv_hoTen;
        $nv->nv_taiKhoan = $request->nv_taiKhoan;
        $nv->nv_email = $request->nv_email;
        $nv->nv_dienThoai = $request->nv_dienThoai;
        $nv->nv_capNhat = $request->nv_capNhat;
        $nv->nv_trangThai = $request->nv_trangThai;

        $nv->save();

        Session::flash('alert-info', 'Cập nhật thành công!!!');
        return redirect()->route('nhanvien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nv = NhanVien::where('nv_ma', $id)->first();
        $nv->delete();
        Session::flash('alert-info', 'Xóa nhân viên thành công!!!');
        return redirect()->route('nhanvien.index');
    }

    public function pdf(){
        $dsnv = NhanVien::all();
        $pdf = PDF::loadView('backend.nhanvien.pdf', compact('dsnv'));
        return $pdf->download('DanhSachNhienVien.pdf'); 
    }

    public function print(){
        $dsnv = NhanVien::all();
        return view('backend.nhanvien.print')
            ->with('dsnv', $dsnv);
    }
}
