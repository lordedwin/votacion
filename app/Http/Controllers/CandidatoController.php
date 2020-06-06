<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidato;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatos = Candidato::paginate(3);

        return view('candidatos.index', ['candidatos'=>$candidatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidatos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
        
        'nombre' => 'required',
        'apellido' => 'required',
        'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $datos = request()->except('_token');

        $imagen = $request->file('imagen')->getClientOriginalName();
        Storage::putFileAs('public', new File($request->imagen), $imagen);
        

        $datos = new Candidato;
        $datos->nombre = $request->nombre;
        $datos->apellido = $request->apellido;
        $datos->imagen = $imagen;
        $datos->save();

        //return response() -> json($datos);
        return redirect()->route('candidato.index')->withStatus(__('Candidato agregado correctamente.'));
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
        $candidato = Candidato::find($id);

        return view('candidatos.editar', compact('candidato'));
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
        $datos = request()->except(['_token', '_method']);

        $datos = Candidato::find($id);
        $datos->nombre = request()->nombre;
        $datos->apellido = request()->apellido;
        $datos->imagen = request()->imagen;
        $datos->save();

        return redirect()->route('candidato.index')->withStatus(__('Candidato actualizado correctamente.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Candidato::destroy($id);
         return redirect()->route('candidato.index')->withStatus(__('Candidato eliminado correctamente.')); 
    }
}
