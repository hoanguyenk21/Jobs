<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function profile()
    {
        return view('client.profile');
    }
    public function signup()
    {
        return view('client.register');
    }
    public function changepass()
    {
        return view('client.doimatkhau');
    }
    public function forgot()
    {
        return view('client.forgot-password');
    }
    public function job()
    {
        return view('client.single-job-page');
    }
    public function company()
    {
        return view('client.single-company-profile');
    }
    public function jobSave()
    {
        return view('client.yeuthich');
    }
    public function apply()
    {
        return view('client.ungtuyen');
    }
    public function login()
    {
        return view('client.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => 'required'
            ],
            [
                'email.required' => "Vui lòng không để trống email",
                'email.email' => "Vui lòng nhập đúng định dạng email",
                'password.required' => "Vui lòng không để trống password"
            ]
        );
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            User::where('email', $request->email)->update(['active' => 1]);
            return redirect(route('home'));
        } else {
            return redirect()->back()->with('msg', 'Tài khoản mật khẩu không chính xác');
        }
    }
}
