<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['adminLogin']], function ()
{
    //Route quản trị sản phẩm
    Route::get('/admin/sanpham_index', 'SanPhamController@index')->name('sanpham.index');
    Route::get('/admin/sanpham_create', 'SanPhamController@create')->name('sanpham.create');
    Route::post('/admin/sanpham_store', 'SanPhamController@store')->name('sanpham.store');
    Route::delete('/admin/sanpham_delete/{id}', 'SanphamController@destroy')->name('sanpham.delete');
    Route::get("/admin/sanpham_edit/{id}", 'SanPhamController@edit')->name('sanpham.edit');
    Route::put('/admin/sanpham_update/{id}', 'SanPhamController@update')->name('sanpham.update');
    Route::get('/admin/sanpham_deltail/{id}', 'SanPhamController@deltail')->name('sanpham.deltail');
    Route::get('/admin/sanpham_pdf', 'SanPhamController@pdf')->name('sanpham.pdf');
    Route::get('/admin/sanpham_print', 'SanPhamController@print')->name('sanpham.print');
    //Route::get('/admin/viewExcel', 'SanPhamController@viewExcel')->name('sanpham.excel');
    //Route::get('/admin/sanpham_excel', 'SanPhamController@excel')->name('sanpham.excel');

    //Route quản trị chi tiết sản phẩm
    Route::post('/admin/chitietsanpham_update/{id}', 'SanPhamController@chitietsanphamUpdate')->name('chitietsanpham.update');
    Route::get('/admin/chitietsanpham_create', 'SanPhamController@chitietsanphamCreate')->name('chitietsanpham.create');
    Route::post('/admin/chitietsanpham_store', 'SanPhamController@chitietsanphamStore')->name('chitietsanpham.store');
    Route::get('/admin/chitietsanpham_delete/{id}', 'SanphamController@chitietsanphamDestroy')->name('chitietsanpham.delete');

    //Route quản trị nhân viên
    Route::get('/admin/nhanvien_index', 'NhanVienController@index')->name('nhanvien.index');
    Route::get('/admin/nhanvien_create', 'NhanVienController@create')->name('nhanvien.create');
    Route::post('/admin/nhanvien_store', 'NhanVienController@store')->name('nhanvien.store');
    Route::delete('/admin/nhanvien_delete/{id}', 'NhanVienController@destroy')->name('nhanvien.delete');
    Route::get("/admin/nhanvien_edit/{id}", 'NhanVienController@edit')->name('nhanvien.edit');
    Route::put('/admin/nhanvien_update/{id}', 'NhanVienController@update')->name('nhanvien.update');
    Route::get('/admin/nhanvien_pdf', 'NhanVienController@pdf')->name('nhanvien.pdf');
    Route::get('/admin/nhanvien_print', 'NhanVienController@print')->name('nhanvien.print');
    //Route::get('/admin/nhanvien_excel', 'NhanVienController@excel')->name('nhanvien.excel');

    //Route quản trị khách hàng
    Route::get('/admin/khachhang_index', 'BackendController@showKhachHang')->name('khachhang.index');
    Route::get('/admin/khachhang_pdf', 'BackendController@khachhangPdf')->name('khachhang.pdf');
    Route::get('/admin/khachhang_print', 'BackendController@khachhangPrint')->name('khachhang.print');
    //Route quan tri don hang
    Route::get('/admin/donhang_index', 'BackendController@showDonHang')->name('donhang.index');
    Route::get('/admin/donhang_pdf', 'BackendController@donhangPdf')->name('donhang.pdf');
    Route::get('/admin/donhang_print', 'BackendController@donhangPrint')->name('donhang.print');
});


//Route dành cho Frontend
Route::get('/', 'FrontendController@index')->name('frontend.home');
Route::get('/san-pham/{id}', 'FrontendController@productDetail')->name('frontend.productDetail');
Route::get('/san-pham', 'FrontendController@product')->name('frontend.product');
Route::get('/gio-hang', 'FrontendController@cart')->name('frontend.cart');
Route::get('/gioi-thieu', 'FrontendController@about')->name('frontend.about');
Route::get('/lien-he', 'FrontendController@contact')->name('frontend.contact');
Route::post('/admin/phan-hoi', 'FrontendController@sendMailContactForm')->name('frontend.phanhoi');

//Quản lý đăng nhập:
route::get('/login', 'AuthController@getLogin')->name('getLogin');
route::post('/login', 'AuthController@postLogin')->name('postLogin');
route::get('/logout', 'AuthController@logout')->name('logout');

//Quản lí đặt hàng
Route::post('/dat-hang', 'FrontendController@order')->name('frontend.order');
Route::get('/dat-hang/hoan-tat', 'FrontendController@orderFinish')->name('frontend.orderFinish');


//Quản lý việc tìm kiếm
Route::get('/ket-qua-tim-kiem', 'FrontendController@search')->name('frontend.search');
Route::get('/sort-theo-gia/{id}', 'FrontendController@sortPrice')->name('frontend.sort');
Route::get('/tim-theo-gia-muc-1', 'FrontendController@findPrice1')->name('frontend.findPrice1');
Route::get('/tim-theo-gia-muc-2', 'FrontendController@findPrice2')->name('frontend.findPrice2');
Route::get('/tim-theo-gia-muc-3', 'FrontendController@findPrice3')->name('frontend.findPrice3');