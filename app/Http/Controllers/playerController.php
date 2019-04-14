<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class playerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $titulo="Registro jugador";
        return view('player\create', compact("titulo"));
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

        $player = new Player;

        $player->nombre=$request->nombre_player;
        $player->apellido_1=$request->apellido_1_player;
        $player->apellido_2=$request->apellido_2_player;
        $player->email=$request->email_player;
        $player->password=$request->pass_player;
        $player->telefono=$request->telefono_player;
        $player->num_licencia=$request->licencia_player;
        $player->pais_nacimiento=$request->pais_player;
        $player->fecha_nac=$request->fecha_nac_player;
        $player->localidad=$request->localidad_player;

        $player->save();
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
