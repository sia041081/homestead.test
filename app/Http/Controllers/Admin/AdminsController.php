<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Abonement;
use App\Models\Tarif;
use App\Models\Users;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Users::all();
        $tarif = Tarif::all();
        $abonement = Abonement::all();
        return view('admin.content', compact('user', 'tarif', 'abonement', 'request'));
    }
    public function add_abonement(Request $request)
    {
        $name = new Abonement();
        $name->name_abonement =  $request->input('addAbonement');
        $name->price = $request->input('abPrice');
        $name->period = $request->input('addDate');
        $name->save();
        header('location: /admin');


    }
    public function add_tarif(Request $request){
        $tarif = new Tarif();
        $tarif->name_tarif = $request->input('addTarif');
        $tarif->percent = $request->input('addPercent');
        $tarif->price = $request->input('trPrice');
        $tarif->save();
        header('Location: /admin');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
