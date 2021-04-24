<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = UserModel::all();
        return view('admin.content', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $new_user = new UserModel();
        $new_user->user_name = $request->input('user_name');
        $new_user->telephone = $request->input('telephone');
        $new_user->email = $request->input('inputEmail');
        $new_user->inputPassword = $request->input('inputPassword');

        $new_user->save();

        if ($new_user->save()){
            header('location: /show');
        }
    }

    public function show()
    {
        return view('show');
    }

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
    public function update()
    {
        return view('registration.registration');
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
