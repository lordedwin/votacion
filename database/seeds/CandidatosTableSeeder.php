<?php

use Illuminate\Database\Seeder;
use App\Candidato;

class CandidatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	$candidato = new Candidato;
    	$candidato->nombre = 'Naruto';
    	$candidato->apellido = 'Uzumaki';
    	$candidato->imagen = 'naruto.png'; 
    	$candidato->save();

    	$candidato = new Candidato;
    	$candidato->nombre = 'Sasuke';
    	$candidato->apellido = 'Uchiha';
    	$candidato->imagen = 'sasuke.png'; 
    	$candidato->save();

    	$candidato = new Candidato;
    	$candidato->nombre = 'Itachi';
    	$candidato->apellido = 'Uchiha';
    	$candidato->imagen = 'itachi.png'; 
    	$candidato->save();

    	$candidato = new Candidato;
    	$candidato->nombre = 'Kakashi';
    	$candidato->apellido = 'Hatake';
    	$candidato->imagen = 'kakashi.png'; 
    	$candidato->save();

   	}
}
