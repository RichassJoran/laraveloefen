<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function ShowRegister()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->get('uname'),
            'password' => Hash::make($request->psw),
            'email' => $request->get('email')

        ]);
        return redirect('/inlog');
    }
    //
}
