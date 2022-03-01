<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ShowLogin() {
        return view('inlog');
    }
    public function CheckLogin(Request $request) {
        $request->validate([
            'uname'=>'required',
            'psw'=>'required'
        ]);
        $user_data = array(
            'name' => $request->get('uname'),
            'password' => $request->get('psw')
        );
        if(Auth::attempt($user_data))
        {
            echo "yea";
            return redirect('/');
        }
        else{
            return redirect('/inlog');
        }
    }
}
