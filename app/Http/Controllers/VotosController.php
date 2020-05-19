<?php

namespace App\Http\Controllers;

use App\Votos;
use Illuminate\Http\Request;

class VotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombres = array("Naruto", "Hinata", "Sasuke", "Itachi", "Kakashi");
        $ruta = 'imagen/';
        //$imagenes = array('naruto.png', 'hinata.png', 'sasuke.png', 'itachi.png', 'kakashi.png');

        return view('index', ['nombres' => $nombres,'ruta' => $ruta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hokage = $request->hokage;

        return view('registro', ['hokage' => $hokage]) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\votos  $votos
     * @return \Illuminate\Http\Response
     */
    public function show(votos $votos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\votos  $votos
     * @return \Illuminate\Http\Response
     */
    public function edit(votos $votos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\votos  $votos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, votos $votos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\votos  $votos
     * @return \Illuminate\Http\Response
     */
    public function destroy(votos $votos)
    {
        //
    }
}
