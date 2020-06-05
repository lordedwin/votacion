<?php

namespace App\Http\Controllers;

use App\Voto;
use App\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotoController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		
		$datos = Candidato::paginate(6);

		//$nombres = array("Naruto", "Hinata", "Sasuke", "Itachi", "Kakashi");
		
		return view('votos.index', ['datos' => $datos]);
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
		$usuario = Auth::user()->id;
		$user = Voto::select('usuario_id')->firstWhere('usuario_id',$usuario);
		$nombre = Candidato::select('nombre')->firstWhere('id',$hokage);
		
		if ($usuario == isset($user->usuario_id)) {
			
			$mensaje='No puede realizar el voto';
			
		}else {
			 
			$mensaje="Se realizo el voto por ".$nombre->nombre;

			$voto = new Voto;
			$voto->usuario_id = Auth::user()->id;
			$voto->candidato_id = $request->hokage;
			$voto->save();
		}

		return view('votos.registro', compact('mensaje'));
	}
    
}
