<?php

namespace App\Http\Controllers;

use App\Reception;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $recep = Reception::join('client', 'client.id', '=', 'receptions.client_id')
        // ->join('client', 'client.id', '=', 'reception.client_id')
        // ->get();
        // $recep = Reception::join('client', 'receptions.client_id', '=', 'client.id')->select('client.*', 'receptions.*')->get();
        // dd($users);

        $recep = Reception::join('client', 'receptions.client_id', '=', 'client.id')->select('client.*', 'receptions.*')->get();

        //$recep = Reception::join('reception', 'client.id', '=', 'receptions.client_id' )->select('client.*', 'receptions.*')->get();

        
        return view('reception.index', ['recep' => $recep]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reception.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addRecep = Reception::create([
            'client_id' => $request->input('client'),
            'dateRecep' => $request->input('dateRecep'),
            'observation' => $request->input('observation')
        ]);

        dd($addRecep);

        if($addRecep){
            return view('reception.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function show(Reception $reception)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function edit(Reception $reception)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reception $reception)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reception $reception)
    {
        //
    }
}
