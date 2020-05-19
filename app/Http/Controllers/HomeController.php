<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voto;
use App\Candidato;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $candidatos=Candidato::select('nombre')->get();
        $total=Voto::select('usuario_id')->count();
        $votos=Voto::where('candidato_id',1)->count();
        $votos1=Voto::where('candidato_id',2)->count();
        $votos2=Voto::where('candidato_id',3)->count();
        $votos3=Voto::where('candidato_id',4)->count();
        $votos4=Voto::where('candidato_id',5)->count();
        $votos5=Voto::where('candidato_id',6)->count();
        $votos6=Voto::where('candidato_id',7)->count();
        $votos7=Voto::where('candidato_id',8)->count();

        return view('home',['candidatos'=>$candidatos,'total'=>$total, 'votos'=>$votos, 'votos1'=>$votos1,'votos2'=>$votos2,'votos3'=>$votos3,'votos4'=>$votos4,'votos5'=>$votos5,'votos6'=>$votos6,'votos7'=>$votos7,]);
    }
}
