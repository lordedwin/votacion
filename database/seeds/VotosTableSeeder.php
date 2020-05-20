<?php

use Illuminate\Database\Seeder;
use App\Voto;

class VotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $voto = new Voto;
    	$voto->usuario_id = 1;
    	$voto->candidato_id = 1;
    	$voto->save();

    	$voto = new Voto;
    	$voto->usuario_id = 2;
    	$voto->candidato_id = 2;
    	$voto->save();

    	$voto = new Voto;
    	$voto->usuario_id = 3;
    	$voto->candidato_id = 3;
    	$voto->save();

    	$voto = new Voto;
    	$voto->usuario_id = 4;
    	$voto->candidato_id = 4;
    	$voto->save();

    	$voto = new Voto;
    	$voto->usuario_id = 5;
    	$voto->candidato_id = 5;
    	$voto->save();
    }
}
