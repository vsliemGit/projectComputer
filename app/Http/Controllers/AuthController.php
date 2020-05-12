<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function username()
    {
        return 'nv_taiKhoan';
    }

    public function getLogin()
    {
        return view('Auth.login'); //return ra trang login để đăng nhập
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'nv_taiKhoan' => $request->Username,
            'password' => $request->Password,
        ];

        if (Auth::attempt($arr)) {
            return redirect()->route("frontend.home");
        } else {
            return redirect()->back()
            ->withInput()->with("error", "Sai tài khoản hoặc mật khẩu");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("frontend.home");
    }
}
