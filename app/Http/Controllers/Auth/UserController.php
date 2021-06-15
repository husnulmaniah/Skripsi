<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('Auth/Login');
    }
    public function create(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $username=$request->input('username');
            $user = DB::table('users')->where('username', $username)->value('level');
            if ($user == 'admin') {
                $request->session()->put('ULvl',$username);
                return view('admin');
            }else {
                return redirect('Login');
            }
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        Return redirect('/');
    }
}
