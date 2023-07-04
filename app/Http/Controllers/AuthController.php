<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Đăng nhập
    public function login()
    {
        return view('pages/login');
    }

    // Đăng ký
    public function register()
    {
        return view('pages/register');
    }

    // Xử lý đăng ký
    public function registerPost(Request $request): RedirectResponse
    {
        // Validate dữ liệu
        // ****************
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'min:6',
                'max:20',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/'
            ],
            // 'password_confirm' => 'required|same:password'
        ], [
            'name.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu không được quá 20 ký tự',
            'password.regex' => 'Mật khẩu phải có ít nhất 1 ký tự hoa, 1 ký tự thường và 1 số',
            // 'password_confirm.required' => 'Vui lòng nhập lại mật khẩu',
            // 'password_confirm.same' => 'Mật khẩu nhập lại không khớp'
        ]);
        // ****************
        // Check xem tài khoản đã tồn tại chưa
        // $check = User::where('email', $request->email)->first();
        // if ($check) {
        //     return redirect()->back()->with('error', 'Email đã tồn tại');
        // }
        // Tạo tài khoản
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/');
    }
}
