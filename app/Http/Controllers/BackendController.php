<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use App\DonHang;
use PDF;

class BackendController extends Controller
{
    //Hien thi danh sach sach khach hang
    public function showKhachHang(){
        $ds_kh = KhachHang::all();
        return view('backend.khachhang.index')->with('ds_kh', $ds_kh);
    }

    //Tạo chức năng xuất fiel PDF
    public function khachHangPdf(){
        $dskh = KhachHang::all();
        $pdf = PDF::loadView('backend.khachhang.pdf', compact('dskh'));
        return $pdf->download('DanhSachKhachHang.pdf'); 
    }
    //Tạo chức năng in ấn
    public function khachHangPrint(){
        $dskh = KhachHang::all();
        return view('backend.khachhang.print')
            ->with('dskh', $dskh);
    }
    //Hien thi don hang
    public function showDonHang(){
        $ds_dh = DonHang::all();
        return view('backend.donhang.index')
            ->with('ds_dh', $ds_dh);
    }

    //Tạo chức năng xuất fiel PDF
    public function donHangPdf(){
        $dsdh = DonHang::all();
        $pdf = PDF::loadView('backend.donhang.pdf', compact('dsdh'));
        return $pdf->download('DanhSachDonHang.pdf'); 
    }
    //Tạo chức năng in ấn trang Đơn hàng
    public function donHangPrint(){
        $dsdh = DonHang::all();
        return view('backend.donhang.print')
            ->with('dsdh', $dsdh);
    }
}
