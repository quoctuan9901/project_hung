<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function getLogin ()
    {
        return view('auth.login');
    }

    public function postLogin (Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['status'] = 'on';

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.category.index');
        } else {
            return redirect()->route('auth.getLogin')->with('error','Tài khoản không tồn tại');
        }

    }

    public function logout () 
    {
        Auth::logout();
        return redirect()->route('auth.getLogin');
    }   
}
