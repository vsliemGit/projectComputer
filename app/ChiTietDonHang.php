<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model {
    public    $timestamps   = false;

    protected $table        = 'chitietdonhang';
    protected $fillable     = ['ctdh_soLuong', 'ctdh_donGia', 'ctdh_tongTien'];
    protected $guarded      = ['dh_ma', 'sp_ma'];

    protected $primaryKey   = ['dh_ma', 'sp_ma'];
    public    $incrementing = false;

    
}