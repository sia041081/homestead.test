<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function check(Request $request)
    {
        $email = UserModel::where($request->input('inputEmail', 'email'));
        $pass = UserModel::all('inputPassword');
//dd($email);
        if (UserModel::where('email', $request->input('inputEmail'))->first() && UserModel::where('inputPassword', $request->input('inputPassword'))->first()) {
            return view('show');
        } else {
            return view('registration.registration');
        }
    }


}
