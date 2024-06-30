<?php

namespace App\Http\Controllers\Client;

use App\Models\Users;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginUsersRequest;

class LoginController extends Controller
{
    public function login()
    {
        return view('client.login');
    }

    // public function loginHandle(LoginUsersRequest $req)
    // {
    //     $users = Users::where('email', $req->email)->first();

    //     if ($users) {
    //         if ($users->status_id == 1) {

    //             if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
    //                 return redirect()->route('home');
    //             } else {
    //                 return redirect()->route('user_login')->with('alert', 'Sai mật khẩu !!');
    //             }
    //         } elseif ($users->status_id == 2) {
    //             return redirect()->route('user_login')->with('alert', 'Tài khoản của bạn đã bị khóa !!');
    //         }
    //     } else {
    //         return redirect()->route('user_login')->with('alert', 'Truy cập bị từ chối!!');
    //     }
    // }

    public function loginHandle(LoginUsersRequest $req)
    {
        $user = Users::where('email', $req->email)->first();

        if ($user) {
            if ($user->status_id == 1) {
                if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
                    return redirect()->route('home');
                } else {
                    return redirect()->route('user_login')->with('alert', 'Sai mật khẩu !!');
                }
            } elseif ($user->status_id == 2) {
                return redirect()->route('user_login')->with('alert', 'Tài khoản của bạn đã bị khóa !!');
            }
        } else {
            return redirect()->route('user_login')->with('alert', 'Truy cập bị từ chối!!');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('user_login');
    }

    public function getLoginUser()
    {
        if (Auth::check()) {
            $username = Auth::user()->username;
            return $username;
        }
    }

    public function register()
    {
        return view('client.register');
    }
}
