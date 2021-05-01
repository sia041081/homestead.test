<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\UserActions;
use App\Models\Abonement;
use App\Models\Tarif;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $new_user = new Users();
        $new_user->user_name = $request->input('user_name');
        $new_user->telephone = $request->input('telephone');
        $new_user->email = $request->input('inputEmail');
        $new_user->role = $request->input('role');
        $new_user->api_token = $request->input('token');
        $new_user->inputPassword = $request->input('inputPassword');

        $new_user->save();

        if ($new_user->save()){
            return redirect('/show/{id}');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('registration.registration');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = Users::all('id')->where('email', '=', $request->input('inputEmail'));
        $user = Users::all();
        $tarif = Tarif::all();
        $abonement = Abonement::all();
        return view('show', compact('user', 'tarif', 'abonement', 'request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
