<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abonement;
use App\Models\Tarif;
use App\Models\Users;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function check(Request $request)
    {
//        dd($request);
//        $email = UserModel::where($request->input('inputEmail', 'email'));
//        $pass = UserModel::all('inputPassword');
//dd($email);
        $user = Users::all();
        $token =  $request->token;
        $tarif = Tarif::all();
        $abonement = Abonement::all();
        if (Users::where('email', $request->input('inputEmail'))->first() && Users::where('inputPassword', $request->input('inputPassword'))->first()) {
            return view('show', compact('request', 'tarif', 'abonement', 'token'));
        } else {
//            echo "<script>alert(\"Пожалуйста зарегистрируйтесь или введите правильный логи и пароль\");</script>";
          return "<script>alert(\"Пожалуйста зарегистрируйтесь или введите правильный логи и пароль\");</script>" . redirect('/');
        }
    }


}
