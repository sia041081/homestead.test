<?php

namespace App\Http\Controllers;

use App\AbonementModel;
use App\TarifModel;
use App\UserModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = UserModel::all();
        $tarif = TarifModel::all();
        $abonement = AbonementModel::all();
       return view('admin.content', compact('user', 'tarif', 'abonement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.add');
    }

    public function show()
    {

    }

    public function add_abonement(Request $request)
    {
        $name = new AbonementModel();
        $name->name_abonement =  $request->input('addAbonement');
        $name->price = $request->input('abPrice');
        $name->period = $request->input('addDate');
        $name->save();
        header('location: /admin');


    }
    public function add_tarif(Request $request){
        $tarif = new TarifModel();
        $tarif->name_tarif = $request->input('addTarif');
        $tarif->percent = $request->input('addPercent');
        $tarif->price = $request->input('trPrice');
        $tarif->save();
        header('Location: /admin');
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
